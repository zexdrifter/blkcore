<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::latest()->limit(5)->get();

        return view('frontend.index', compact('products'));
    }

    public function product(string $slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('frontend.product', compact('product'));
    }

    public function loginRegister()
    {
        return view('frontend.loginregister');
    }

    public function registerAction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => bcrypt($request->password),
            'role' => 'user',
        ]);

        return redirect()->back()->with('success', 'Registrasi berhasil. Anda sudah bisa login.');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            return redirect()->intended('frontend.index')->with('success', 'Login berhasil. Selamat datang ' . Auth::user()->name . '!');
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Login gagal. Email atau password salah.');
        }
    }

    public function aboutUs()
    {
        return view('frontend.about_us');
    }

    public function article(string $slug)
    {
        return view('frontend.article');
    }

    public function cart(Request $request)
    {
        $cart = $request->cookie('cart');
        if ($_COOKIE['cart']) {
            $cartItem = json_decode($_COOKIE['cart'], true);


            $queryIn = [];
            foreach ($cartItem as $item) {
                $queryIn[] = $item['productId'];
            }
            $productCart = Product::whereIn('id', $queryIn)->get();
            $totalPrice = 0;
            foreach ($productCart as $key => $product) {
                $product->quantity = $cartItem[$key]['quantity'];
                $product->total_price = $product->price * $product->quantity;
                $totalPrice += $product->total_price;
            }

            return view('frontend.cart', compact('productCart', 'totalPrice'));
        }

        return view('frontend.cart');
    }

    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->route('frontend.login_register');
        }
        $user = Auth::user();
        return view('frontend.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email, ' . Auth::user()->id,
            'phone' => 'required',
            'address' => 'required',
        ]);

        $user = User::find(Auth::user()->id);

        $oldPhoto = $user->photo;
        if ($request->hasFile('photo')) {
            // store photo to public storage
            $path = $request->file('photo')->store('uploads/user', 'public');
            $user->photo = $path;
            // hapus foto lama
            if ($oldPhoto) {
                Storage::disk('public')->delete($oldPhoto);
            }
        }

        // update password jika ada
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diupdate');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

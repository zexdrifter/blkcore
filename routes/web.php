<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



//////////////////////////////////////
// Admin Area
//////////////////////////////////////

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/authenticate', [AuthController::class, 'authenticate'])->name('admin.authenticate');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Hanya admin yang bisa mengakses route ini
Route::middleware(['isAdmin'])->group(function () {
    // Route dashboard home
    Route::get('admin/', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/profile', [AuthController::class, 'profile'])->name('admin.profile');
    Route::put('admin/profile', [AuthController::class, 'updateProfile'])->name('admin.profile.update');

    // Route user
    Route::get('admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('admin/users/{id}', [UserController::class, 'show'])->name('admin.users.show');
    Route::get('admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    // Route admin
    Route::get('admin/admins', [AdminController::class, 'index'])->name('admin.admins.index');
    Route::get('admin/admins/create', [AdminController::class, 'create'])->name('admin.admins.create');
    Route::post('admin/admins', [AdminController::class, 'store'])->name('admin.admins.store');
    Route::get('admin/admins/{id}', [AdminController::class, 'show'])->name('admin.admins.show');
    Route::get('admin/admins/{id}/edit', [AdminController::class, 'edit'])->name('admin.admins.edit');
    Route::put('admin/admins/{id}', [AdminController::class, 'update'])->name('admin.admins.update');
    Route::delete('admin/admins/{id}', [AdminController::class, 'destroy'])->name('admin.admins.destroy');

    // Route product
    Route::get('admin/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('admin/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('admin/products/{id}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});



//////////////////////////////////////
// User Front Area
//////////////////////////////////////
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/loginregister', [FrontendController::class, 'loginRegister'])->name('frontend.login_register');
Route::post('/register-action', [FrontendController::class, 'registerAction'])->name('frontend.register_action');
Route::post('/login-action', [FrontendController::class, 'loginAction'])->name('frontend.login_action');

Route::middleware(['auth'])->group(function () {
    Route::get('/product/{slug}', [FrontendController::class, 'product'])->name('frontend.product');
    Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('frontend.about_us');
    Route::get('/article/{slug}', [FrontendController::class, 'article'])->name('frontend.article');
    Route::get('/cart', [FrontendController::class, 'cart'])->name('frontend.cart');
    Route::get('/profile', [FrontendController::class, 'profile'])->name('frontend.profile');
    Route::put('/update-profile', [FrontendController::class, 'updateProfile'])->name('frontend.update_profile');
    Route::get('/logout', [FrontendController::class, 'logout'])->name('frontend.logout');
});

Route::redirect('/laravel/login', '/loginregister')->name('login');
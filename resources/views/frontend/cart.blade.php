@extends('frontend.frontend_layout')

@section('title', 'Cart')

@section('content')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <h2 class="mb-4">Your shopping cart</h2>
        <div class="cart-items">
          <!-- Repeat this block for each item -->
          @foreach ($productCart as $item)
          <div class="cart-item d-flex align-items-center mb-4">
            <img src="{{ asset('storage/'.$item->photo) }}" alt="Product" class="mr-3" style="width: 100px; height: 100px; object-fit: cover;">
            <div class="flex-grow-1">
              <h5 class="mb-1">{{ $item->name }}</h5>
              {{-- <p class="text-muted mb-0">Yellow, Jeans</p> --}}
            </div>
            <div class="d-flex align-items-center">
              <select class="form-control mr-3" style="width: 70px;">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              <h5 class="mb-0 mr-3">{{ formatRupiah($item->price) }}</h5>
              <button class="btn btn-link text-danger">REMOVE</button>
            </div>
          </div>
          @endforeach
          {{-- <div class="cart-item d-flex align-items-center mb-4">
            <img src="path_to_image" alt="Product" class="mr-3" style="width: 100px; height: 100px; object-fit: cover;">
            <div class="flex-grow-1">
              <h5 class="mb-1">Winter jacket for men and lady</h5>
              <p class="text-muted mb-0">Yellow, Jeans</p>
            </div>
            <div class="d-flex align-items-center">
              <select class="form-control mr-3" style="width: 70px;">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              <h5 class="mb-0 mr-3">$1156.00</h5>
              <button class="btn btn-link text-danger">REMOVE</button>
            </div>
          </div> --}}
          <!-- End of item block -->
        </div>
        <div class="mt-4">
          <p><i class="fas fa-truck mr-2"></i>Free Delivery within 1-2 weeks</p>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4">Order Summary</h5>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Coupon code">
              <button class="btn btn-outline-secondary mt-2">APPLY</button>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Total price:</span>
              <span>{{ $totalPrice ? formatRupiah($totalPrice) : 'Rp. 0'}}</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Discount:</span>
              <span class="text-success">-Rp. 10.000</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>TAX:</span>
              <span>Rp. 12.000</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-4">
              <strong>Total price:</strong>
              <strong>Rp. 230.000</strong>
            </div>
            <button class="btn btn-primary btn-block mb-2">MAKE PURCHASE</button>
            <button class="btn btn-outline-secondary btn-block">BACK TO SHOP</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

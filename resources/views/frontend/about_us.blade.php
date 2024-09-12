@extends('frontend.frontend_layout')

@section('title', 'About Us')

@section('content')
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1>Apa Itu Blackcore?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus sollicitudin porta. Aenean rutrum feugiat
          eros, ac imperdiet diam pretium quis. Integer ligula massa, sodales et nulla eget, gravida sodales dolor.</p>
        <a href="index.html" class="btn btn-light">Kembali ke Halaman Utama</a>
      </div>
    </div>
  </section>

  <section class="about-section">
    <div class="container">
      <h2 class="text-center">Tentang Kami</h2>
      <hr class="divider">
      <div class="row">
        <div class="col-md-6 order-md-2 order-1 mb-3 mb-md-0">
          <h3>Lorem Ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus sollicitudin porta. Aenean rutrum
            feugiat eros, ac imperdiet diam pretium quis. Integer ligula massa, sodales et nulla eget, gravida sodales
            dolor. Praesent egestas erat nec felis iaculis pulvinar. Sed laoreet felis leo, et blandit lectus feugiat
            scelerisque. Sed tristique lectus. Nec fermentum nisi, et gravida augue congue sit amet. Orci varius natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
        <div class="col-md-6">
          <img src="path/to/image1.jpg" alt="Image 1" class="img-fluid">
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6 order-md-2">
          <h3>Lorem Ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus sollicitudin porta. Aenean rutrum
            feugiat eros, ac imperdiet diam pretium quis. Integer ligula massa, sodales et nulla eget, gravida sodales
            dolor. Praesent egestas erat nec felis iaculis pulvinar. Sed laoreet felis leo, et blandit lectus feugiat
            scelerisque. Sed tristique lectus. Nec fermentum nisi, et gravida augue congue sit amet. Orci varius natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
        <div class="col-md-6 order-md-1">
          <img src="path/to/image2.jpg" alt="Image 2" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
@endsection

@extends('frontend.frontend_layout')

@section('content')
  <section class="banner bg-1" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-8 align-self-center">
          <!-- Contents -->
          <div class="content-block">
            <h1>Amazing App Best for business</h1>
            <h5>Let you track everything in your life with a simple way</h5>
            <!-- App Badge -->
            <div class="app-badge">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#" class="btn btn-download"><i class="ti-android"></i>
                    <div>Get it on the<span>GOOGLE PLAY</span></div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn btn-download"><i class="ti-apple"></i>
                    <div>Available on the<span>Apple store</span></div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <!-- App Image -->
          <div class="image-block">
            <img class="img-fluid phone-thumb" src="images/phones/iphone-banner.png" alt="iphone-banner">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====  End of Homepage Banner  ====-->

  <section class="products" id="product">
    <div class="container">
      <div class="row product-container">
        <div class="col-12">
          <div class="section-title text-center mb-4">
            <h2 class="mb-2">Produk</h2>
            <p class="section-subtitle">Order it for you or for your beloved ones</p>
          </div>
        </div>
      </div>
      <div class="product-container">
        <div class="product-wrapper">
          <!-- Product Item 1 -->
          @foreach ($products as $item)
          <a href="{{ route('frontend.product', $item->slug) }}" class="product-item">
            <div class="product-image">
              <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}">
            </div>
            <div class="product-content">
              <h3>{{ $item->name }}</h3>
              <p class="price">{{ formatRupiah($item->price) }}</p>
            </div>
          </a>
          @endforeach

          <!-- Product Item 5 (moved here) -->
          
          <!-- Add more product items as needed -->

        </div>
      </div>
    </div>
  </section>

  <section class="berita section" id="berita">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2>Berita</h2>
            <p class="section-subtitle">Berita tentang Blackcore</p>
          </div>
        </div>
      </div>
      <div class="berita-container">
        <div class="berita-wrapper">
          <!-- News Item 1 -->
          <a href="{{ route('frontend.article', 'lorem-ipsum-dolor') }}">
          <div class="berita-item">
            <div class="berita-image">
              <!-- Placeholder for image -->
            </div>
            <div class="berita-content">
              <a href="{{ route('frontend.article', 'lorem-ipsum-dolor') }}">
                <h3>Lorem Ipsum Dolor</h3>
              </a>
              <p class="date">17 Agustus 2045</p>
              <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus sollicitudin
                porta...</p>
              <span class="btn btn-sm btn-danger">Produk Terbaru</span>
            </div>
          </div>
          <!-- News Item 2 -->
          <div class="berita-item">
            <div class="berita-image">
              <!-- Placeholder for image -->
            </div>
            <div class="berita-content">
              <a href="{{ route('frontend.article', 'lorem-ipsum-dolor') }}">
                <h3>Lorem Ipsum Dolor</h3>
              </a>
              <p class="date">18 Agustus 2045</p>
              <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus sollicitudin
                porta...</p>
              <span class="btn btn-sm btn-danger">Produk Terbaru</span>
            </div>
          </div>
          <!-- News Item 3 -->
          <div class="berita-item">
            <div class="berita-image">
              <!-- Placeholder for image -->
            </div>
            <div class="berita-content">
              <a href="{{ route('frontend.article', 'lorem-ipsum-dolor') }}">
                <h3>Lorem Ipsum Dolor</h3>
              </a>
              <p class="date">19 Agustus 2045</p>
              <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus sollicitudin
                porta...</p>
              <span class="btn btn-sm btn-danger">Produk Terbaru</span>
            </div>
          </div>
          <!-- News Item 4 -->
          <div class="berita-item">
            <div class="berita-image">
              <!-- Placeholder for image -->
            </div>
            <div class="berita-content">
              <a href="{{ route('frontend.article', 'lorem-ipsum-dolor') }}">
                <h3>Lorem Ipsum Dolor</h3>
              </a>
              <p class="date">20 Agustus 2045</p>
              <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus sollicitudin
                porta...</p>
              <span class="btn btn-sm btn-danger">Produk Terbaru</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--============================
     =            Testimonials            =
     =============================-->

  <section class="testimoni section" id="testimoni">
    <div class="container">
      <h2 class="section-title">Testimoni</h2>
      <p class="section-subtitle">Pelanggan yang Menggnakan Blackcore</p>
      <div class="testimoni-wrapper">
        <div class="testimoni-item">
          <img src="path/to/luisa-image.jpg" alt="Luisa" class="author-image">
          <div class="rating">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star empty">★</span>
          </div>
          <p class="quote">"I love it! No more air fresheners"</p>
          <p class="author">Luisa</p>
        </div>
        <div class="testimoni-item">
          <img src="path/to/edoardo-image.jpg" alt="Edoardo" class="author-image">
          <div class="rating">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
          <p class="quote">"Raccomended for everyone"</p>
          <p class="author">Edoardo</p>
        </div>
        <div class="testimoni-item">
          <img src="path/to/mart-image.jpg" alt="Mart" class="author-image">
          <div class="rating">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star empty">★</span>
          </div>
          <p class="quote">"Looks very natural, the smell is awesome"</p>
          <p class="author">Mart</p>
        </div>
      </div>
    </div>
  </section>

  <!--====  End of Testimoni  ====-->

  <section class="youtube-section">
    <div class="container">
      <h2 class="section-title">Youtube</h2>
      <p class="section-subtitle">Update Video Youtube Terbaru</p>

      <div class="video-grid">
        <!-- Video 1 -->
        <div class="video-item">
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/HV_oM67Lqjc" frameborder="0"
            allowfullscreen></iframe>

        </div>

        <!-- Video 2 -->
        <div class="video-item">
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/b-2xHSmomak" frameborder="0"
            allowfullscreen></iframe>
        </div>

        <!-- Video 3 -->
        <div class="video-item">
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/jNWuEpU1aMM" frameborder="0"
            allowfullscreen></iframe>

        </div>

        <!-- Video 4 -->
        <div class="video-item">
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/H1AKC1-fzcc" frameborder="0"
            allowfullscreen></iframe>

        </div>

        <!-- Video 5 -->
        <div class="video-item">
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/KBf9Ryu33SQ" frameborder="0"
            allowfullscreen></iframe>

        </div>

        <!-- Video 6 -->
        <div class="video-item">
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/k3EoQKXhE-4" frameborder="0"
            allowfullscreen></iframe>

        </div>
      </div>
    </div>
  </section>

  <section class="tanya-jawab-section">
    <div class="container">
      <div class="section-title text-center">
        <h2>Tanya Jawab</h2>
        <p class="section-subtitle">Pertanyaan yang sering diajukan</p>
      </div>
      <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-item-header">
            Apa Beda Blackcore Ultimate dan Blackcore Diesel?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              Web Development broadly refers to the tasks associated with developing functional websites and
              applications for the Internet. The web development process includes web design, web content development,
              client-side/server-side scripting and network security configuration, among other tasks.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Berapa Harga Blackcore dan Dapatnya Apa Saja?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HTML, aka HyperText Markup Language, is the dominant markup language for creating websites and anything
              that can be viewed in a web browser.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Apa Aja Keuntungan Memasang Blackcore?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <ul style="padding-left: 1rem;">
                <li>HTML, CSS, JavaScript</li>
                <li>Frameworks (CSS and JavaScript frameworks)</li>
                <li>Responsive Design</li>
                <li>Version Control/Git</li>
                <li>Testing/Debugging</li>
                <li>Browser Developer Tools</li>
                <li>Web Performance</li>
                <li>SEO (Search Engine Optimization)</li>
                <!-- <li>CSS Preprocessing</li> -->
                <li>Command Line</li>
                <li>CMS (Content Management System)</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Cara Pemasangan Blackcore Pada Mesin Mobil Bensin
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HTTP, aka HyperText Transfer Protocol, is the underlying protocol used by the World Wide Web and this
              protocol defines how messages are formatted and transmitted, and what actions Web servers and browsers
              should take in response to various commands.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Cara Pemasangan Blackcore Pada Mesin Mobil Diesel
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images,
              stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from
              which the resource originated.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Bagaimana Blackcore Bekerja?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images,
              stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from
              which the resource originated.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Apakah Ada Efek Negatif dari Blackcore Ini di Jangka Panjang?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images,
              stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from
              which the resource originated.
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection

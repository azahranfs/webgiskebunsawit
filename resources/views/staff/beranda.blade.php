<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>WebGIS Kebun Sawit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>

<!-- Navbar -->
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" width="35" class="me-2" />
        <span>WebGIS Sawit</span>
      </a>
  
      <!-- Tombol hamburger -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Menu collapse -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto gap-3 text-center">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Article</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
  
        <!-- Tombol logout -->
        <div class="d-flex justify-content-center mt-3 mt-lg-0">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-light rounded-pill">LOGOUT →</button>
            </form>
        </div>
      </div>
    </div>
  </nav>
    
  
  <!-- Hero Section -->
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="hero-slide" style="background-image: url('{{ asset('img/sawit1.png') }}');"></div>
    </div>
    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('img/sawit2.jpg') }}');"></div>
    </div>
    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('img/sawit3.jpg') }}');"></div>
    </div>
  </div>

  
    <!-- Optional controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  
    <!-- Overlay content -->
    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
      <h1 class="display-4 fw-bold">Website Sistem<br>Informasi Geografis<br>Kebun Sawit</h1>
      <p class="lead">Lampung, Indonesia</p>
      <a href="{{ route('staff.peta') }}" class="btn btn-custom mt-3">PETA KEBUN →</a>
    </div>
  </div>

<!-- About Us Section -->
<section class="about-section py-5">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-5">
      
      <!-- Text -->
      <div class="about-text col-md-6">
        <h2 class="fw-bold mb-3">About Us</h2>
        <h5 class="mb-3">Selamat Datang di Website Kebun Sawit Lampung!</h5>
        <p>Perkebunan kelapa sawit merupakan salah satu industri yang memberikan kontribusi signifikan terhadap perekonomian di Indonesia, termasuk di Provinsi Lampung. Data dari Dinas Perkebunan Provinsi Lampung menunjukkan bahwa pada tahun 2020, luas areal perkebunan kelapa sawit mencapai 196.312 hektar, menempatkan Lampung pada posisi ke-13 secara nasional.</p>
        <a href="#" class="btn btn-readmore mt-3">Read more →</a>
      </div>
  
      <!-- Image -->
      <div class="about-img col-md-5">
        <img src="{{ asset('img/about.png') }}" alt="Petani Sawit" class="img-fluid rounded-4 shadow">
      </div>
      
    </div>
  </section>
  
<!-- Layaer Section -->  
<section class="layer-section">
  <div class="container">
    <div class="layer-content">
      <div class="map-box">
        <img src="{{ asset('img/peta.png') }}" alt="Peta Kebun Sawit">
        <a href="{{ route('staff.peta') }}" class="map-button">Click Here ⤵</a>
      </div>
      <div class="layer-list">
        <h2>Layer</h2>
        <ul>
          <li><span class="checkmark">✔</span> Batas Wilayah</li>
          <li><span class="checkmark">✔</span> Pohon Sawit</li>
          <li><span class="checkmark">✔</span> Jalur Irigasi</li>
          <li><span class="checkmark">✔</span> Jalan</li>
        </ul>
      </div>
    </div>
  </div>
</section>

  <section class="article-section">
    <h2>Article</h2>
  
    <div class="testimonial-container">
      <div class="testimonial-card">
        <p class="testimonial-text">“Flow transformed my energy use. Efficient, green tech, outstanding service!”</p>
        <div class="user-info">
          <img src="https://i.pravatar.cc/40?img=1" alt="User 1">
          <div>
            <div class="user-name">Jenny Wilson</div>
            <div class="user-role">Solar energy service</div>
          </div>
        </div>
      </div>
  
      <div class="testimonial-card">
        <p class="testimonial-text">“Flow redefined my energy game – green, efficient, and top-notch service!”</p>
        <div class="user-info">
          <img src="https://i.pravatar.cc/40?img=2" alt="User 2">
          <div>
            <div class="user-name">Dianne Russell</div>
            <div class="user-role">EV service</div>
          </div>
        </div>
      </div>
  
      <div class="testimonial-card">
        <p class="testimonial-text">“Thanks to Flow, my energy is now solar-powered – sustainable, efficient, and exceptional service.”</p>
        <div class="user-info">
          <img src="https://i.pravatar.cc/40?img=3" alt="User 3">
          <div>
            <div class="user-name">Cody Fisher</div>
            <div class="user-role">Solar energy service</div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="quote-section">  
      <div class="quote-text">
        “Our commitment to green energy is paving the way for a cleaner, healthier planet.”
      </div>
      <a href="#" class="cta-button">Get in touch</a>
    </div>
  </section>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

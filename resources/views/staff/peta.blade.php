<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SIG Kebun Sawit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link href="https://unpkg.com/leaflet/dist/leaflet.css" rel="stylesheet"  />
  <link rel="stylesheet" href="{{ asset('css/peta.css') }}"/>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" width="35" class="me-2" />
        <span>WebGIS Sawit</span>
      </a>
  
        <!-- Tombol logout -->
        <div class="d-flex justify-content-center mt-3 mt-lg-0">
          <a href="{{ route('staff.beranda') }}" class="btn btn-outline-light rounded-pill">Home →</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Kontainer peta -->
  <div class="container mt-4">
    <h4>Peta Interaktif Kebun Sawit</h4>
    <div id="map"></div>
  </div>

<section class="article-section">
  <div class="quote-section">  
    <div class="quote-text">
      “Our commitment to green energy is paving the way for a cleaner, healthier planet.”
    </div>
    <a href="#" class="cta-button">Get in touch</a>
  </div>
</section>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

<!-- GeoTIFF & GeoRaster -->
<script src="https://unpkg.com/geotiff/dist/geotiff.browser.min.js"></script>

<!-- File JavaScript kamu -->
<script src="{{ asset('js/peta.js') }}"></script>

</body>
</html>

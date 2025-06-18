alert("JS berhasil dimuat!");

// Inisialisasi peta
var map = L.map('map').setView([-4.119, 105.306], 13); // Ganti koordinat sesuai lokasi kebun sawit

// Tambahkan tile layer dari OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Tambahkan marker dummy
var marker = L.marker([-4.119, 105.306]).addTo(map);
marker.bindPopup("<b>Ini titik kebun sawit</b><br>ID: P001").openPopup();

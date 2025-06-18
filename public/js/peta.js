// Inisialisasi peta di koordinat lokasi kebun kamu
const map = L.map('map').setView([-4.024096,105.044538], 13); // ganti sesuai lokasi kebun sawit kamu

// Basemap: Satelit Google dan Google Maps (pakai provider dari leaflet providers)
const googleSat = L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    attribution: 'Google Satellite'
}).addTo(map);

const googleMaps = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    attribution: 'Google Maps'
});

const citraDrone = L.tileLayer('Maprik/{z}/{x}/{y}.png', {
    attribution: 'Citra Drone - Mesuji',
    maxZoom: 22
}).addTo(map);

// Fungsi untuk menentukan warna berdasarkan tipe jalan
function styleJalan(feature) {
    const jenis = feature.properties.jenis;
  
    let color = 'gray';
    if (jenis === 'jalan_perawatan') color = 'orange';
    else if (jenis === 'jalan_produksi') color = 'red';
    else if (jenis === 'jalan_utama') color = 'black';
  
    return {
      color: color,
      weight: tipe === 'utama' ? 3 : 2
    };
  }
  
  // Load GeoJSON jalan kebun
  fetch('Assets/layer/jalan_kebun.geojson')
    .then(res => res.json())
    .then(data => {
      const layerJalan = L.geoJSON(data, {
        style: styleJalan,
        onEachFeature: (feature, layer) => {
          layer.bindPopup("Jalan: " + feature.properties.tipe);
        }
      }).addTo(map);
    });


const baseLayers = {
    "Google Streets": googleMaps,
    "Google Satellite": googleSat
  };
  
  const overlayLayers = {
    "Citra Drone (Berhasil Mesuji)": citraDrone
  };
  
L.control.layers(baseLayers, overlayLayers).addTo(map);
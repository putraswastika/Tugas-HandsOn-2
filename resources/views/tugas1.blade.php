<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Peta Interaktif dengan Laravel</title>

 <!-- Leaflet.js CDN -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
 
 <!-- Google Maps API -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4lKVb0eLSNyhEO-C_8JoHhAvba6aZc3U"></script>
 
 <style>
 body {
     font-family: Arial, sans-serif;
     margin: 0;
     padding: 0;
     background-color: grey;
 }
 h1 {
     text-align: center;
     padding: 10px;
     color: white;
 }
 .map-container {
     display: flex;
     flex-wrap: wrap;
     justify-content: space-around;
     gap: 20px;
     margin: 20px auto;
 }
 .map-section {
     flex: 1 1 calc(50% - 40px);
     min-width: 300px;
     max-width: 600px;
     border: 1px solid #ccc;
     border-radius: 10px;
     padding: 10px;
     background-color: #f9f9f9;
 }
 .map {
     height: 500px;
     border: 1px solid #ccc;
     border-radius: 10px;
 }
 .map-title {
     text-align: center;
     font-weight: bold;
     margin-bottom: 10px;
 }
 </style>
</head>
<body>
<h1>Peta Interaktif dengan Laravel</h1>
<div class="map-container">
    <div class="map-section">
        <div class="map-title">Peta Leaflet</div>
        <div id="leaflet-map" class="map"></div>
    </div>
    <div class="map-section">
        <div class="map-title">Peta Google Maps</div>
        <div id="google-map" class="map"></div>
    </div>
</div>

<script>
// Leaflet.js Map
const leafletMap = L.map('leaflet-map').setView([-8.7984047, 115.1698715], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(leafletMap);

const leafletMarker = L.marker([-8.655888195215992, 115.21626571567826]).addTo(leafletMap);
leafletMarker.bindPopup("<b>Kantor: Walikota Denpasar</b>"); // Hapus .openPopup()

// Tambahkan event listener untuk membuka popup ketika marker diklik
leafletMarker.on('click', function () {
    leafletMarker.openPopup(); // Membuka popup saat marker diklik
    leafletMap.setView(leafletMarker.getLatLng(), 16); // Zoom ke marker
});

//tambahkan event listenenr untuk zoom out ketika popup ditutup
leafletMarker.on('popupclose', function () {
    leafletMap.setView(leafletMarker.getLatLng(), 13); // Zoom out ke posisi semula
});

// Memastikan peta otomatis berada di tengah marker
leafletMap.whenReady(() => {
    leafletMap.invalidateSize(); // Perbarui ukuran peta
    leafletMap.setView(leafletMarker.getLatLng(), 13); // Atur ulang posisi tampilan ke marker
});


// Google Maps API Map
const googleMapDiv = document.getElementById('google-map');
const googleMap = new google.maps.Map(googleMapDiv, {
    center: { lat: -8.7984047, lng: 115.1698715},
    zoom: 13,
});

// Marker pada Google Maps API
const googleMarker = new google.maps.Marker({
    position: { lat: -8.7984047, lng: 115.1698715 },
    map: googleMap,
    title: "Kantor: Rektorat Universitas Udayana",
});

// Info Window untuk Google Maps API
const googleInfoWindow = new google.maps.InfoWindow({
    content: "<b>Kantor: Rektorat Universitas Udayana</b>",
});

// Event Listener untuk membuka InfoWindow
googleMarker.addListener('click', () => {
    googleMap.setZoom(16);
    googleInfoWindow.open(googleMap, googleMarker);
    googleMap.setCenter(googleMarker.getPosition());
});

// Event Listener untuk zoom out ketika InfoWindow ditutup
googleInfoWindow.addListener('closeclick', () => {
    googleMap.setZoom(13);
    googleMap.setCenter(googleMarker.getPosition());
});
</script>
</body>
</html>

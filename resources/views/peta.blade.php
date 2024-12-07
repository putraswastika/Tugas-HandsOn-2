<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Dasar Peta Interaktif</title>
 
 <!-- Leaflet.js CDN -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
 <!-- Google Maps API -->
 <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyC4lKVb0eLSNyhEO-C_8JoHhAvba6aZc3U"></script>
 <style>
 body {
 font-family: Arial, sans-serif;
 margin: 0;
 padding: 0;
 }
 h1 {
 text-align: center;
 padding: 10px;
 }
 #leaflet-map, #google-map {
 height: 400px;
 margin: 20px auto;
 max-width: 90%;
 }
 </style>
</head>
<body>
<h1>Peta Interaktif dengan Laravel dengan PETA</h1>
 <div id="leaflet-map"></div>
 <div id="google-map"></div>
 <script>
 // Leaflet.js Map
 const leafletMap = L.map('leaflet-map').setView([-8.6509, 115.2194], 13);
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
 attribution: '&copy; OpenStreetMap contributors'
 }).addTo(leafletMap);
 const leafletMarker = L.marker([-8.6509, 115.2194]).addTo(leafletMap);
 leafletMarker.bindPopup("<b>Universitas Udayana</b><br>Denpasar, Bali").openPopup();
 // Google Maps API Map
 const googleMapDiv = document.getElementById('google-map');
 const googleMap = new google.maps.Map(googleMapDiv, {
 center: { lat: -8.6509, lng: 115.2194 },
 zoom: 13,
 });
 new google.maps.Marker({
 position: { lat: -8.6509, lng: 115.2194 },
 map: googleMap,
 title: "Universitas Udayana",
 });
 </script>
</body>
</html>

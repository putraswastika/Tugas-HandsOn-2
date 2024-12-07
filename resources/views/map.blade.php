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
<h1>Peta Interaktif dengan Laravel</h1>
 <div id="leaflet-map"></div>
 <div id="google-map"></div>
 <script>
 // Leaflet.js Map
 const leafletMap = L.map('leaflet-map').setView([-8.6509, 115.2194], 13);
 L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://carto.com/">CARTO</a>'
 }).addTo(leafletMap);

 // Marker pada Leaflet.js
 const leafletMarker = L.marker([-8.6509, 115.2194]).addTo(leafletMap);
 leafletMarker.bindPopup("<b>Universitas Udayana</b><br>Denpasar, Bali").openPopup();
 const marker2 = L.marker([-8.6565, 115.2221]).addTo(leafletMap);
 marker2.bindPopup("<b>Lokasi Kedua</b><br>Denpasar, Bali");

 leafletMarker.on('click', function () {
     leafletMap.setView(leafletMarker.getLatLng(), 16);
 });
 marker2.on('click', function () {
     leafletMap.setView(marker2.getLatLng(), 16);
 });

 // Google Maps API Map
 const googleMapDiv = document.getElementById('google-map');
 const googleMap = new google.maps.Map(googleMapDiv, {
     center: { lat: -8.6509, lng: 115.2194 },
     zoom: 13,
 });
    // Marker pada Google Maps API
    const googleMarker1 = new google.maps.Marker({
        position: { lat: -8.6509, lng: 115.2194 },
        map: googleMap,
    });
    //info window pada google maps
    const infoWindow1 = new google.maps.InfoWindow({
        content: "<b>Universitas Udayana</b><br>Denpasar, Bali",
    });
    //marker kedua
    const googleMarker2 = new google.maps.Marker({
        position: { lat: -8.6565, lng: 115.2221 },
        map: googleMap,
    });
    //info window pada google maps
    const infoWindow2 = new google.maps.InfoWindow({
        content: "<b>Lokasi Kedua</b><br>Denpasar, Bali",
    });
    //even listener untuk zoom pada google maps
    googleMarker1.addListener('click',() =>{
        googleMap.setZoom(16);
        googleMap.setCenter(googleMarker1.getPosition());
        infoWindow1.open(googleMap, googleMarker1);
    });
    googleMarker2.addListener('click',() =>{
        googleMap.setZoom(16);
        googleMap.setCenter(googleMarker1.getPosition());
        infoWindow2.open(googleMap, googleMarker2);
    });
 </script>
</body>
</html>

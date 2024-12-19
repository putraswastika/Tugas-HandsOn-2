<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tugas-HandsOn-1</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css')}}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/dist/css/adminlte.min.css')}}" />
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
     background-color: grey;
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
     color: black;
     font-weight: bold;
     margin-bottom: 10px;
 }
 .judul-tugas {
 text-align: center;
 padding: 10px;
 }

    </style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{asset('AdminLTE-3.2.0/dist/img/hitamputih.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">Teknik Elektro'21</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('AdminLTE-3.2.0/dist/img/2105541127_I Ketut Putra Swastika.jpg')}}" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">127 | Putra Swastika</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/profile" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/map" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Latihan-HandsOn-1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/tugas1" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Tugas-HandsOn-1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/latihan2" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Latihan-HandsOn-2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/tugas2" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Tugas-HandsOn-2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/tester" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Web-Tester</p>
                            </a>
                        </li>                          
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tugas-HandsOn-1</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <!-- /.card-header -->
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h1 class="judul-tugas">Peta Interaktif dengan Laravel</h1>
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
    content: "<b style='color:black;'>Kantor: Rektorat Universitas Udayana</b>",
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('AdminLTE-3.2.0/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE-3.2.0/dist/js/adminlte.js')}}"></script>
</body>
</html>

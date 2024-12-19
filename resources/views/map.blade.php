<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Latihan-HandsOn-1</title>

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
        .judul {
            margin-top: 10px;
            padding: 10px;
        }
        .form-container {
            margin: 20px;
        }
body {
 font-family: Arial, sans-serif;
 margin: 0;
 padding: 0;
 }
 .judul-tugas {
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
                            <li class="nav-item">
                            <a href="/map" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Latihan-HandsOn-1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/tugas1" class="nav-link">
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
                            <h1 class="m-0">Latihan-HandsOn-1</h1>
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
                                            <div class="form-container">
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

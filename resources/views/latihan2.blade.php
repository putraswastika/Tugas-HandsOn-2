<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Latihan-HandsOn-2</title>

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
 .form-container{
            margin: 20px;
        }
        form{
            margin-bottom: 20px;
        }
        input, textarea{
            display: block;
            margin: 10px 0;
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
                            <li class="nav-item">
                            <a href="/map" class="nav-link">
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
                            <a href="/latihan2" class="nav-link active">
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
                            <h1 class="m-0">Latihan-HandsOn-2</h1>
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
                                        <h1 class="judul-tugas">Latihan Hands On 2</h1>
    <!-- form untuk menambahkan marker dan poligon -->
<div class="form-container">
<h3>Tambahkan Marker</h3>
<form id="markerForm">
@csrf
<input type="text" id="markerName" placeholder="Nama Lokasi" required />
<input type="text" id="markerLat" placeholder="Latitude" required />
<input type="text" id="markerLng" placeholder="Longitude" required />
<button type="submit">Tambah Marker</button>
</form>

<h3>Tambahkan Poligon</h3>
<form id="polygonForm">
<textarea id="polygonCoords" placeholder="Koordinat Poligon (JSON)" required></textarea>
<button type="submit">Tambah Poligon</button>
</form>
</div>

<script>
    // Event listener untuk form marker
 document.getElementById("markerForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("markerName").value;
    const lat = parseFloat(document.getElementById("markerLat").value);
    const lng = parseFloat(document.getElementById("markerLng").value);

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/api/markers", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Tambahkan CSRF token
        },
        body: JSON.stringify({ name, latitude: lat, longitude: lng }),
    })
    .then((res) => {
        if (!res.ok) {
            throw new Error(`HTTP error! status: ${res.status}`);
        }
        return res.json();
    })
    .then((data) => {
        alert("Marker ditambahkan!");
    })
    .catch((err) => {
        console.error("Error menambahkan marker:", err);
        alert("Gagal menambahkan marker.");
    });
});

// Event listener untuk form poligon
document.getElementById("polygonForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const coords = document.getElementById("polygonCoords").value;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/api/polygons", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Tambahkan CSRF token
        },
        body: JSON.stringify({ coordinates: JSON.parse(coords) }),
    })
    .then((res) => {
        if (!res.ok) {
            throw new Error(`HTTP error! status: ${res.status}`);
        }
        return res.json();
    })
    .then((data) => {
        alert("Poligon ditambahkan!");
    })
    .catch((err) => {
        console.error("Error menambahkan poligon:", err);
        alert("Gagal menambahkan poligon.");
    });
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

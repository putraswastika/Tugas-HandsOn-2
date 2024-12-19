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
    <!-- Google Maps API -->
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyC4lKVb0eLSNyhEO-C_8JoHhAvba6aZc3U"></script>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
            }
        #google-map{
            height: 400px;
            margin: 20px auto;
            max-width: 90%;
        }
        .tabel-map {
            height: auto;
            margin: 20px auto;
            max-width: 95%;
        }
        .judul-peta, .judul-tabel{
            text-align: center;
            padding: 10px;
        }
        .judul-tabel{
            text-align: center;
            padding: 10px;
        }
        .form-container {
            margin: 20px;
        }
        #markerForm, #polygonForm {
            margin-bottom: 20px;
        }
        input, textarea {
            display: block;
            width: 100%;
            margin: 10px 0;
            margin-top: 17px;
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
                            <a href="/profile" class="nav-link">
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
                            <a href="/tugas2" class="nav-link active">
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
                            <h1 class="m-0">>Latihan-HandsOn-2</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            
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
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h2 class="judul-peta">Google Maps</h2>
                                                <!-- google maps -->
                                                <div id="google-map"></div>
                                                
                                                <div class="chart"></div>
                                                <!-- /.chart-responsive -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-md-4">
                                                <!-- form untuk menambahkan marker dan poligon -->
                                                <div class="form-container">
                                                    <h3>Tambahkan Marker</h3>
                                                    <form id="markerForm">
                                                        @csrf
                                                        <input type="text" id="markerName" placeholder="Nama Lokasi" required />
                                                        <input type="text" id="markerLat" placeholder="Latitude" required />
                                                        <input type="text" id="markerLng" placeholder="Longitude" required />
                                                        <button class="btn btn-success" type="submit" id="markerBtn">Tambah Marker</button>
                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                    </form>

                                                    <h3>Tambahkan Poligon</h3>
                                                    <form id="polygonForm">
                                                        <textarea id="polygonCoords" placeholder="Koordinat Poligon (JSON)" required></textarea>
                                                        <button class="btn btn-success" type="submit" id="poligonBtn">Tambah Poligon</button>
                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- tabel -->
                                            <!-- /.progress-group -->
                                        </div>
                                        <div class="row">
    <div class="col-md-12">
        <h2 class="judul-tabel">Tabel Marker</h2>
        <!-- google maps -->
        <div class="tabel-map table-responsive">
            <table class = "table table-bordered">
                <thead class="table-dark">
                    <th class="text-center">ID</th>
                    <th class="text-center">NAMA</th>
                    <th class="text-center">LAT</th>
                    <th class="text-center">LONG</th>
                    <th class="text-center">AKSI</th>
                </thead>
                @foreach($markers as $dmarkers)
                <tbody>   
                <td class="text-center">{{$dmarkers->id}}</td>
                <td class="text-center">{{$dmarkers->name}}</td>
                <td class="text-center">{{$dmarkers->latitude}}</td>
                <td class="text-center">{{$dmarkers->longitude}}</td>
                <td class="text-center"> <button class="btn btn-primary" onClick="viewMarker('{{$dmarkers->latitude}}','{{$dmarkers->longitude}}')" id="btnView">View</button> ---- <button class="btn bg-danger" onClick = "hapusMarker('{{$dmarkers->id}}')"id="btnhapus">Hapus</button> </td>
                </tbody>
                @endforeach
            </table>
        </div>
        <!-- tag untuk enter sekali -->
        <br>
        <br>
        <h2 class="judul-tabel">Tabel Poligon</h2>
        <div class="tabel-map table-responsive">
        <table class="table table-bordered ">
                <thead class="table-dark">
                    <th class="text-center">ID</th>
                    <th class="text-center">KOORDINAT</th>
                    <th class="text-center">AKSI</th>
                </thead>
                @foreach($polygons as $dpolygons)
                <tbody>   
                <td class="text-center">{{$dpolygons->id}}</td>
                <td class="text-center">{{$dpolygons->coordinates}}</td>
                <td class="text-center"> <button class="btn btn-primary" onClick="viewPolygon('{{$dpolygons->coordinates}}')" id="btnView">View</button> ---- <button class="btn bg-danger" onClick = "hapusPoligon('{{$dpolygons->id}}')"id="btnhapus">Hapus</button> </td>
                </tbody>
                @endforeach
            </table>
        </div>


        <!-- /.chart-responsive -->
    </div>
        </div>
    </div>
    <div class="col-md-12"></div>
    <!-- /.progress-group -->
</div>

                                        <!-- /.row -->
                                    </div>
                                    <!-- ./card-body -->
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/. container-fluid -->
                    </div>
                    <!-- /.content -->
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

            <!-- PAGE PLUGINS -->
            <!-- jQuery Mapael -->
            <script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
            <script src="{{asset('AdminLTE-3.2.0/plugins/raphael/raphael.min.js')}}"></script>
            <script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
            <script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
            <!-- ChartJS -->
            <script src="{{asset('AdminLTE-3.2.0/plugins/chart.js/Chart.min.js')}}"></script>

            <!-- AdminLTE for demo purposes -->
            <script src="{{asset('AdminLTE-3.2.0/dist/js/demo.js')}}"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="{{asset('AdminLTE-3.2.0/dist/js/pages/dashboard2.js')}}"></script>
            <script>
    const btnActive = document.getElementsByClassName('nav-link');

    // Loop through all elements with the class 'nav-link'
    for (let i = 0; i < btnActive.length; i++) {
        btnActive[i].addEventListener('click', function() {
            // Remove 'active' class from all buttons
            for (let j = 0; j < btnActive.length; j++) {
                btnActive[j].classList.remove('active');
            }
            // Add 'active' class to the clicked button
            this.classList.add('active');
        });
    }
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
        window.location.reload(true);
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
        window.location.reload(true);
    })
    .catch((err) => {
        console.error("Error menambahkan poligon:", err);
        alert("Gagal menambahkan poligon.");
    });

});
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
//google maps api
const googleMapDiv = document.getElementById('google-map');
const googleMap = new google.maps.Map(googleMapDiv, {
    center: { lat: -8.409518, lng: 115.188919 },
    zoom: 9.10, });

    const markers = @json($markers);
    markers.forEach((marker) => {
        new google.maps.Marker({
            position: { lat: parseFloat(marker.latitude), lng: parseFloat(marker.longitude) },
            map: googleMap,
            title: marker.name,
        });
    });
//memanfaatkan fungsi tombol untuk menampilkan marker  dan zoom
function viewMarker(lat,long){
    googleMap.setCenter({lat:parseFloat(lat),lng:parseFloat(long)});
    googleMap.setZoom(15);
}
//memanfaatkan fungsi tombol untuk menghapus marker
function hapusMarker(id){
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    Swal.fire({
        showCancelButton: true,
        title: 'Hapus Marker',
        text: 'Apakah Tuan ingin menghapus marker?',
        icon: 'warning',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
    })
    .then((result) => {
        if (result.isConfirmed) {
            fetch("/api/markers/"+id, {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
    })
    .then((res) => {
        if (!res.ok) {
            throw new Error(`HTTP error! status: ${res.status}`);
        }
        return res.json();
    })
    .then((data) => {
        alert("Marker dihapus!");
        window.location.reload(true);
    })
    .catch((err) => {
        console.error("Error menghapus marker:", err);
        alert("Gagal menghapus marker.");
    });
        }
    });    
}

//hapus poligon
function hapusPoligon(id){
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    Swal.fire({
        showCancelButton: true,
        title: 'Hapus Poligon',
        text: 'Apakah Tuan ingin menghapus poligon?',
        icon: 'warning',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
    })
    .then((result) => {
        if (result.isConfirmed) {
            fetch("/api/polygons/"+id, {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
    })
    .then((res) => {
        if (!res.ok) {
            throw new Error(`HTTP error! status: ${res.status}`);
        }
        return res.json();
    })
    .then((data) => {
        alert("Poligon dihapus!");
        window.location.reload(true);
    })
    .catch((err) => {
        console.error("Error menghapus poligon:", err);
        alert("Gagal menghapus poligon.");
    });
        }
    });    
}

//view poligon
function viewPolygon(coords){
    const polygon = new google.maps.Polygon({
        paths: JSON.parse(coords),
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35,
    });
    polygon.setMap(googleMap);
    googleMap.setCenter(polygon.getPath().getArray()[0]);
    googleMap.setZoom(15);
}
</script>

</body>
</html>

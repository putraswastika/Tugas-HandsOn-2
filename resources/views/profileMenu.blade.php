<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css')}}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/dist/css/adminlte.min.css')}}" />
    <style>
        .foto-pribadi {
            width: 200px;
            height: 300px;
            margin-top: 20px;
        }
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
            }
        #google-map {
            height: 400px;
            margin: 20px auto;
            max-width: 90%;
        }
        .tabel-map {
            height: auto;
            margin: 20px auto;
            max-width: 95%;
        }
        .judul {
            margin-top: 10px;
            padding: 10px;
        }
        .kerangka {
            margin-top: 10px;
            padding: 10px;
            text-align: justify;
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
                            <a href="/profile" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Profile</p>
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
                            <h1 class="m-0">Profile</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="{{asset('AdminLTE-3.2.0/dist/img/2105541127_I Ketut Putra Swastika.jpg')}}" class="foto-pribadi"/>
                                            </div>
                                            <div class="col-md-10">         
                                                <h3 class="judul">2105541127-I Ketut Putra Swastika</h3> 
                                                <p class="kerangka">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus temporibus quod voluptas enim laudantium, aperiam, sequi cumque error quibusdam earum ut in suscipit totam reprehenderit adipisci debitis odio voluptatem tempore veritatis excepturi corrupti dolore fugiat repellendus at! Quaerat quo laborum nam incidunt architecto aspernatur, eaque aliquam nesciunt voluptate molestiae aliquid commodi. Ipsam reprehenderit doloribus velit accusamus voluptatibus earum esse magni, quo aliquid assumenda? Quisquam dicta quis tenetur praesentium est animi enim eaque consectetur, ut fugit doloribus, amet necessitatibus vel. Fugiat praesentium nisi alias ut. Eligendi beatae facere, rerum possimus, alias ab tempora eveniet quo modi repellendus velit exercitationem non magnam cupiditate magni adipisci error provident nostrum qui. Magnam, natus. Iste officiis voluptatibus consequatur quidem fugit eaque ducimus? Nobis alias maxime, provident harum minima fugit voluptas distinctio ipsam dolor aut eveniet, laborum quo asperiores perferendis itaque dicta nostrum quas soluta ut ducimus. Numquam laudantium nam et omnis nobis deleniti repellendus, labore necessitatibus, exercitationem corrupti dolore quia distinctio veniam enim earum fuga accusamus nulla minus architecto nemo consequatur. Quisquam omnis cupiditate ipsam corporis eius magni eum quam ratione pariatur. Dicta asperiores maxime ab itaque quidem soluta quis deserunt quae at iusto, tempora sed ullam, nam, recusandae nisi adipisci. Officiis odio mollitia sequi.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>
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

    <!-- REQUIRED SCRIPTS -->
    <script src="{{asset('AdminLTE-3.2.0/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/dist/js/adminlte.js')}}"></script>

    <!-- PAGE PLUGINS -->
    <script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/dist/js/demo.js')}}"></script>
    <script src="{{asset('AdminLTE-3.2.0/dist/js/pages/dashboard2.js')}}"></script>
    
    <script>
        const btnActive = document.getElementsByClassName('nav-link');
        for (let i = 0; i < btnActive.length; i++) {
            btnActive[i].addEventListener('click', function() {
                for (let j = 0; j < btnActive.length; j++) {
                    btnActive[j].classList.remove('active');
                }
                this.classList.add('active');
            });
        }
    </script>
</body>
</html>

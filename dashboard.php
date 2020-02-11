<?php
require_once ('config.php'); // For storing username and password.

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AppName | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">App name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-star"></i>
              <p>
                Todas las categorias
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Indicador 1
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Indicador 2
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Indicador 3
              </p>
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
    <!-- Main content -->

    <div class="row" style="margin: 10px 10px 10px 10px">
      <div class="col-md-3" >
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <img data-card-widget="collapse" src="dist/img/prod-1.jpg" class="product-image" alt="Product Image">
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul style="width: 230px; height: 100px; overflow: auto">
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-3" >
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <img data-card-widget="collapse" src="dist/img/prod-1.jpg" class="product-image" alt="Product Image">
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul style="width: 230px; height: 100px; overflow: auto">
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-3" >
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <img data-card-widget="collapse" src="dist/img/prod-1.jpg" class="product-image" alt="Product Image">
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul style="width: 230px; height: 100px; overflow: auto">
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-3" >
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <img data-card-widget="collapse" src="dist/img/prod-1.jpg" class="product-image" alt="Product Image">
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul style="width: 230px; height: 100px; overflow: auto">
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-3" >
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <img data-card-widget="collapse" src="dist/img/prod-1.jpg" class="product-image" alt="Product Image">
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul style="width: 230px; height: 100px; overflow: auto">
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-3" >
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <img data-card-widget="collapse" src="dist/img/prod-1.jpg" class="product-image" alt="Product Image">
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul style="width: 230px; height: 100px; overflow: auto">
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-3" >
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <img data-card-widget="collapse" src="dist/img/prod-1.jpg" class="product-image" alt="Product Image">
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul style="width: 230px; height: 100px; overflow: auto">
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-3" >
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <img data-card-widget="collapse" src="dist/img/prod-1.jpg" class="product-image" alt="Product Image">
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul style="width: 230px; height: 100px; overflow: auto">
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
              <li>Sub indicador</li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

    </div>
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <a  href="Vistas/Login.php">Administrar</a>
    &nbsp;&nbsp;
    <strong> App name</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

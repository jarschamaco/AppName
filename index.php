<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:dashboard.php");
	  exit;
  }else{
    echo '<script language="javascript"> '.$_SESSION['Username'].' </script>'; 
  }
?>

<!-- Show password protected content down here -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AppName| Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">
    .content_crud {
      line-height: 50px;
      text-align: center;
    }
    .letter_crud{
      display: inline-block;
      vertical-align: middle;
      line-height: normal;
      padding-left: 5px; font-size: 20px
    }
    .hover{
      cursor: pointer;
    }
  </style>
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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="btn btn-lg btn-success" href="Vistas/Logout.php" role="button">Log out</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AppName</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="Vistas/Profile.php" class="d-block">User name</a>
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open" onclick="add_indicador()">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Agregar indicador
                <span class="right badge" style="font-size: 20px; padding: 0px" ><i class="right fas fa-plus-square"></i></span>
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 100%">
              <label class=" nav-link" style="width: 85%; color: white" onclick="update_indicador('Indicador 1')"> 
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Indicador 1
                </p>
              </label>
              <label class="btn" style="width: 15%" onclick="delete_indicador('Indicador 1')">
                <i class="right fas fa-times" style="color: red"></i>
              </label>
            </div>
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
    
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3 hover" onclick="add_user()" >
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-user-plus"></i></span>

              <div class="content_crud">
                <span class="letter_crud">Agregar usuario</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3 hover" onclick="delete_user()" >
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-times"></i></span>

              <div class="content_crud">
                 <span class="letter_crud"> Eliminar usuario</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3 hover" onclick="update_user()" >
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-edit"></i></span>

              <div class="content_crud">
                <span class="letter_crud">Actualizar usuario</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3 hover" onclick="add_task()" >
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="content_crud">
                <span class="letter_crud">Asignar tareas</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> App name</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<script type="text/javascript">
  window.location.hash="no-back-button";
  window.location.hash="Again-No-back-button";//esta linea es necesaria para chrome
  window.onhashchange=function(){window.location.hash="no-back-button";}

  function add_user(){
    alert("clic add user");
  }

  function delete_user(){
    alert("clic delete user");
  }

  function update_user(){
    alert("clic update user");
  }

  function add_task(){
    alert("clic add task");
  }

  function add_indicador(){
    alert("clic add indicador");
  }

  function delete_indicador(item){
    alert("Item "+item+ " eliminado");
  }

  function update_indicador(item){
    alert("Actualizar "+item+" de una vez");
  }
</script>
</body>
</html>


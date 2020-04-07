<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:dashboard.php");
	  exit;
  }

  include('DataBase/connect/conexion.php');
  $conexion=conexionBD();

  $query = "SELECT id, name, email, rango, contacto, direccion FROM user_table;";
  $result = pg_query($conexion,$query);
  if (!$result) {
     die("Query faild!");
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
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
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
        <a class="btn btn-lg btn-success" href="Vistas/Logout.php" role="button">Cerrar Sesión</a>
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
          <i class="fas fa-user-circle fa-2x" style="color:#fff; "></i>
        </div>
        <div class="info">
          <a href="Vistas/Profile.php" class="d-block"><?php print_r($_SESSION['name']);?></a>
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open" data-toggle="modal" data-target="#modal-lg">
            <a href="#" class="nav-link bg-info" >
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Agregar usuario
                <span class="right badge" style="font-size: 20px; padding: 0px" ><i class="right fas fa-plus-square"></i></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open" onclick="add_indicador()">
            <a href="#" class="nav-link bg-success">
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

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Usuarios</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table-show-user" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="id_colum">id</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Cargo</th>
                  <th>Contacto</th>
                  <th>Dirección</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php while ($row = pg_fetch_row($result)) { ?>
                    <tr>
                      <td> <?php echo $row[0] ?> </td>
                      <td> <?php echo $row[1] ?> </td>
                      <td> <?php echo $row[2] ?> </td>
                      <td> <?php echo $row[3] ?> </td>
                      <td> <?php echo $row[4] ?> </td>
                      <td> <?php echo $row[5] ?> </td>
                      <td class="text-center">
                      <div class="btn-group btn-group-sm">
                        <span onclick="update_user()" class="btn btn-success"><i class="fas fa-user-edit"></i></span>
                        <span href="#" class="btn btn-danger btn_delete"><i class="fas fa-trash"></i></span>
                        <span href="#" onclick="add_task()" class="btn btn-warning"><i class="fas fa-tasks"></i></span>
                      </div>
                    </td>

                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Cargo</th>
                  <th>Contacto</th>
                  <th>Dirección</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form class="form-horizontal" id="task-add-user" method="POST">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ ]{2,254}" title="Solo texto">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputCorre" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputCorre" name="email" placeholder="Correo" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputCorre" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" placeholder="Contraseña" name="password" id="inputPassword" minlength="4" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputCargo" class="col-sm-2 col-form-label">Cargo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputCargo" name="cargo" placeholder="Cargo" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputContacto" class="col-sm-2 col-form-label">Contacto</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputContacto" name="contact" placeholder="Contacto" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputUbicacion" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputUbicacion" name="ubication" placeholder="Ubicación" required>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar usuarios</button>
                  </div>
                </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>


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
<!-- page script -->
<script>
  $(function () {
    $("#table-show-user").DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
    });
  });
</script>
<script type="text/javascript">
  window.location.hash="no-back-button";
  window.location.hash="Again-No-back-button";//esta linea es necesaria para chrome
  window.onhashchange=function(){window.location.hash="no-back-button";}

  $(document).ready(  function(){
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('#task-add-user').submit(function(e){
      const postData = {
        email: $('#inputCorre').val(),
        name: $('#inputName').val(),
        password: $('#inputPassword').val(),
        cargo: $('#inputCargo').val(),
        contact: $('#inputContacto').val(),
        ubication: $('#inputUbicacion').val()
      };

      $.post('DataBase/crud/insertar.php', postData, function(response){
        console.log(response);
        $( "#table-show-user" ).load( "index.php #table-show-user" );
      });
    })

    $(".btn_delete").on("click", function() {
       const DataId = {
        id:$(this).closest('tr').children()[0].textContent
      };

      $.post('DataBase/crud/delete.php', DataId, function(response){
        console.log(response);
        $( "#table-show-user" ).load( "index.php #table-show-user" );
      });
      
    });
  });

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


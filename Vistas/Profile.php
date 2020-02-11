<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AppName | Perfil de usuario</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
    <a href="Profile.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AppName</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
           <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pantalla principal
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#information" data-toggle="tab">Información</a></li>
                  <li class="nav-item"><a class="nav-link" href="#update" data-toggle="tab">Actualizar información</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="information">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-circle"
                               src="../dist/img/user2-160x160.jpg"
                               alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">User Name</h3>

                        <p class="text-muted text-center">User Profession</p>

                        <div class="card-body">
                          
                          <p>
                            <strong><i class="fas fa-book mr-1"></i> Contacto: </strong> Aqui va la información de contacto
                          </p>

                          <hr>

                          <p> <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación: </strong> Dirección del usuario</p>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="update">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputCorre" class="col-sm-2 col-form-label">Correo</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputCorre" placeholder="Correo">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputCargo" class="col-sm-2 col-form-label">Cargo</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputCargo" placeholder="Cargo">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputContacto" class="col-sm-2 col-form-label">Contacto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputContacto" placeholder="Contacto">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputUbicacion" class="col-sm-2 col-form-label">Ubicación</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputUbicacion" placeholder="Ubicación">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPhoto" class="col-sm-2 col-form-label">Seleccionar foto</label>
                        <div class="col-sm-10">
                          <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" id="inputPhoto">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Actualizar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>App</strong>Name
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

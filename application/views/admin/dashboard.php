<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href=" <?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href=" <?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href=" <?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css');?>">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/sb-admin.css');?>">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#"> <?php echo $title; ?> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                Charts</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Tables</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Components</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="static-nav.html">Static Navigation</a>
              </li>
              <li>
                <a href="#">Custom Card Examples</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-file"></i>
              <span class="nav-link-text">
                Example Pages</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
              <li>
                <a href="login.html">Login Page</a>
              </li>
              <li>
                <a href="register.html">Registration Page</a>
              </li>
              <li>
                <a href="forgot-password.html">Forgot Password Page</a>
              </li>
              <li>
                <a href="blank.html">Blank Page</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-sitemap"></i>
              <span class="nav-link-text">
                Menu Levels</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
              <li>
                <a href="#">Second Level Item</a>
              </li>
              <li>
                <a href="#">Second Level Item</a>
              </li>
              <li>
                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                  <li>
                    <a href="#">Third Level Item</a>
                  </li>
                  <li>
                    <a href="#">Third Level Item</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-link"></i>
              <span class="nav-link-text">
                Link</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              <?php echo  $this->session->userdata('user'); ?></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>

        <!-- Icon Cards -->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-user-circle"></i>
                </div>
                <div class="mr-5">
                  Prestador servicio
                  social
                </div>
              </div>
              <a  class="card-footer text-white clearfix small z-1" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span class="float-left">Agregar</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <form action="<?php echo base_url('admin/form_validation'); ?>" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="name">Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="nombre del prestador">
                  <span class="text-danger"> <?php echo form_error('name'); ?> </span>
                </div>
                <div class="col-md-6">
                  <label for="surnames">Apellidos</label>
                  <input type="text" name="surnames" class="form-control" id="surnames" aria-describedby="surnames" placeholder="apellido paterno y materno">
                  <span class="text-danger"> <?php echo form_error('surnames'); ?> </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="school">Escuela o facultad</label>
              <input type="text" name="school" class="form-control" id="school" aria-describedby="school" placeholder="escuela o facultad del prestador">
              <span class="text-danger"> <?php echo form_error('school'); ?> </span>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="keygen">clave</label>
                  <input type="number" name="keygen" class="form-control" id="keygen" placeholder="clave del prestador">
                  <span class="text-danger"> <?php echo form_error('keygen'); ?> </span>
                </div>

              </div>
            </div>
            <button type="submit" name="button" class="btn btn-primary btn-block">Registrar</button>
          </form>
      </div>
        </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-support"></i>
                </div>
                <div class="mr-5">
                  13 Prestadores!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>



        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Data Table Example
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Escuela</th>
                    <th>Horas</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Escuela</th>
                    <th>Horas</th>
                    <th>Eliminar</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  if ($fetch->num_rows() > 0) {
                    # code...
                    foreach ($fetch->result() as $row) {
                      # code...
                       ?>
                      <tr>
                        <td> <?php echo $row->name; ?> </td>
                        <td><?php echo $row->surnames; ?></td>
                        <td><?php echo $row->school; ?></td>
                        <td>61</td>
                        <td>2011/04/25</td>
                      </tr>
                <?php    }
                  } else {
                    # code...
                    echo "<tr>";
                    echo "<td><h1> no hay ningun prestador </h1></td>";
                    echo "</tr>";
                  }

                   ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; carlos leon 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Seleccione "Cerrar sesión" si está listo para finalizar su sesión actual.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href=" <?php echo base_url('admin/logout'); ?>">Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>




    <!-- Bootstrap core JavaScript -->
    <script src=" <?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?> " charset="utf-8"></script>
    <script src=" <?php echo base_url('assets/vendor/popper/popper.min.js'); ?> " charset="utf-8"></script>
    <script src=" <?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?> " charset="utf-8"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?> " charset="utf-8"></script>
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?> " charset="utf-8"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js'); ?> " charset="utf-8"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?> " charset="utf-8"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js'); ?> " charset="utf-8"></script>

  </body>

</html>
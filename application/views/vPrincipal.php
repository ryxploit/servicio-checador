<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title></title>
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/bootstrap.min.css');?>">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href=" <?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href=" <?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css');?>">
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/principal.css');?>">
  </head>
  <body>

    <nav class="navbar navbar-primary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <strong>CHECADOR</strong>  <i class="fa fa-heart text-danger" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</nav>

<div class="container">
  <div class="card">
    <div class="text-center" id="reloj"></div>
      <div class="text-center" id="saludo"></div>
        <div class="text-center" id="fecha"></div>
        <br>
          <form  action="<?php echo base_url('principal/time'); ?>" method="post">
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-4">
              <select name="provider" class="form-control-lg form-control ">
                <option value="demo" selected>Seleciona tu nombre</option>
                <?php
                if ($fetch->num_rows() > 0) {
                  # code...
                  foreach ($fetch->result() as $row) {
                    # code...
                    ?>
                    <option value="<?php echo $row->idp ?>"><?php echo $row->name;$row->surnames; ?> <?php echo $row->surnames; ?></option>
                  <?php }} ?>
                </select>
              </div>
              <input type="submit" name="btn-checar" value="checar" class="btn btn-danger ">
            </form>
             <br>
              <div class="col-md-4"></div>
              <?php echo $this->session->flashdata('msj'); ?>
          </div>
          <br>
   <!-- tabla de prestadores al dia  -->
          <div class="jumbotron " id="check">
            <div class="container">
              <table class="table table-striped table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Hora de entrada</th>
                    <th scope="col">Hora de salida</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  if ($check->num_rows() > 0) {
                    # code...


                    foreach ($check->result() as $row) {
                      # code...


                       ?>
                      <tr>
                        <td> <?php echo $row->idp; ?> </td>
                        <td> <?php echo $row->name; ?> </td>
                        <td> <?php echo $row->time_start; ?> </td>
                        <td> <?php echo $row->time_end; ?> </td>
                      </tr>
                <?php    }
                  } else {
                    # code...
                    echo "<tr>";
                    echo "<td><h3> no hay ningun prestador el dia de hoy </h3></td>";
                    echo "</tr>";
                  }

                   ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>


    <script src="<?php echo base_url('assets/js/jquery.min.js');?>" charset="utf-8"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" charset="utf-8"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js'); ?> " charset="utf-8"></script>
    <script src="<?php echo base_url('assets/js/principal.js');?>" charset="utf-8"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#dataTable').DataTable();
      } );
    </script>

  </body>
</html>

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

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/sb-admin.css');?>">

  </head>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-login mx-auto mt-5">
        <div class="card-header">
          <?php echo $head; ?>
        </div>
        <div class="card-body">
          <form action=" <?php echo base_url('login/check');?>" method="post" id="form-login">
            <div class="form-group">
              <label for="user">Usuario:</label>
              <input type="text" name="user" class="form-control" id="user" aria-describedby="user" placeholder="usuario">
              <span class="text-danger"> <?php echo form_error('user'); ?> </span>
            </div>
            <div class="form-group">
              <label for="password">Contraseña:</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="contraseña">
              <span class="text-danger"> <?php echo form_error('password'); ?> </span>
            </div>

            <button type="submit" name="button" class="btn btn-primary btn-block">Login</button>
            <?php
            $this->session->flashdata('error');
               ?>
          </form>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src=" <?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?> " charset="utf-8"></script>
    <script src=" <?php echo base_url('assets/vendor/popper/popper.min.js'); ?> " charset="utf-8"></script>
    <script src=" <?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?> " charset="utf-8"></script>


  </body>

</html>

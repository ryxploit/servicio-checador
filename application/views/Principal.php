<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/principal.css');?>">
  </head>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
          <strong>CHECADOR</strong>
      </a>
    </div>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
    <div class="text-center" id="reloj">
      <div class="" id="saludo">
        <div class="" id="fecha">

        </div>

      </div>

    </div>
    <form>
        <div class="form-group">
          <label for="email">clave</label>
          <input type="number" name="clave" class="form-control" id="clave" placeholder="Enter clave">
        </div>
        <input type="submit" name="btn-checar" value="checar">
    </form>

  </div>
</div>






    <script src="<?php echo base_url('assets/js/jquery.min.js');?>" charset="utf-8"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" charset="utf-8"></script>
    <script src="<?php echo base_url('assets/js/principal.js');?>" charset="utf-8"></script>
  </body>
</html>

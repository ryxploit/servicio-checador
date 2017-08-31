<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1> <?php echo  $this->session->userdata('user'); ?> </h1>

  <?php
  echo now('America/Mazatlan');
  $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
$time = time();
echo mdate($datestring, $time);

   ?>

  </body>
</html>

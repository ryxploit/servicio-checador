<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
  date_default_timezone_set('America/Mazatlan');


   ?>
   <?=date('m/d/y g:ia');?>

   <select class="custom-select">
   <option selected>Open this select menu</option>
   <?php
   if ($fetch->num_rows() > 0) {
     # code...
     foreach ($fetch->result() as $row) {
       # code...
       ?>
       <option value="<?php echo $row->id ?>"><?php echo $row->name; ?></option>
     <?php }} ?>
     </select>



     <?php
     date_default_timezone_set('America/Mazatlan');

 //echo date("Y-m-d H:i:s");

$strStart = $query;
$strEnd   = '2017-09-06 17:20';

$dteStart = new DateTime($strStart);
$dteEnd   = new DateTime($strEnd);

$dteDiff  = $dteStart->diff($dteEnd);

print $dteDiff->format("%H:%I:%S");



if ($query->num_rows() == 1) {
  # code...
$row =  $query->row();
  $time = $row->time;

  echo  $time;
}

      ?>

  </body>
</html>

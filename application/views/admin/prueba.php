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

<input type="datetime-local" name="" value="">

     <?php
     date_default_timezone_set('America/Mazatlan');

 //echo date('m/d/y g:ia');

$strStart = '2013-06-19 18:00';
$strEnd   = '2013-06-19 21:00';

$dteStart = new DateTime($strStart);
$dteEnd   = new DateTime($strEnd);

$dteDiff  = $dteStart->diff($dteEnd);

print $dteDiff->format("%H:%I:%S");



      ?>

  </body>
</html>

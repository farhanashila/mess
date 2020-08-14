<!DOCTYPE html>
<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation </title>
</head>
<body>
<?php
include 'header.php';

?>

<form action="workersinfo.php" method="post">
<body style="background-color:b1c0d8;text-align:center;" </body> 
   <h1 style="font-size:160%;text-align:center;">Ideal Mess Uttara </h1>
  <h2 style="color:green;"> Worker's Info </h2> 
   <br>
Serial Number: <br>
  <input type="text" name="serial_no" value="">
  <br>
  Worker's Id <br>
<input type="text" name="worker_id" value="">
  <br>
Worker's Name:<br>
<input type="text" name="worker_name" value="">
  <br>
Phone No:<br>
<input type="text" name="phn_no" value="">
  <br>
Worker's Address: <br>
<input type="text" name="worker_add" value="">
  <br>
 Worker's Type: <br>
<input type="text" name="worker_type" value="">
  <br>

  
  <br><br>
  <input type="submit" value="Save">
  <br><br>
Your Information Have Been Saved
 <br><br><br>
 <?php
  include 'footer.php';
  ?>
</form>
</body>
</html>
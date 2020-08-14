<!DOCTYPE html>
<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation </title>
</head>
<body>

<?php
include 'header.php';




?>

<form action="mealinfo.php" method="post">
<body style="background-color:b1c0d8;text-align:center;" </body> 
   <h1 style="font-size:160%;text-align:center;">Ideal Mess Uttara </h1>
  <h2 style="color:green;"> Meal Info </h2> 
   <br>

Serial Number: <br>
  <input type="text" name="serial_no" value="">
  <br>
  Total Meal : <br>
<input type="text" name="t_meal" value="">
  <br>
 Meal Rate:<br>
<input type="text" name="m_rate" value="">
  <br>
  <br><br>
  <input type="submit" value="Save">
  <br><br>
Your Information Have Been Saved <br><br><br><br>
 <?php
  include 'footer.php';
  ?>
  
</form>
 
</body>
</html>
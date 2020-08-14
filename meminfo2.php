<!DOCTYPE html>
<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation </title>
</head>
<body>
<?php
include 'header.php';

?>

<form action="memberinfo.php" method="post">
<body style="background-color:b1c0d8;text-align:center;" </body> 
   <h1 style="font-size:160%;text-align:center;">Ideal Mess Uttara </h1>
  <h2 style="color:green;"> Member's Info </h2> 
   <br>


  Serial Number: <br>
  <input type="text" name="serial_no" value="">
  <br>
 
 Member's Name: <br>
  <input type="text" name="mem_name" value="">
  <br>
  Occupation: <br>
  <input type="text" name="mem_occu" value="">
  <br>
Permanent Address: <br>
 <input type="text" name="per_add" value="">
  <br>
Phone Number: <br>
 <input type="text" name="phn_num" value="">
  <br>
 Email: <br>
 <input type="text" name="email" value="">
  <br>
  
  

  
  <br><br>
  <input type="submit" value="Submit">
<br> <br>
"Your Information Have Been Saved "
<br><br><br><br><br><br><br><br><br><br>
 <?php
  include 'footer.php';
  ?>
</form>
</body>
</html>
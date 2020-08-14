<?php
$link = mysqli_connect("localhost","root","","mess_management") or die("error");
$meal=$_POST['meal'];
$rate=$_POST['rate'];

$r = mysqli_query($link,"UPDATE tb_meal SET rate='$rate' where meal='$meal'");
if($r){
	header("refresh:1;url=meal_view.php");
}else{
	echo "<h3 style='color:red;padding:50px 0px;text-align:center;'>An Error Occured!!!!</h3>";	
}
include 'footer.php';

?>
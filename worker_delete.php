<?php
$link = mysqli_connect("localhost","root","","mess_management") or die("error");
$id=$_GET['id'];

$r = mysqli_query($link,"Delete from tb_workers where id='$id'");
if($r){
	header("location:worker_view.php?ds=ok");
}else{
	echo "<h3 style='color:red;padding:50px 0px;text-align:center;'>An Error Occured!!!!</h3>";	
}
include 'footer.php';

?>
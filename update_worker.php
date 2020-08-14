<?php
$link = mysqli_connect("localhost","root","","mess_management") or die("error");
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$type=$_POST['type'];

$r = mysqli_query($link,"UPDATE tb_workers SET name='$name',phone='$phone',address='$address',type='$type' where id='$id'");
if($r){
	header("refresh:1;url=worker_view.php");
}else{
	echo "<h3 style='color:red;padding:50px 0px;text-align:center;'>An Error Occured!!!!</h3>";	
}
include 'footer.php';

?>
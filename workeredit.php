
<?php
include 'header.php';
?>
<style type="text/css" media="screen">
.myMainContent{
    padding:20px 5px;
}

</style>
<div class="myMainContent">
<center>
    <h3>Edit Worker's's Information</h3><hr ><br />
    
<form action="update_worker.php" method="post">
 <?php
 $id = $_GET['id'];
 $r = mysqli_query($link,"SELECT * FROM tb_workers WHERE id='$id' LIMIT 0,1");
        while($data=mysqli_fetch_assoc($r)){
        ?>

 <p><br> Worker's Id :<br>
 &emsp; <input type="text" value="<?php echo $data['id'];?>" readonly name="id" required><br><br>

 Worker's Name :<br>
 &emsp; <input type="text" value="<?php echo $data['name'];?>" name="name" ><br><br>

Phone No:<br>
 &emsp; <input type="text" value="<?php echo $data['phone'];?>" name="phone" ><br><br>

 Worker's Address :<br>
 &emsp; <input type="text" value="<?php echo $data['address'];?>" name="address" ><br><br>
 
 Worker's Type :<br>
 &emsp; <input type="text" value="<?php echo $data['type'];?>" name="type" ><br><br>

<input type="submit" value="Update" /> <button><a href="worker_view.php" style="text-decoration:none;color:black;"> Cancel</a></button><br><br><br></p>
<?php } ?>
</form> 
   
</center>

</div>

<?php
include 'footer.php';
?>
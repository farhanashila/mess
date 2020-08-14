
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
    <h3>Edit House Information</h3><hr ><br />
    
<form action="update_house.php" method="post">
 <?php
 $house_no = $_GET['house_no'];
 $r = mysqli_query($link,"SELECT * FROM tb_house WHERE house_no='$house_no' LIMIT 0,1");
        while($data=mysqli_fetch_assoc($r)){
        ?>

 <p><br> House Name:<br>
 &emsp; <input type="text" value="<?php echo $data['hname'];?>" readonly name="hname" required><br><br>

House Number:<br>
 &emsp; <input type="text" value="<?php echo $data['house_no'];?>" name="house_no" ><br><br>

address:<br>
 &emsp; <input type="text" value="<?php echo $data['address'];?>" name="address" ><br><br>

 Contact NO :<br>
 &emsp; <input type="text" value="<?php echo $data['contact'];?>" name="contact" ><br><br>


<input type="submit" value="Update" /> <button><a href="house_view.php" style="text-decoration:none;color:black;"> Cancel</a></button><br><br><br></p>
<?php } ?>
</form> 
   
</center>

</div>

<?php
include 'footer.php';
?>
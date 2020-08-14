
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
    <h3>Edit Member's Information</h3><hr ><br />
    
<form action="update_mem.php" method="post">
 <?php
 $serial_no = $_GET['serial_no'];
 $r = mysqli_query($link,"SELECT * FROM tb_members WHERE serial_no='$serial_no' LIMIT 0,1");
        while($data=mysqli_fetch_assoc($r)){
        ?>

 <p><br> Member's Id :<br>
 &emsp; <input type="text" value="<?php echo $data['serial_no'];?>" readonly name="serial_no" required><br><br>

 Member's Name :<br>
 &emsp; <input type="text" value="<?php echo $data['name'];?>" name="name" ><br><br>

Occupation:<br>
 &emsp; <input type="text" value="<?php echo $data['occup'];?>" name="occup" ><br><br>

 Per. Address :<br>
 &emsp; <input type="text" value="<?php echo $data['per_addr'];?>" name="per_addr" ><br><br>
 
 Phone Number :<br>
 &emsp; <input type="text" value="<?php echo $data['phone_num'];?>" name="phone_num" ><br><br>
 
 Email :<br>
 &emsp; <input type="text" value="<?php echo $data['email'];?>" name="email" ><br><br>

<input type="submit" value="Update" /> <button><a href="mem_view.php" style="text-decoration:none;color:black;"> Cancel</a></button><br><br><br></p>
<?php } ?>
</form> 
   
</center>

</div>

<?php
include 'footer.php';
?>

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
    <h3>Edit Meal Information</h3><hr ><br />
    
<form action="update_meal.php" method="post">
 <?php
 $meal = $_GET['meal'];
 $r = mysqli_query($link,"SELECT * FROM tb_meal WHERE meal='$meal' LIMIT 0,1");
        while($data=mysqli_fetch_assoc($r)){
        ?>

 <p><br> No. Of Meal's :<br>
 &emsp; <input type="text" value="<?php echo $data['meal'];?>" readonly name="meal" required><br><br>

 Meal Rate :<br>
 &emsp; <input type="text" value="<?php echo $data['rate'];?>" name="rate" ><br><br>


<input type="submit" value="Update" /> <button><a href="meal_view.php" style="text-decoration:none;color:black;"> Cancel</a></button><br><br><br></p>
<?php } ?>
</form> 
   
</center>

</div>

<?php
include 'footer.php';
?>
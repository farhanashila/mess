<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 22px 113.4px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #F7BE81;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: red}

.dropdown:hover .dropdown-content {
    display: block;
}
table, th, td {
    border: 1px solid black;
}
.Ashraf{
	border:10px solid black;
	height:400px;
	width:1000px;
	align:center;
}
article {
    margin-left: 0px;
    border-left: 1px solid gray;
    padding: 0em;
    overflow: hidden;
}
</style>
</head>
<body style="background-color:#78ff87;">
<?php
include 'header.php';
include 'connection.php';
?>



<form method="post" action="">
<table align=center>
       <tr>
           <td>Search By Member ID :</td>
           <td><input type="number" name="id" value=""></td>
       </tr>
	    <td></td>
           <td><input type="submit" name="submit" value="Search" value=""></td>
       </tr>
    </table>
	</form>	

	
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mess_management";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully\n";
	 if(isset($_POST['submit'])){
	 $bid = $_POST['id'];

		$sql = "SELECT tb_memebers.id,tb_memebers.name,tb_memebers.occup,tb_memebers.per_addr,tb_memebers.phone_num,tb_house.house_no,tb_meal.meal,tb_meal.rate
	from tb_members inner join tb_house on tb_members.arg=tb_house.arg inner join tb_meal on tb_house.arg=tb_meal.arg where tb_members.ID= '$bid'  ";
		

		$result = $conn->query($sql);
		
		if ($result->num_row > 0) {
		

		$row = $result->fetch_assoc() ?>
		
		     <?php  while ($row = $result->fetch_assoc())
				 
				 {
					 ?>
				
						<div id="printableArea">
						<center><div class="Ashraf" >
						<?php
						echo"<table align=center><tr><th>Member ID</th><th>Member Name</th><th>Occupation</th><th>Parmanent Address</th><th>Phone Number</th></th><th>House No.</th><th>Total Meal</th><th>Meal Rate</th></tr>";
						?>
						<center><h2>Member Report</h2></center>
													
					
												<td><?php echo $row['id'];?></td>
												
												
												<td> <?php echo $row['name'];?> </td>
												
											
												<td>  <?php echo $row['occup'];?> </td>
												
												
												<td> <?php echo $row['per_addr'];?></td>
												
											
												<td> <?php echo $row['phone_num'];?></td>
												
												
												<td> <?php echo $row['house_no'];?></td>
												
												
												<td> <?php echo $row['meal'];?></td>
												
												<td> <?php echo $row['rate'];?></td>
											
	    										</div></center>
										</div>
          </br><center><button onclick="printDiv('printableArea')"><b>Print</b></button></center>
				 </br>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
				
		<?php }}}?>	

							
													
													
													
											
											
									</div>
											
									
									
									
						
					
			
			
			
			


</body>
</html>
<?php
include 'footer.php';
?>
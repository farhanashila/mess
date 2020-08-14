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
	width:1150px;
	align:center;
}
article {
    margin-left: 0px;
    border-left: 1px solid gray;
    padding: 0em;
    overflow: hidden;
}
.sig{
	margin-right:80px;
	float:right;
}
</style>
</head>


<?php
            include 'header.php';

        ?>

<center>

<form method="post" action="report3.php">
<table align=center>
       <tr>
           <td>Search by member ID :</td>
           <td><input type="text" name="id" value=""></td></center>
       </tr>
	    <td></td>
           <td><input type="submit" name="submit" value="Search" value=""></td>
		   </center>
		   <body style="text-align:center;background-color:#AAB7B8;">
          </body>
       </tr>
    </table>
	</form>	
	</center>

	
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
	
		$sql = "SELECT tb_members.serial_no,tb_members.name,tb_members.phone_num,tb_house.hname,tb_house.house_no,tb_meal.meal,tb_meal.rate
	from tb_members inner join tb_house on tb_members.serial_no=tb_house.serial_no inner join tb_meal on tb_members.serial_no=tb_meal.serial_no   ";
		
		$result = $conn->query($sql);
		
		// var_dump(mysqli_num_rows($result));
		if (mysqli_num_rows($result) > 0)  {
		
		//$row = $result->fetch_assoc() ?>
		
		     				
						<div id="printableArea">
						<center><div class="Ashraf" >
						<body style="text-align:center;background-color:#AAB7B8;">
                        </body>
						<?php
						echo"<table align=center><tr><th>Members Id</th><th>Members Name</th><th>Members Contact</th><th>House Name</th><th>House No</th></th><th>Total Meal</th><th>Meal Rate</th><th>Total Amount</th></tr>";
						?>
						<center><h1>Mess Management System </h1>
									<h3></h3>
									Sector #4,Uttara,Dhaka<br>
									Contact NO:01511122200 
									</center>
													
					<?php  while ($row = $result->fetch_assoc())
				 
				 {
					 ?>

												<td><?php echo $row['serial_no'];?></td>
												
												
												<td> <?php echo $row['name'];?> </td>
												
											
												<td>  <?php echo $row['phone_num'];?> </td>
												
												
												<td> <?php echo $row['hname'];?></td>
												
											
												<td> <?php echo $row['house_no'];?></td>
												
												
												<td> <?php echo $row['meal'];?></td>
												
												
												<td> <?php echo $row['rate'];?></td>
												<td> <?php echo $total= $row['rate'] * $row['meal']; ;?></td></tr>

																								
												
												
												
										</div></center>
										<?php }?>
										
										
					
					<table>
									</td></tr></table>
									<div class="sig">
									<br>
								........................<br>
									Signature
									</div>
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
       <?php }?>
							
													
													
													
											
											
									</div>
											
									
									
									
						
					
			
			
			
			
<footer>Created By :Farhana Kabir<br>ID#16203074</footer>

</body>
</html>
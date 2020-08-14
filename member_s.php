<html lang="en">
<head>

<style>
table{margin-left: 250px;width:70%;height:100px;}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>
		<?php
            include 'header.php';
            
        ?>
<div class="flex-container">
<div id="header">
</div>


<form method="POST" style="text-align:center">
<br><br>
<h3>Member's Information </h3><br>
Search By Member ID:<br>
 <input name="search_id" value="" type="number"><br>
<br>



<br>
<input type="submit" class="button" value="Search"><br><br>
</form>
<article class="article">
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mess_management";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT serial_no,name,occup,per_addr,phone_num,email FROM tb_members where serial_no='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
	echo "<tr><th> Member's Id </th><th>Member's Name</th><th> Occupation </th><th> Per. Address </th><th> Phone Numbe </th><th> Email </th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>". $row["serial_no"]. "</td><td>" . $row["name"]."</td><td>" . $row["occup"]."</td><td>" . $row["per_addr"]."</td><td>" . $row["phone_num"]."</td><td>" . $row["email"]."</td>"; 
	echo "</tr>";
    }
echo "</table>";
} else {
    echo " <center> No results Found </center>";
}

mysqli_close($conn);
?> 
</div>
<br><br><br><br><br><br><br><br><br>
</article>

<?php
            include 'footer.php';
           
        ?>

</body>
</html>

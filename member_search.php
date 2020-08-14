<html lang="en">
<head>

<style>
table{margin-left: 350px;}
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
            include 'connection.php';
        ?>
<div class="flex-container">
<div id="header">
</div>



<body style="text-align:center;"></body>
<form action="member_s.php" method="post">
<h3>Member Information </h3><br>
Search By Member Id:<br>
 <input name="search_id" value="" type="number"><br>
<br>



<br>
<input type="submit" class="button" value="Search"><br><br>
</form>
<article class="article">
  
</div>
<br><br><br><br><br><br><br><br><br><br><br>
</article>

<?php
            include 'footer.php';
           
        ?>

</body>
</html>

<?php
$link = mysqli_connect("localhost","root","","mess_management") or die("error");
?>
<html>

    <head>
        <style>
        h2{ 
text-align: center;}
.navbar {
    overflow: hidden;
    background-color: #E6E6E6;
    font-family: arial;
	

}

.navbar a {
    float: left;
    font-size: 20px;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
	display: block;
    
}
 ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #ff8000;
                text-align: center;

            }

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 20px;    
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: white;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown .dropdwn {
    font-size: 20px;    
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
}

.tarek{
<body style="text-align:center;" </body>
}
        </style>
		<style>
    *{
        margin: 0;
        padding: 0;
    }
    p{
        text-align: center;
    }
    .f_text{
        overflow: hidden;
        width: 100%;
        height: 60px;
        background-color: #B8B8D4;

        padding: 14px 16px;;
    }
    .footer{
        margin-top: px;
    }
    table tr td{
      text-align:center;
    }
</style>
 <style type="text/css">
    .a_hide{
      display: none !important;
    }
    
    @media print
      {     
          .no-print, .no-print *
          {
              display: none !important;
          }
          .tblh td{
              border-top:none;
          }
          .print_en{
            text-align: center;
            display: block !important;
          }


    </style>
<script language="javascript">
    function printdiv(printpage)
    {
    var headstr = "<html><head><title>Report</title></head><body>";
    var footstr = "</body>";
    var newstr = document.all.item(printpage).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return ;
    }
  </script>
    </head>
    <body>

       <div class="navbar">

            
               <br> <h2 style="font-family:italic; font-weight: bold;font-weight: 900;">Mess Management System</h2>


<ul>
			   
                
  <a href="home.php">Home</a>
 
  <div class="dropdown">
    <button class="dropbtn">Insert
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="member.php">Member's info</a>
      <a href="workers.php">Worker's info</a>
      <a href="meal.php">Meal info</a>
      <a href="house.php">House info</a>
    </div>
  </div> 
<div class="dropdown">
    <button class="dropbtn">View
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="mem_view.php">Member's info</a>
      <a href="worker_view.php">Worker's info</a>
      <a href="meal_view.php">Meal info</a>
      <a href="house_view.php">House info</a>
    </div>
    </div>
<div class="dropdown">
    <button class="dropdwn">Search
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="member_search.php">Member's info</a>
      <a href="worker_s.php">Worker's info</a>
      <a href="meal_search.php">Meal info</a>
      <a href="house_search.php">House info</a>
    </div>
  </div>
 <a href="report2.php">Report</a>
 </ul>

</div>



    </body>
</html>
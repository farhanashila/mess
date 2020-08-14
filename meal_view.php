<?php
include 'header.php';
include 'connection.php';
?>
<style type="text/css" media="screen">
.myMainContent{
    padding:20px 5px;
}

</style>
<script language="javascript">
    function printrow(printpage)
    {
    var headstr = "<html><head><title>Report</title></head><body>";
    var footstr = "<br /><br /><center><p>Copyright &copy; Farhana shila</p></center> </body>";
	var newstr = "<center><h3>Single Report </h3></center><br /><br /> <table border='1px' width='80%'> <tr>            <th> NO Of Meal</th><th>Meal Rate</th></tr>";
     newstr += document.all.item(printpage).innerHTML;
	 newstr += "</table>";
     var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return ;
    }
  </script>
<div class="myMainContent"  id="div_print">
<center>
    <h3>Meal Information</h3><hr ><br />
    <table border="1px" width="70%">
        <tr>
            <th>NO Of Meal</th>
            <th>Meal Rate</th>
          
            <th class="no-print">Action</th>
        </tr>
        <?php
		
       
        $r = mysqli_query($link,"select * from tb_meal");
        while($data=mysqli_fetch_assoc($r)){
        ?>
        <tr id="<?php echo "row".$data['meal'];?>">
            
            <td><?php echo $data['meal'];?></td>
            <td><?php echo $data['rate'];?></td>
            <td  class="no-print">
				<a  style="color:green;" href="#" onClick="printrow('<?php echo "row".$data['meal'];?>');">Print</a>
                <a href="mealedit.php?meal=<?php echo $data['meal'];?>">Edit</a>
                <a style="color:red;" href="meal_delete.php?id=<?php echo $data['meal'];?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br >
    <br >
    <center><a href="#"  class="no-print" onClick="printdiv('div_print');" ><button>Print All Information</button></a></center>
    <?php
    if(isset($_GET['us'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>Meal Information Successfully Updated!</h3></center>";
    }

    if(isset($_GET['ds'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>Meal Information Successfully Deleted!</h3></center>";
    }
    ?>
</center>
<div class="a_hide print_en">Copyright &copy; Farhana Kabir </div>
</div>

<?php
include 'footer.php';
?>
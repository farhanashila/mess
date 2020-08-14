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
    var footstr = "<br /><br /><center><p>Copyright &copy; Farhana Shila</p></center> </body>";
	var newstr = "<center><h3>Single Report </h3></center><br /><br /> <table border='1px' width='80%'> <tr>            <th> House Name</th><th>House Number</th><th>address</th><th> Contact NO </th></tr>";
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
    <h3>House Information</h3><hr ><br />
    <table border="1px" width="70%">
        <tr>
		<th>House No</th>
            <th>House Name</th>
            <th>House Number</th>
            <th>address</th>
            <th>Contact NO</th>
           
            <th class="no-print">Action</th>
        </tr>
        <?php
		
       
        $r = mysqli_query($link,"select * from tb_house");
        while($data=mysqli_fetch_assoc($r)){
        ?>
        <tr id="<?php echo "row".$data['house_no'];?>">
            <td><?php echo $data['house_no'];?></td>
            <td><?php echo $data['hname'];?></td>
            <td><?php echo $data['house_no'];?></td>
            <td><?php echo $data['address'];?></td>
            <td><?php echo $data['contact'];?></td>
            <td  class="no-print">
				<a  style="color:green;" href="#" onClick="printrow('<?php echo "row".$data['house_no'];?>');">Print</a>
                <a href="houseedit.php?house_no=<?php echo $data['house_no'];?>">Edit</a>
                <a style="color:red;" href="house_delete.php?id=<?php echo $data['house_no'];?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br >
    <br >
    <center><a href="#"  class="no-print" onClick="printdiv('div_print');" ><button>Print All Information</button></a></center>
    <?php
    if(isset($_GET['us'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>House Information Successfully Updated!</h3></center>";
    }

    if(isset($_GET['ds'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>House Information Successfully Deleted!</h3></center>";
    }
    ?>
</center>
<div class="a_hide print_en">Copyright &copy; Farhana Kabir </div>
</div>

<?php
include 'footer.php';
?>
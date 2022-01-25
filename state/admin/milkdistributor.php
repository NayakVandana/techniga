<?php
include("config.php");
include ("sidebar.php");
include ("header.php");
include("info.php");

 ?>


<div id="page-wrapper">
	<div class="main-page">


 <div class="bs-example widget-shadow" data-example-id="bordered-table"  style="margin-left: -45%;"> 
			<h4>Manage Milk Distributor:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>F Name</th>
			 	 <th>M Name</th>
			 	  <th>L Name</th>
			 	   <th>B D</th>
			 	   <th>M No</th>
			 	   <th>Email</th>
			 	   <th>Pass</th>
			 	 
			 	   <th>City</th>
			 	   <th>Add</th>
			 	   <th>Del</th>
			 	   
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	$sql="select * from tbl_milkdistributor where status=0";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td><?php echo $row['first_name'];?></td>
 	<td><?php echo $row['middle_name'];?></td>
 	<td><?php echo $row['last_name'];?></td>
 	<td><?php echo $row['birth_date'];?></td>
 	<td><?php echo $row['mobile_number'];?></td>
 	<td><?php echo $row['email_id'];?></td>
 	<td><?php echo $row['password'];?></td>
 	
 	<td><?php echo $row['city'];?></td>
 	<td><?php echo $row['address'];?></td>
	
     <td> <a href="milkdistributor.php?user_id=<?php echo $row['user_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     

	</tr>
<?php
}

?>
  </table>
		</div>
	</div>

<?php
if(isset($_GET['user_id']))
{

$user_id=$_GET['user_id'];
$sql="update tbl_milkdistributor set status=1 where user_id='$user_id'";



$result=mysqli_query($con,$sql);
	if ($result) 
	{
	 echo "record deleted";	
	}
}

  ?>

</div></div></div></div></div></div>

<?php
include ("footer.php");
?>
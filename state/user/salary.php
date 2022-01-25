 <?php
 include("config.php");

include ("header.php");
?>
 <div class="bs-example widget-shadow" data-example-id="bordered-table"> 
			<h4>Employee Salary List:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Emp Name</th>
			 	 <th>Salary</th>
			 	  <th>Designation</th>
			 	    
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	$sql="select * from tbl_salary where status=0";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['emp_name']; ?></td>
		<td> <?php echo $row['salary']; ?></td>
		<td> <?php echo $row['designation']; ?></td>
		


	</tr>
<?php
}

?>
  </table>
		</div>







<?php
include ("footer.php");
?>
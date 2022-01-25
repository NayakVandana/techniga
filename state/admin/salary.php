 <?php
 include("config.php");
include ("sidebar.php");
include ("header.php");
include("info.php");
if (isset($_POST['Submit'])) 
{
	
	$emp_name=$_POST['emp_name'];
	$salary=$_POST['salary'];
	$designation=$_POST['designation'];

$sql="insert into tbl_salary(emp_name,salary,designation)values('$emp_name','$salary','$designation')";
	$result=mysqli_query($con,$sql);
	if ($result) 
	{
	 echo "record inserted";	
	}
}

  ?>
<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		
						</div></div></div></div>

		<!--footer-->
		
        <!--//footer-->
	</div>
	<!-- Classie -->
		
</body>
</html>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Salary Forms</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms" > 
						<div class="form-title">
							<h4>Salary Form :</h4>
						</div>
						<div class="form-body">
							<form method="POST" enctype="multipart/form-data"> 

								<div class="form-group"> <label for="exampleInputEmail1">EMP Name</label> <input type="text" name="emp_name" class="form-control" id="exampleInputEmail1" placeholder="EMP Name"> </div> 

								<div class="form-group"> <label for="exampleInputPassword1">Salary</label> <input type="text" name="salary"  name="salary" class="form-control" id="exampleInputPassword1" placeholder="Salary"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Designation</label> <input type="text" name="designation" class="form-control" id="exampleInputPassword1" placeholder="Designation"> </div>

							  <button type="submit" name="Submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>

 <div class="bs-example widget-shadow" data-example-id="bordered-table" > 
			<h4>Manage Salary:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Emp Name</th>
			 	 <th>Salary</th>
			 	  <th>Designation</th>
			 	    <th>delete</th>
			 	       	 <th>edit</th>
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
		<td> <a href="salary.php?salary_id=<?php echo $row['salary_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     <td> <a href="editsalary.php?salary_id=<?php echo $row['salary_id'];?>">
     	<img src="images/e.png">
     </a></td>


	</tr>
<?php
}

?>
  </table>
		</div>


<?php
if(isset($_GET['salary_id']))
{

$salary_id=$_GET['salary_id'];
$sql="update tbl_salary set status=1 where salary_id='$salary_id'";



$result=mysqli_query($con,$sql);
	if ($result) 
	{
	 echo "record deleted";	
	}
}

  ?>




<?php
include ("footer.php");
?>
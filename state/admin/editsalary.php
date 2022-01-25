<?php
 include("config.php");
include ("sidebar.php");
include ("header.php");
?>

<?php
if(isset($_GET['salary_id']))
{

$salary_id=$_GET['salary_id'];
$sql="select * from tbl_salary where status=0 and salary_id='$salary_id'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	$emp_name=$row['emp_name'];
	$salary=$row['salary'];
	$designation=$row['designation'];



	}


}
?>






<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Forms</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms" > 
						<div class="form-title">
							<h4>Basic Form :</h4>
						</div>
						<div class="form-body">
							<form method="POST" enctype="multipart/form-data"> 

								<div class="form-group"> <label for="exampleInputEmail1">EMP Name</label> <input type="text" name="emp_name" class="form-control" id="exampleInputEmail1"  value="<?php echo $emp_name;?>"> </div> 

								<div class="form-group"> <label for="exampleInputPassword1">Salary</label> <input type="text" name="salary"  name="salary" class="form-control" id="exampleInputPassword1" value="<?php echo $salary;?>"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Designation</label> <input type="text" name="designation" class="form-control" id="exampleInputPassword1"value="<?php echo $designation;?>">  </div>

							  <button type="submit" name="Submit" class="btn btn-default">Edit</button> </form> 
						</div>
					</div>





<?php
 include("config.php");

if (isset($_POST['Submit'])) 
{
	
	$emp_name=$_POST['emp_name'];
	$salary=$_POST['salary'];
	$designation=$_POST['designation'];

$sql="update tbl_salary set emp_name='$emp_name',salary='$salary',designation='$designation' where status=0 and salary_id='$salary_id'"; 
	$result=mysqli_query($con,$sql);
	if ($result) 
	{
	 echo "<script>alert('record updated successfully');</script>";
	 echo "<script>window.location.href='salary.php';</script>";	
	}
}

  ?>

<?php
 include("footer.php");

?>
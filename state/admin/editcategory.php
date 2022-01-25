<?php
 include("config.php");
include ("sidebar.php");
include ("header.php");
?>

<?php 
if (isset($_GET['cat_id'])) {

	$cat_id=$_GET['cat_id'];
	$sql="select * from tbl_category where status=0 and cat_id='$cat_id'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) {

	
	$cat_name=$row['cat_name'];
		
		}



}

 ?>



<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">CategoryForms</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"  > 
						<div class="form-title">
							<h4>Category Form :</h4>
						</div>
						<div class="form-body">

							<form method="POST" enctype="multipart/form-data"> 

								
								<div class="form-group"> <label for="exampleInputPassword1">Category Name</label> 
									<input type="text" name="cat_name" class="form-control" value="<?php echo $cat_name;?>" id="exampleInputPassword1" > </div>

								

							  <button type="submit" name="Submit" class="btn btn-default">Edit</button> </form> 
						</div>
					</div>

<?php
if (isset($_POST['Submit'])) {

	
	$cat_name=$_POST['cat_name'];
	

	$sql=" update tbl_category set cat_name='$cat_name' where status=0 and cat_id='$cat_id' ";

	$result=mysqli_query($con,$sql);

	if ($result) {
		
		echo"<script>alert('the record is updated success)')</script> ";
		echo "<script> window.location.href='category.php' </script>";
	}
	
}


  ?>


<?php
 include("footer.php");

?>
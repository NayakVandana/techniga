<?php
 include("config.php");
include ("sidebar.php");
include ("header.php");
?>

<?php 
if (isset($_GET['milk_id'])) {

	$milk_id=$_GET['milk_id'];
	$sql="select * from tbl_milk where status=0 and milk_id='$milk_id'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) {

	$user_id=$row['user_id'];
	$milk_name=$row['milk_name'];
	$qty=$row['qty'];
	$price=$row['price'];
	$logo=$row['logo'];
	$kg=$row['kg'];
	$container=$row['container'];
	$product_type=$row['product_type'];
	$description=$row['description'];
		
		}



}

 ?>



<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Forms</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"  > 
						<div class="form-title">
							<h4>Basic Form :</h4>
						</div>
						<div class="form-body">

							<form method="POST" enctype="multipart/form-data"> 

								<div class="form-group"> <label for="exampleInputEmail1">User ID</label> 
									<input type="text" name="user_id" class="form-control" value="<?php echo $user_id;?>" id="exampleInputEmail1" readonly> </div> 

								<div class="form-group"> <label for="exampleInputPassword1">Milk Name</label> 
									<input type="text" name="milk_name" class="form-control" value="<?php echo $milk_name;?>" id="exampleInputPassword1" > </div>

								<div class="form-group"> <label for="exampleInputPassword1">QTY</label> 
									<input type="text" name="qty" value="<?php echo $qty;?>" class="form-control"  id="exampleInputPassword1" > </div>

								<div class="form-group"> <label for="exampleInputPassword1">Price</label> 
									<input type="text" name="price" value="<?php echo $price;?>" class="form-control" id="exampleInputPassword1" > </div>

								

								<div class="form-group"> <label for="exampleInputPassword1">Logo</label> 
									
									
									
									
									
									<img src="../user/milk/<?php echo $logo;?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br />
        <input type="file" name="logo" id="logo" style="float:left;" />
<input type="hidden" name="logo" id="logo"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{
			echo $logo;
		}
	 ?>"/>
									
									
									
									
									
									
									
									</div>
</br></br></br></br>
								<div class="form-group"> <label for="exampleInputPassword1">Kg/gm/ltr/size</label> 
									<input type="text" name="kg" class="form-control" value="<?php echo $kg;?>" id="exampleInputPassword1" > </div>

								<div class="form-group"> <label for="exampleInputPassword1">Container</label>
								 <input type="text" name="container" class="form-control" value="<?php echo $container;?>" id="exampleInputPassword1" > </div>

								<div class="form-group"> <label for="exampleInputPassword1">Product Type</label> 
									<input type="text" name="product_type" class="form-control" value="<?php echo $product_type;?>" id="exampleInputPassword1" > </div>

								<div class="form-group"> <label for="exampleInputPassword1">Description</label>
								 <input type="text" name="description" value="<?php echo $description;?>" class="form-control" id="exampleInputPassword1" placeholder="Description"> </div>

							  <button type="submit" name="Submit" class="btn btn-default">Edit</button> </form> 
						</div>
					</div>

<?php
if (isset($_POST['Submit'])) {

	
	$milk_name=$_POST['milk_name'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$logo = trim($_FILES['logo']['name']);

	
	if($_FILES["logo"]["name"] == ''){
		 $logo = $_POST['logo'];
	}
	else{
		 $logo = $_FILES['logo']['name'];
	}
 
	
	
	
	
move_uploaded_file($_FILES['logo']['tmp_name'], "../user/milk/".$_FILES['logo']['name']);
	
	$kg=$_POST['kg'];
	$container=$_POST['container'];
	$product_type=$_POST['product_type'];
	$description=$_POST['description'];

	$sql=" update tbl_milk set milk_name='$milk_name',qty='$qty',price='$price',logo='$logo',kg='$kg',container='$container',product_type='$product_type',description='$description' where status=0 and milk_id='$milk_id' ";

	$result=mysqli_query($con,$sql);

	if ($result) {
		
		echo"<script>alert('the recode is updated success)')</script> ";
		echo "<script> window.location.href='milk.php' </script>";
	}
	
}


  ?>


<?php
 include("footer.php");

?>
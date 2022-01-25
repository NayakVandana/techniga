<?php
 include("config.php");
include ("sidebar.php");
include ("header.php");
?>

<?php 
if (isset($_GET['pro_id'])) {

	$pro_id =$_GET['pro_id'];
	$sql="select * from tbl_product where status=0 and pro_id ='$pro_id'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) {

	$cat_id=$row['cat_id'];
	$pro_name=$row['pro_name'];
	$description=$row['description'];
	$price=$row['price'];
	$logo=$row['logo'];
	$packing=$row['packing'];
	
		
		}



}

 ?>



<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Edit Prodcuts</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"  > 
						<div class="form-title">
							<h4>Product:</h4>
						</div>
						<div class="form-body">

							<form method="POST" enctype="multipart/form-data"> 

								<div class="form-group"> <label for="exampleInputEmail1">Category Name</label>
                                
                                  

<select name="cat_id" class="form-control"  required>
      <option value="" hidden>--select category--</option>

                  <?php
			if(isset($_SERVER['PHP_SELF']))
				{
				include("config.php");
                    
			?>
	<?php $sel=mysqli_query($con,"select * from tbl_category where status=0"); 
	while ($row=mysqli_fetch_array($sel))
	 { ?>
<option value=<?php echo $row['cat_id']?>>
		<?php echo $row['cat_name']?></option>
					<?php } 
								}?>
                    
					</select>


</div>




								<div class="form-group"> <label for="exampleInputPassword1">Product Name Name</label> <input type="text" name="pro_name" class="form-control" id="exampleInputPassword1" value="<?php echo $pro_name;?>"> </div>



								<div class="form-group"> <label for="exampleInputPassword1">Price</label> <input type="text" name="price" class="form-control" id="exampleInputPassword1" value="<?php echo $price;?>"> </div>




								
								<div class="form-group"> <label for="exampleInputPassword1">Logo</label> 
                                <img src="product/<?php echo $logo;?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br />
        <input type="file" name="logo" id="logo" style="float:left;" />
<input type="hidden" name="logo" id="logo"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{
			echo $logo;
		}
	 ?>"/> </div>
     </br></br>

								<div class="form-group"> <label for="exampleInputPassword1">Description</label> <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="<?php echo $description;?>"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">packing</label> <input type="text" name="packing" class="form-control" id="exampleInputPassword1" value="<?php echo $packing;?>"> </div>

								

							  <button type="submit" name="edit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>

<?php 
include("config.php");


if (isset($_POST['edit'])) 
{

    $cat_id=$_POST['cat_id'];
	$pro_name=$_POST['pro_name'];
	
	$price=$_POST['price'];
	
	
	
	$logo = trim($_FILES['logo']['name']);

	
	if($_FILES["logo"]["name"] == ''){
		 $logo = $_POST['logo'];
	}
	else{
		 $logo = $_FILES['logo']['name'];
	}
 
	
	
	
	
move_uploaded_file($_FILES['logo']['tmp_name'], "product/".$_FILES['logo']['name']);
	
	
		
	
	
	
	
	$description=$_POST['description'];
	$packing=$_POST['packing'];
	
	$sql="update tbl_product set cat_id='$cat_id',pro_name='$pro_name',
	price='$price',logo='$logo',description='$description',packing='$packing'
	where pro_id='$pro_id' and status=0";
	$result=mysqli_query($con,$sql);

	if ($result) 
	{
		echo "<script>alert('record edited succesfully')</script>";
		echo "<script>window.location.href='product.php';</script>";
	}

	
}


 ?>
<?php
 include("footer.php");

?>
<?php 
include("config.php");

include ("header.php");

if (isset($_POST['Submit'])) 
{

    $user_id=$_POST['user_id'];
	$milk_name=$_POST['milk_name'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$logo=$_FILES['logo']['name'];
	$kg=$_POST['kg'];
	$container=$_POST['container'];
	$product_type=$_POST['product_type'];
	$description=$_POST['description'];
	
	
	
	
	$sql1= "select * from tbl_milkdistributor where email_id = '$user' and status = 0";
				$result1=mysqli_query($con,$sql1);
				$count1 = mysqli_num_rows($result1);
				while($row = mysqli_fetch_array($result1))
					{
					
					$user_id = $row['user_id'];
					
					
					}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$sql= "insert into tbl_milk (user_id,milk_name,qty,price,logo,kg,container,product_type,description) values('$user_id','$milk_name','$qty','$price','$logo','$kg','$container','$product_type','$description')";
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
</br>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1" style="margin-left: 6%;
">Add Milk</h3>
					<div class="form-grids row widget-shadow" style="margin-left: 6%;
" data-example-id="basic-forms"  > 
						<div class="form-title">
							<h4></h4>
						</div>
						<div class="form-body">

							<form method="POST" enctype="multipart/form-data"> 

								<div class="form-group"> <label for="exampleInputEmail1">User ID</label> <input type="text" name="user_id" class="form-control" id="exampleInputEmail1" value="<?php echo $user;?>"> </div> 

								<div class="form-group"> <label for="exampleInputPassword1">Milk Name</label> <input type="text" name="milk_name" class="form-control" id="exampleInputPassword1" placeholder="Email"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">QTY</label> <input type="text" name="qty" class="form-control" id="exampleInputPassword1" placeholder="QTY"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Price</label> <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Price"> </div>

								<?php
 									if(isset($_FILES['logo']))
										 {
	 									$file_name=$_FILES['logo']['name'];
	 									$file_tmp=$_FILES['logo']['tmp_name'];
										 $file_size=$_FILES['logo']['size'];

    										 if($_FILES['logo']['size'] > 10526552)
											 {
         										echo "<br>image size is greater";
	 										 }
											 else
	 										{
         									if(move_uploaded_file($file_tmp,'milk/'.$file_name))
											 { 
			 
		 										}}
 												}					
 											?>

								<div class="form-group"> <label for="exampleInputPassword1">Logo</label> <input type="file" name="logo" class="form-control" placeholder="Logo"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Kg/gm/ltr/size</label> <input type="text" name="kg" class="form-control" id="exampleInputPassword1" placeholder="Size"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Container</label> <input type="text" name="container" class="form-control" id="exampleInputPassword1" placeholder="Container"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Product Type</label> <input type="text" name="product_type" class="form-control" id="exampleInputPassword1" placeholder="Product Type"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Description</label> <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description"> </div>

							  <button type="submit" name="Submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>

</br></br>
<div class="bs-example widget-shadow" data-example-id="bordered-table" > 
			<h4><center>Manage Milk:</center></h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Email ID</th>
			 	 <th>Milk Name</th>
			 	  <th>Qty</th>
			 	   <th>Price</th>
			 	    <th>Logo</th>
			 	     <th>Kg</th> 
			 	     <th>Container</th>
			 	      <th>Product_type</th>
			 	       <th>Description</th>
			 	       	
			 	       	 <th>Edit</th>
			 	       	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	
	$sql="select pl.email_id,lgn.* from tbl_milk lgn INNER JOIN
	tbl_milkdistributor pl on pl.user_id=lgn.user_id where lgn.status=0";
	
	
	
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['email_id']; ?></td>
		<td> <?php echo $row['milk_name']; ?></td>
		<td> <?php echo $row['qty']; ?></td>
		<td> <?php echo $row['price']; ?></td>
		 	<td><img src="milk\<?php echo $row['logo'];?>" style="width:40px;height: 40px;"></td>
		<td> <?php echo $row['kg']; ?></td>
		<td> <?php echo $row['container']; ?></td>
		<td> <?php echo $row['product_type']; ?></td>
		<td> <?php echo $row['description']; ?></td>
    

     <td> <a href="editmilk.php?milk_id=<?php echo $row['milk_id'];?>">
     	<img src="images/e.png" style="width:40px;height:40px;">
     </a></td>


	</tr>
<?php
}

?>

</table>
  
		</div>



<?php
include ("footer.php");
?>
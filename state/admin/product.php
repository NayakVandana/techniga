<?php 
include("config.php");
include ("sidebar.php");
include ("header.php");
include("info.php");

if (isset($_POST['Submit'])) 
{

    $cat_id=$_POST['cat_id'];
	$pro_name=$_POST['pro_name'];
	
	$price=$_POST['price'];
	$logo=$_FILES['logo']['name'];
	$description=$_POST['description'];
	$packing=$_POST['packing'];
	
	$sql= "insert into tbl_product(cat_id,pro_name,price,logo,description,packing) values('$cat_id','$pro_name','$price','$logo','$description','$packing')";
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
		
	<!-- Classie -->
		
</body>
</html>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Add Prodcuts</h3>
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




								<div class="form-group"> <label for="exampleInputPassword1">Product Name Name</label> <input type="text" name="pro_name" class="form-control" id="exampleInputPassword1" placeholder="enter product name"> </div>



								<div class="form-group"> <label for="exampleInputPassword1">Price</label> <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="enter price"> </div>

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
         									if(move_uploaded_file($file_tmp,'product/'.$file_name))
											 { 
			 
		 										}}
 												}					
 											?>

								<div class="form-group"> <label for="exampleInputPassword1">Logo</label> <input type="file" name="logo" class="form-control" placeholder="Logo"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Description</label> <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">packing</label> <input type="text" name="packing" class="form-control" id="exampleInputPassword1" placeholder="enter packing detail"> </div>

								

							  <button type="submit" name="Submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>


<div class="bs-example widget-shadow" data-example-id="bordered-table" > 
			<h4>Product Table:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>category</th>
			 	 <th>producrt Name</th>
			 	  
			 	   <th>Price</th>
			 	    <th>Logo</th>
			 	     <th>description</th> 
			 	     <th>packing</th>
			 	      
			 	       	 <th>Delete</th>
			 	       	 <th>Edit</th>
			 	       	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	
	
	$sql="select pl.cat_name,lgn.* from tbl_product lgn INNER JOIN tbl_category pl ON pl.cat_id=
	lgn.cat_id where lgn.status=0";
	
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['cat_name'];?></td>
		<td> <?php echo $row['pro_name']; ?></td>
		
		<td> <?php echo $row['price']; ?></td>
		 	<td><img src="product\<?php echo $row['logo'];?>" style="width:40px;height: 40px;"></td>
		<td> <?php echo $row['description']; ?></td>
		<td> <?php echo $row['packing']; ?></td>
		
     <td> <a href="producrt.php?pro_id=<?php echo $row['pro_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     <td> <a href="editproduct.php?pro_id=<?php echo $row['pro_id'];?>">
     	<img src="images/e.png">
     </a></td>


	</tr>
<?php
}

?>


  </table>
		</div>
		

<?php
if (isset($_GET['pro_id'])) {

	$pro_id=$_GET['pro_id'];
	$sql="update tbl_product set status=1 where pro_id='$pro_id'";

	$result=mysqli_query($con,$sql);
	if ($result) {
		 echo "the recorde is delete";
	}
	
}

?>
</div></div></div></div></div></div></div></div></div></div>
</div></div></div></div></div></div></div></div></div></div>

<?php
include ("footer.php");
?>
<?php 
include("config.php");
include ("sidebar.php");
include ("header.php");
include("info.php");

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
					<h3 class="title1">Milk</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"  > 
						<div class="form-title">
							<h4>Milk Form :</h4>
						</div>

						</div>
					</div>


<div class="bs-example widget-shadow" data-example-id="bordered-table" > 
			<h4>Manage Milk:</h4>
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
			 	       <th>Description</th
			 	       	> <th>Delete</th>
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
		 	<td><img src="../user/milk/<?php echo $row['logo'];?>" style="width:40px;height: 40px;"></td>
		<td> <?php echo $row['kg']; ?></td>
		<td> <?php echo $row['container']; ?></td>
		<td> <?php echo $row['product_type']; ?></td>
		<td> <?php echo $row['description']; ?></td>
     <td> <a href="milk.php?milk_id=<?php echo $row['milk_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     <td> <a href="editmilk.php?milk_id=<?php echo $row['milk_id'];?>">
     	<img src="images/e.png">
     </a></td>


	</tr>
<?php
}

?>

</table>
  
		</div>

<?php
if (isset($_GET['milk_id'])) {

	$milk_id=$_GET['milk_id'];
	$sql="update tbl_milk set status=1 where milk_id='$milk_id'";

	$result=mysqli_query($con,$sql);
	if ($result) {
		 echo "the recorde is delete";
	}
	
}

?>

<?php
include ("footer.php");
?>
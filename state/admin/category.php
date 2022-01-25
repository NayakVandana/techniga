 <?php
 include("config.php");
include ("sidebar.php");
include ("header.php");
include("info.php");
if (isset($_POST['Submit'])) 
{
	
	$cat_name=$_POST['cat_name'];
	
$sql="insert into tbl_category(cat_name)values('$cat_name')";
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
					<h3 class="title1">Category</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms" style="width:50%;" > 
						<div class="form-title">
							<h4>Category Form :</h4>
						</div>
						<div class="form-body">
							<form method="POST" enctype="multipart/form-data"> 

								<div class="form-group"> <label for="exampleInputEmail1">Category Name</label> <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category Name"> </div> 

								

							  <button type="submit" name="Submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>

 <div class="bs-example widget-shadow" data-example-id="bordered-table" > 
			<h4>Category Table:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Category Name</th>
			 	 
			 	    <th>delete</th>
			 	       	 <th>edit</th>
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	$sql="select * from tbl_category where status=0";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['cat_name']; ?></td>
		
		<td> <a href="category.php?cat_id=<?php echo $row['cat_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     <td> <a href="editcategory.php?cat_id=<?php echo $row['cat_id'];?>">
     	<img src="images/e.png">
     </a></td>


	</tr>
<?php
}

?>
  </table>
		</div>


<?php
if(isset($_GET['cat_id']))
{

$cat_id=$_GET['cat_id'];
$sql="update tbl_category set status=1 where cat_id='$cat_id'";



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
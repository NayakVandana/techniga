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
		
	<!-- Classie -->
		
</body>
</html>




<div class="bs-example widget-shadow" data-example-id="bordered-table" style="width: 76%;
    margin-left: 23%;
    margin-top: 8%;" > 
			<h4>Product Table:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>category</th>
			 	 <th>producrt Name</th>
			 	  
			 	   <th>Price</th>
			 	    <th>Logo</th>
			 	     <th>description</th> 
			 	     <th>packing</th>
			 	      
			 	       	 
			 	       	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
								include("config.php");
if(isset($_GET['user_query']))	
{
$search_query=$_GET['user_query'];	
	
	$sql="select pl.cat_name,lgn.* from tbl_product lgn INNER JOIN tbl_category pl ON pl.cat_id=
	lgn.cat_id where lgn.status=0 and lgn.pro_name like '%$search_query%'";
	
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
		
     


	</tr>
<?php
}
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
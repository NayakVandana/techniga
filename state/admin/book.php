
<?php
include("config.php");
include ("sidebar.php");
include ("header.php");
include("info.php");

?>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		
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
						

		<!--footer-->
		
        <!--//footer-->
	</div>
	<!-- Classie -->
		
</body>
</html>




<div id="page-wrapper">
			<div class="main-page">
				
					




 <div class="bs-example widget-shadow" data-example-id="bordered-table"> 
			<h4>Manage Booking:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>order id</th>
			 	 <th>Email id</th>
			 	  <th>product name</th>
			 	   <th>price</th>
				   <th>qty</th>
				   <th>date</th>
			 	    <th>approve</th>
			 	       	
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	
	
	$sql="select pl.pro_name,lgn.* from order_detail lgn INNER JOIN tbl_product pl ON
	pl.pro_id=lgn.pro_id where lgn.status='pending'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['order_id']; ?></td>
		<td> <?php echo $row['email_id']; ?></td>
		<td> <?php echo $row['pro_name']; ?></td>
		<td> <?php echo $row['total_price']; ?></td>
		<td> <?php echo $row['quantity']; ?></td>
			<td> <?php echo $row['date']; ?></td>
	
     <td> <a href="book.php?id=<?php echo $row['id']; ?>">
     	<img src="images/tick.jpg">
     </a> </td>

     


	</tr>
<?php
}

?>
  </table>
		</div>

		<?php
		if (isset($_GET['id'])) {

			$id=$_GET['id'];
			$sql= "update order_detail set status='approve' where id='$id'";

			$result=mysqli_query($con,$sql);
          if ($result) {

	     echo " the is record approve";
          }

 	
            } 

			
		


		?>


<?php
include ("footer.php");
?>
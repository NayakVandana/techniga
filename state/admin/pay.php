
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
		
</body>
</html>




<div id="page-wrapper">
			<div class="main-page">
				
					




 <div class="bs-example widget-shadow" data-example-id="bordered-table"> 
			<h4>Manage Payment:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Email id</th>
			 	 <th>Total price</th>
			 	 
			 	   <th>card type</th>
                    <th>name on card</th>
                     <th>card no</th>
                   <th>expiry date</th>
			 	   <th>book date</th>
                   
                   
                   
			 	    <th>Delete</th>
			 	       	
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	$sql="select * from tbl_payment where status='approve'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['email_id']; ?></td>
		<td> <?php echo $row['total_price']; ?></td>
		<td> <?php echo $row['card_type']; ?></td>
		<td> <?php echo $row['nameon_card']; ?></td>
        <td> <?php echo $row['card_no']; ?></td>
		<td> <?php echo $row['expiry_date']; ?></td>
        <td> <?php echo $row['date']; ?></td>
	
	
     <td> <a href="pay.php?pay_id=<?php echo $row['pay_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     


	</tr>
<?php
}

?>
  </table>
		</div>

		<?php
		if (isset($_GET['pay_id'])) {

			$pay_id =$_GET['pay_id'];
			$sql= "update tbl_payment set status='seen' where pay_id ='$pay_id'";

			$result=mysqli_query($con,$sql);
          if ($result) {

	     echo " the is view by admin";
          }

 	
            } 

			
		


		?>


<?php
include ("footer.php");
?>

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
			<h4>Manage Complain:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Email id</th>
			 	 <th>Complain Type</th>
			 	 
			 	   <th>Description</th>
                    <th>Date</th>
                     <th>status</th>
                              
                   
                   
			 	   
			 	       	
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	$sql="select pl.email_id,lgn.* from tbl_complain lgn INNER JOIN tbl_milkdistributor pl ON
	pl.user_id=lgn.user_id where lgn.status='pending'";
		$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['email_id']; ?></td>
		<td> <?php echo $row['complain_type']; ?></td>
		<td> <?php echo $row['description']; ?></td>
        <td> <?php echo $row['date']; ?></td>
		
	
	
     <td> <a href="complain.php?complain_id=<?php echo $row['complain_id']; ?>">
     	<img src="images/tick.jpg">
     </a> </td>

     


	</tr>
<?php
}

?>
  </table>
		</div>

		<?php
		if (isset($_GET['complain_id'])) {

			$complain_id  =$_GET['complain_id'];
			$sql= "update tbl_complain set status='approve' where complain_id  ='$complain_id'";

			$result=mysqli_query($con,$sql);
          if ($result) {

	     echo " complain status approved";
          }

 	
            } 

			
		


		?>


<?php
include ("footer.php");
?>
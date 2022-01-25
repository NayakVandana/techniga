
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
			<h4>Manage Feedback:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Email id</th>
			 	 <th>Message</th>
			 	 
			 	   
                     <th>Delete</th>
                              
                   
                   
			 	   
			 	       	
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	$sql="select pl.email_id,lgn.* from tbl_feedback lgn INNER JOIN tbl_milkdistributor pl ON
	pl.user_id=lgn.user_id where lgn.status='pending'";
		$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['email_id']; ?></td>
		<td> <?php echo $row['message']; ?></td>
		
		
	
	
     <td> <a href="feedback.php?feedback_id=<?php echo $row['feedback_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     


	</tr>
<?php
}

?>
  </table>
		</div>

		<?php
		if (isset($_GET['feedback_id'])) {

			$feedback_id  =$_GET['feedback_id'];
			$sql= "update tbl_feedback set status=1 where feedback_id='$feedback_id'";

			$result=mysqli_query($con,$sql);
          if ($result) {

	     echo " record deleted";
          }

 	
            } 

			
		


		?>


<?php
include ("footer.php");
?>





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
			<h4>Manage Contact:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Name</th>
			 	 <th>Email</th>
			 	  <th>Mobile Number</th>
			 	   <th>Message</th>
			 	    <th>Delete</th>
			 	       	
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	$sql="select * from tbl_contact where status=0";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['name']; ?></td>
		<td> <?php echo $row['email']; ?></td>
		<td> <?php echo $row['mo_number']; ?></td>
		<td> <?php echo $row['message']; ?></td>
	
     <td> <a href="contact.php?contact_id=<?php echo $row['contact_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     


	</tr>
<?php
}

?>
  </table>
		</div>

		<?php
		if (isset($_GET['contact_id'])) {

			$contact_id=$_GET['contact_id'];
			$sql= "update tbl_contact set status=1 where contact_id='$contact_id'";

			$result=mysqli_query($con,$sql);
          if ($result) {

	     echo " the is record delete";
          }

 	
            } 

			
		


		?>


<?php
include ("footer.php");
?>
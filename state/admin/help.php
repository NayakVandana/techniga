 <?php
 include("config.php");
include ("sidebar.php");
include ("header.php");
include("info.php");
if (isset($_POST['Submit'])) 
{
	
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	
	
	
$sql="insert into tbl_helpdesk(question,answer)values('$question','$answer')";
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
					<h3 class="title1">Help Desk</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms" style="width:50%;" > 
						<div class="form-title">
							<h4>Help Desk:</h4>
						</div>
						<div class="form-body">
							<form method="POST" enctype="multipart/form-data"> 

								<div class="form-group"> <label for="exampleInputEmail1">Question</label> <input type="text" name="question" class="form-control" id="exampleInputEmail1" placeholder="Enter Question"> </div> 

								
<div class="form-group"> <label for="exampleInputEmail1">Answer</label> <input type="text" name="answer" class="form-control" id="exampleInputEmail1" placeholder="Enter Answer"> </div> 

								
							  <button type="submit" name="Submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>

 <div class="bs-example widget-shadow" data-example-id="bordered-table" > 
			<h4>Manage Help Desk:</h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Question</th>
                <th>Answer</th>
			 	 
			 	    <th>delete</th>
			 	       	 
			 	    	  </tr> 

			 	       	</thead>
			 	       	 <tbody> 
			 	       	 	<tr> 
			 	       	 		
			 	       	 		<?php
	$sql="select * from tbl_helpdesk where status=0";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) 
	{

	?>
	<tr>
		<td> <?php echo $row['question']; ?></td>
        <td> <?php echo $row['answer']; ?></td>
		
		<td> <a href="help.php?helpdesk_id=<?php echo $row['helpdesk_id']; ?>">
     	<img src="images/delete.jpg">
     </a> </td>

     


	</tr>
<?php
}

?>
  </table>
		</div>


<?php
if(isset($_GET['helpdesk_id']))
{

$helpdesk_id =$_GET['helpdesk_id'];
$sql="update tbl_helpdesk set status=1 where helpdesk_id ='$helpdesk_id'";



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
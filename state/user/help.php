<?php
include("header.php");
include("config.php");
?>


<div class="bs-example widget-shadow" data-example-id="bordered-table" > 
			<h4><center>Manage Help Desk:</center></h4>
			<table class="table table-bordered"> <thead>
			 <tr> 
			 	<th>Question</th>
                <th>Answer</th>
			 	 
			 	   
			 	       	 
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
		
		
     


	</tr>
<?php
}

?>
  </table>
		</div>






</div>

</br></br>



<?php 
include("footer.php");

 ?>
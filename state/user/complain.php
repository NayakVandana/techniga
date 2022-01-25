<?php
include("header.php");

?>


<?php
include("config.php");
global $user_id;
if(isset($_POST['send']))

{
	
	$user_id=$_POST['user_id'];
	$complain_type=$_POST['complain_type'];
	$description=$_POST['description'];
	
	
	
	
	
	$sql1= "select * from tbl_milkdistributor where email_id = '$user' and status = 0";
				$result1=mysqli_query($con,$sql1);
				$count = mysqli_num_rows($result1);
				while($row = mysqli_fetch_array($result1))
					{
					
					$user_id = $row['user_id'];
					
					
					}
	
	
	
	
	
	
	
	
	
	
	$sql = "insert into tbl_complain(user_id,complain_type,description,date,status)
	value('$user_id','$complain_type','$description',now(),'pending')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
	    echo "<script language='javascript'>alert('your complain send successfully!!!!');</script>";
		
		
	}}
	?>




<div >

	
		<h5 class="modal-title text-uppercase"> Complain </h5>
		<div class="lregister-form">
			<form action="#" method="post" enctype="multipart/form-data" class="px-3 pt-3 pb-0">


				<script language="Javascript" type="text/javascript">

                    function onlyAlphabets(e, t) {
                     try {
                     if (window.event) {
                     var charCode = window.event.keyCode;
                     }
                     else if (e) {
                     var charCode = e.which;
                     }
                     else { return true; }
                    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||
				charCode == 32)
                     return true;
                     else
                    return false;

                    }
                    catch (err) {
                    alert(err.Description);
				
                    }
                    }

                    </script>


				<div class="form-group" >
					<label for="recipient-name" class="col-form-label">Email id</label>
					<input  style="height: 32px; width:25% ; " type="text" class="form-control" value="<?php echo $user;?>" name="user_id" id="recipient-name2"  onKeyPress="return onlyAlphabets(event,this);" required="">
				</div>

				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Complain type</label>
					<input type="text" style="height: 32px; width:25% ; " class="form-control"  name="complain_type" id="recipient-name3" onkeypress="return onlyAlphabets(event,this);" required="">
				</div>

				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Description</label>
					<input type="text" style="height: 32px; width:25% ; " class="form-control"  name="description" id="recipient-name3" >
				</div>

				</br>

					<input type="submit"  style="height: 32px; width:25% ;color: #eee; background-color: #17a2b8; border-color: #17a2b8; border-radius: 0;letter-spacing: 1px;font-size: 15px; "  name="send" class="form-control" value="Send">
				</div>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>

</br></br>



<?php 
include("footer.php");

 ?>
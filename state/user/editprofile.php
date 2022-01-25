<?php
include("header.php");

?>

<?php
global $first_name,$middle_name,$last_name,$birth_date,$mobile_number,$city,$address;
include("config.php");
$sql="select * from tbl_milkdistributor where email_id='$user' and status=0";

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$first_name=$row['first_name'];
	$middle_name=$row['middle_name'];
	$last_name=$row['last_name'];
	$birth_date=$row['birth_date'];
	$mobile_number=$row['mobile_number'];
	$city=$row['city'];
	$address=$row['address'];
	
}

?>




<div >

	
		<h5 class="modal-title text-uppercase"> Edit Profile </h5>
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
                     if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
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
					<label for="recipient-name" class="col-form-label">First Name</label>
					<input  style="height: 32px; width:25% ; " type="text" class="form-control" value="<?php echo $first_name;?>" name="first_name" id="recipient-name2"  onKeyPress="return onlyAlphabets(event,this);" required="">
				</div>

				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Middle Name</label>
					<input type="text" style="height: 32px; width:25% ; " class="form-control" value="<?php echo $middle_name;?>" name="middle_name" id="recipient-name3" onkeypress="return onlyAlphabets(event,this);" required="">
				</div>

				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Last Name</label>
					<input type="text" style="height: 32px; width:25% ; " class="form-control" value="<?php echo $last_name;?>" name="last_name" id="recipient-name3" onkeypress="return onlyAlphabets(event,this);" required="">
				</div>

				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Birth Date</label>
					<input type="date" style="height: 32px; width:25% ; "class="form-control" placeholder="" name="birth_date" id="recipient-name4" required="">
	

				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Mobile Number</label>


               <span id="error" class="ss-icon" style="color: Red; display: none" ></span>

					<script type="text/javascript">
                        var specialKeys = new Array();
                        specialKeys.push(8); //Backspace
                        function IsNumeric(e) {
                        var keyCode = e.which ? e.which : e.keyCode
                        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                        document.getElementById("error").style.display = ret ? "none" : "inline";
                        return ret;
                        }
                      </script>  

					<input type="text" class="form-control" name="mobile_number" id="recipient-name5" style="height: 32px; width:25% ; "
					value="<?php echo $mobile_number;?>" minlength="10" maxlength="10"  onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"  required="">
				</div>

				
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">City</label>
					<input type="text" style="height: 32px; width:25% ; "class="form-control" value="<?php echo $city;?>" name="city" id="recipient-name4" required="">
				</div>

				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Address</label>
					<input type="text" style="height: 32px; width:25% ; " class="form-control"value="<?php echo $address;?>" name="address" id="recipient-name4" required="">
				</div>

					<input type="submit"  style="height: 32px; width:25% ;color: #eee; background-color: #17a2b8; border-color: #17a2b8; border-radius: 0;letter-spacing: 1px;font-size: 15px; "  name="edit" class="form-control" value="Edit">
				</div>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>



<?php
include("config.php");
if(isset($_POST['edit']))

{
	
	$first_name=$_POST['first_name'];
	$middle_name=$_POST['middle_name'];
	$last_name=$_POST['last_name'];
	$birth_date=$_POST['birth_date'];
	$mobile_number=$_POST['mobile_number'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	
	
	$sql = "update tbl_milkdistributor set first_name='$first_name',middle_name='$middle_name',last_name='$last_name',mobile_number='$mobile_number',birth_date='$birth_date',city='$city',address='$address' where email_id='$user' and status=0 ";
	$result=mysqli_query($con,$sql);
	if($result)
	{
	    echo "<script language='javascript'>alert('your profile has been updated!!!!');</script>";
		echo "<script language='javascript'>window.location.href='index.php';</script>";
		
	}}
	?>


<?php 
include("footer.php");

 ?>
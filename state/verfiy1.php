


<?php
include("header.php");

?>

<?php
include("config.php");



if(isset($_POST['submit50']))
{
	$mobile_number=$_GET['mobile_number'];
	
$user_otp=$_POST['otp'];
$sql="SELECT `otp` FROM `tbl_milkdistributor` WHERE `mobile_number`=$mobile_number";


list($otp)=mysqli_fetch_array(mysqli_query($con,$sql));
if($otp==$user_otp)
{
	$sql2="UPDATE `tbl_milkdistributor` SET `status`=0 WHERE `mobile_number`=$mobile_number";
	
	$result2=mysqli_query($con,$sql2);
	
	
	
	$sql3="UPDATE `tbl_login` SET `status`=0 WHERE `status`=1";
	$result3=mysqli_query($con,$sql3);
	
	
	
	
	
	if(mysqli_affected_rows($con)>0)
	{
		
		echo "<script>alert('your account created successfully..you can now login to your acocount..');</script>";
		echo "<script>window.location.href='index.php';</script>";
		
		
	}
	else
	{
		
		echo "<script>alert('something went wroing');</script>";
		echo "<script>window.location.href='verify1.php';</script>";
		
	}	
		
}
else
{
	echo "<script>alert('something went wroing');</script>";
		echo "<script>window.location.href='verify1.php';</script>";
}
}
?>

<div>

	
		<h5 class="modal-title text-uppercase">Verfiy OTP  </h5>
		<div class="lregister-form">
			<form action="#" method="post" enctype="multipart/form-data" class="px-3 pt-3 pb-0">



				<div class="form-group" style="margin-top: -15px">
					<label for="recipient-name" class="col-form-label">Enter OTP</label>
					<input  style="height: 32px; width:25% ; " type="password" class="form-control"  name="otp" id="recipient-name2"  required="">
				</div>

				

			

					<input type="submit"  style="height: 32px;  width:25% ;color: #eee; background-color: #17a2b8; border-color: #17a2b8; border-radius: 0;letter-spacing: 1px;font-size: 15px; "  name="submit50" class="form-control" value="Send">
				</div>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>



<?php 
include("footer.php");

 ?>
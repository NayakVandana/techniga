<?php
include("header.php");

?>


<?php
				include("config.php");

                            if(isset($_POST['Conform']))
                            {
								global $pass;
								$oldpass = $_POST['oldpass'];
								$newpass = $_POST['newpass'];
								$conpass = $_POST['conpass'];
								$sql = "select * from tbl_login where email_id = '$user' and status = 0";
								$result = mysqli_query($con,$sql);
								$count = mysqli_num_rows($result);
								if($count > 0)
								{
									while($row = mysqli_fetch_array($result))
									{
										$pass = $row['password'];
										
									}
									if($pass == $oldpass)
									{
										if($newpass == $conpass)
										{
											$sql1 = "update tbl_login set password = '$newpass' where email_id = '$user' and status = 0";
											$result1 = mysqli_query($con,$sql1);
											if($result1)
											{
									echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
									echo "<script language='javascript'>window.location.href='../index.php';</script>";
											}
											
											$sql2 = "update tbl_milkdistributor set password = '$newpass' where email_id = '$user' and status = 0";
											$result2 = mysqli_query($con,$sql2);
											if($result2)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												echo "<script language='javascript'>window.location.href='../index.php';</script>";
											}
											
										}
										else
										{
											echo "<script language='javascript'>alert('please enter same password is not match');</script>";
										}
									}
									else
									{
										echo "<script language='javascript'>alert('Please enter your Current Password');</script>";
									}
								}
							}
						?>

<div  >

	
		<h5 class="modal-title text-uppercase">Change Password </h5>
		<div class="lregister-form">
			<form action="#" method="post" enctype="multipart/form-data" class="px-3 pt-3 pb-0">



				<div class="form-group" style="margin-top: -15px">
					<label for="recipient-name" class="col-form-label">Old Password</label>
					<input  style="height: 32px; width:25% ; " type="text" class="form-control"  name="oldpass" id="recipient-name2"  required="">
				</div>

				<div class="form-group" style="margin-top: -15px">
					<label for="recipient-name" class="col-form-label"> New Password</label>
					<input type="text" style="height: 32px; width:25% ; " class="form-control"  name="newpass" id="recipient-name3"  required="">
				</div>

				<div class="form-group" style="margin-top: -15px">
					<label for="recipient-name" class="col-form-label">Conform Password</label>
					<input type="text" style="height: 32px; width:25% ; " class="form-control"  name="conpass" id="recipient-name3"  required="">
				</div>

			

					<input type="submit"  style="height: 32px;  width:25% ;color: #eee; background-color: #17a2b8; border-color: #17a2b8; border-radius: 0;letter-spacing: 1px;font-size: 15px; "  name="Conform" class="form-control" value="Change">
				</div>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>



<?php 
include("footer.php");

 ?>
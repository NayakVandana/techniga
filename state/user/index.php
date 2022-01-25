<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("header.php");

?>



<!-- //team -->

<!-- Clients -->
<section class="welcome py-5" id="welcome">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> welcome to state dairy system </h3>
		<div class="row welcome-grids">
			<div class="col-lg-4 mb-lg-0 mb-5">
				<h4 class="left-heading"> Regarding Dairy Story</h4>
				<p class="mb-3" style="text-align:justify" >The milk dairy management system is a junction or place between rural
                                 area people and dairy management system Our main goal to develop this
                                 application to encourage a dairy industry.</p>
				<div class="welcome-button mt-4">
					<a href="index.php">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="image1 mb-4">
				<h4>Milk Distributer</h4>
					<p class="mt-3">It provied link between dairy and milk distruber</P>
				</div>
				<div class="image1">
				<h4>Employee Salary</h4>
					<p class="mt-3">DIstributor can view employee salary</P>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
				<div class="image1 mb-4">
				<h4>Product </h4>
					<p class="mt-3">Distributor can view product online and can addto cart it</P>
				</div>
				<div class="image1">
				<h4>Payment</h4>
					<p class="mt-3">Distributor can pay online.and save their valuable time</P>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
include("footer.php");

 ?>



  <?php
include('config.php');
	if(isset($_POST['login']))
	{
		
		$user = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from tbl_login where email_id = '$user' and password = '$password' and status=0";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
					$type= $row['type'];
			}
			if(($type=="admin")||($type=='Admin'))
			{
			$_SESSION['user'] = $user;								
	echo "<script language='javascript'>window.location.href='admin/index.php';</script>";
			}
			elseif(($type=="user")||($type=='User'))
			{
			$_SESSION['user'] = $user;
			echo "<script language='javascript'>window.location.href='user/index.php';</script>";
			}
			}
		else
		{
	echo "<script language='javascript'>alert('Your Emailid  or Password is wrong');</script>";
				
				
		}
		}
	?>
		
<!-- footer -->
<!-- popup for login -->
<div id="login-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">Login</h5>
		<div class="login-form">
			<form action="#" method="post" class="px-3 pt-3 pb-0">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">User Name</label>
					<input type="email" class="form-control" placeholder="" name="username" id="recipient-name" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="" name="password" id="recipient-name1" required="">
				</div>
				<div class="right-w3l">
					<input type="submit" class="form-control" value="Login">
				</div> <br>
				<div class="right-w3l">
		
                
                <li><a href="forgetpassword.php">Forgrt Password</a></li>
            </ul>
				</div>
			</form>

		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- popup for login -->

<!-- popup for register -->

<?php
include("config.php");

if (isset($_POST['submit'])) {
 	
 	
 	$first_name=$_POST['first_name'];
 	$middle_name=$_POST['middle_name'];
 	$last_name=$_POST['last_name'];
 	$birth_date=$_POST['birth_date'];
 	$mobile_number=$_POST['mobile_number'];
 	$email_id=$_POST['email_id'];
 	$password=$_POST['password'];
 	$id_proof=$_FILES['id_proof']['name'];
 	$city=$_POST['city'];
 	$address=$_POST['address'];

         $sql = "select * from tbl_login where email_id = '$email_id' and status = 0";
					$result = mysqli_query($con,$sql);
					$count = mysqli_num_rows($result);
					if($count >= 1)
				    {
												
					echo "<script language='javascript'>alert('This email id is already registered here.');</script>";
					echo "<script language='javascript'>window.location.href='index.php';</script>";
					}
					else
					{
					$sql1 = "insert into tbl_milkdistributor(first_name,middle_name,last_name,birth_date,mobile_number,email_id,password,id_proof,city,address) values('$first_name','$middle_name','$last_name','$birth_date','$mobile_number','$email_id','$password','$id_proof','$city','$address')";


                    $result1 = mysqli_query($con,$sql1);
					if($result1)
					{
					echo "<script language='javascript'>alert('You have Register Successfully');</script>";
					echo "<script language='javascript'>window.location.href='index.php';</script>";	
					}
												
		              $sql2 = "insert into tbl_login (email_id , password , type , status ) values ('$email_id' , '$password' , 'user' , 0)";
												
												$result2 = mysqli_query($con,$sql2);
												if($result2)
												{
			echo "<font color='white' align='center'>Registered Successfully......</font>";
		}
		
		else
		{
			echo "<font color='white' align='center'>Record not inserted</font>";
		}
					/*echo "<script language='javascript'>alert('You are registered. You will can login after verfication mail');</script>";
			echo "<script language='javascript'>window.location.href='login.php';</script>";*/	
			}
			}
				?>



<div id="register-popup" class="popup-effect">
	<div class="popup" style="margin-top: -15px">
		<h5 class="modal-title text-uppercase">Milk Distributer </h5>
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


				<div class="form-group" style="margin-top: -20px ">
					<label for="recipient-name" class="col-form-label">First Name</label>
					<input  style="height: 32px;" type="text" class="form-control" placeholder="Enter first name(input only Alphabets)" name="first_name" id="recipient-name2"  onKeyPress="return onlyAlphabets(event,this);" required="">
				</div>

				<div class="form-group"style="margin-top: -20px">
					<label for="recipient-name" class="col-form-label">Middle Name</label>
					<input type="text" style="height: 32px;"class="form-control" placeholder="Enter middle name (input only Alphabets)" name="middle_name" id="recipient-name3" onkeypress="return onlyAlphabets(event,this);" required="">
				</div>

				<div class="form-group"style="margin-top: -20px">
					<label for="recipient-name" class="col-form-label">Last Name</label>
					<input type="text"style="height: 32px;" class="form-control" placeholder="Enter last name (input only Alphabets)" name="last_name" id="recipient-name3" onkeypress="return onlyAlphabets(event,this);" required="">
				</div>

				<div class="form-group"style="margin-top: -20px">
					<label for="recipient-name" class="col-form-label">Birth Date</label>
					<input type="date" style="height: 32px;"class="form-control" placeholder="" name="birth_date" id="recipient-name4" required="">
	

				<div class="form-group"style="margin-top: -5px">
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

					<input type="text"style="height: 32px;" class="form-control" name="mobile_number" id="recipient-name5"
					 placeholder="Contact Number(* Input digits (0 - 9)" minlength="10" maxlength="10"  onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"  required="">
				</div>


				<div class="form-group" style="margin-top: -20px">
					<label for="recipient-name" class="col-form-label">Email id</label>
					<input type="email" style="height: 32px;"class="form-control" placeholder="" name="email_id" id="recipient-name4" required="">
				</div>
				
				<div class="form-group" style="margin-top: -20px">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password"style="height: 32px;" class="form-control" placeholder="" name="password" id="recipient-name6" required="">
				</div>


								<?php
 									if(isset($_FILES['id_proof']))
									 {
	 									$file_name=$_FILES['id_proof']['name'];
	 									$file_tmp=$_FILES['id_proof']['tmp_name'];
	 									$file_size=$_FILES['id_proof']['size'];
     									if($_FILES['id_proof']['size'] > 10526552)
										 {
         								echo "<br>image size is greater";
	 										}
	 									else
	 									{
         								if(move_uploaded_file($file_tmp,'milk/'.$file_name))
		 								{ 
			 
		 						 		}}
 										}
 										?>
 										

				<div class="form-group" style="margin-top: -20px">
					<label for="recipient-name" class="col-form-label">ID Proof</label>
					<input type="file"style="height: 40px;" class="form-control" placeholder="" name="id_proof" id="recipient-name4" required="">
				</div>

				<div class="form-group"style="margin-top: -20px">
					<label for="recipient-name" class="col-form-label">City</label>
					<input type="text"style="height: 32px;" class="form-control" placeholder="" name="city" id="recipient-name4" required="">
				</div>

				<div class="form-group"style="margin-top: -20px">
					<label for="recipient-name" class="col-form-label">Address</label>
					<input type="text"style="height: 32px;" class="form-control" placeholder="" name="address" id="recipient-name4" required="">
				</div>

				<div class="right-w3l"style="margin-top: -10px">
					<input type="submit" name="submit" class="form-control" value="Get Started">
				</div>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- popup for register -->

</body>
</html>
<?php
include("header.php");

?>




 <!-- inner banner -->
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

<!-- contact -->
<?php
		if(isset($_POST['submit4']))
					{
			include('config.php');
		$email_id = $_POST['email_id'];
	$sql = "select * from tbl_login where email_id = '$email_id' and status = 0";
					$result = mysqli_query($con,$sql);
						$count = mysqli_num_rows($result);
						if($count > 0)
						{
				while($row = mysqli_fetch_array($result))
					  		{
						$pass= $row['password'];
						}
					include ("class.phpmailer.php"); // include the class name
					$mail = new PHPMailer(); // create a new object
						$mail->IsSMTP(); // enable SMTP
				$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
						$mail->SMTPSecure = 'tls';
						$mail->Host = 'smtp.gmail.com';
												/*$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
												$mail->Host = "mail.gmail.com";*/
								$mail->Port = 587; // or 587
								$mail->IsHTML(true);
	$mail->Username = "statedvapi2020@gmail.com";
		$mail->Password = "vandu@nita";
				$mail->SetFrom("statedvapi2020@gmail.com");
				$mail->Subject = "Forgot Password Details";
				$mail->Body = "<html>
		<body style='color:black;'>
				<br> Dear User <br> <br> You have requested to send the password for login.						So according to your requirement your Password is $pass. <br> 
							Kindly requsting to you to use this details for further login. <br> <br> 
							Thank you for Contacting us. <br> State Dairy Team.<br>
					</body>
				</html>";


				$mail->AddAddress($email_id);
				 if(!$mail->Send())
					{
					 echo "<script language='javascript'>alert('" . $mail->ErrorInfo . "');</script>";
					}
					else
			        {
					echo "<script language='javascript'>alert('Mail has been sent');</script>";
					echo "<script language='javascript'>window.location.href='index.php';</script>";
												}
					}
					else
					{
					echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
						}
						 }
					?>      
        




<section class="contact py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Contact Us </h3>
		<div class="address row">
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-map-marker"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Address</h6>
						<p> 2466H 5th Street Parking, King Block, Vapi City.

						</p>
					</div>
				</div>

			</div>
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-envelope"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Email</h6>
							<a href="mailto:information@example.com"> sdairyvapi21@gmail.com</a>
							
					</div>

				</div>
			</div>
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-phone"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Phone</h6>
						<p>+918140767335</p>
						<p>+919537607026</p>

					</div>
				</div>
			</div>
		</div>
		<div class="form row py-5">
			<div class="col-lg-6 contact-form">
				<form action="#" method="post">
					<div class="fields-grid">
						
						<div class="styled-input">
							<input type="email" name="email_id" required="">
							<label>Email ID</label>
							<span></span>
						</div>
						
					</div>
					<input type="submit" value="Submit" name="submit4">
				</form>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<div class="bg-img">
					<div class="contact-layer">
						<h3 class="mb-3">Dont hesitate to contact us for any kind of information</h3>
						<p><i class="fas mr-2 fa-mobile-alt"></i>+918140767335 </p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
						style="border:0"></iframe>
		</div>
	</div>
</section>	
<!-- //contact -->

<!-- footer -->	
<?php 
include("footer.php");

 ?>
<!-- footer -->



</body>
</html>
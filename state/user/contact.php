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

						<div class="styled-input agile-styled-input-top">
							<input type="text" name="First name" onKeyPress="return onlyAlphabets(event,this);" required=""> 
							<label>Full Name</label>
							<span></span>
						</div> 

						<div class="styled-input">
							<input type="email" name="Email"  required="">
							<label>Email Address</label>
							<span></span>
						</div>


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

						<div class="styled-input">
							<input type="tel" name="Phone" minlength="10" maxlength="10"  onkeypress="return IsNumeric(event);" ondrop="return false;"  onpaste="return false;"   required="">
							<label>Phone Number</label>
							<span></span>
						</div>

						<div class="styled-input mt-5">
							<textarea onKeyPress="return onlyAlphabets(event,this);" ></textarea>

							<label class="text" >Your Message</label>
							<span></span>
						</div>
					</div>

					<input type="submit" value="Submit">
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
			<iframe src="https://maps.google.com/maps?q=vapi%20gunjan%20chokdi&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
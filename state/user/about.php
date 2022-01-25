 <?php
include("header.php");

?>


 <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->



<!-- welcome -->
<section class="welcome py-5" id="welcome">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> we will plan every detail of your wedding </h3>
		<div class="row welcome-grids">
			<div class="col-lg-4 mb-lg-0 mb-5">
				<h4 class="left-heading">Our Weddings Story</h4>
				<p class="mb-3">Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictum lacinia, nisl est posuere nulla, nec eges tas leo mi id lorem. Maecenas sem nulla ex init dictu lacinia, Maecenas sem nulla. Sed gravida dignissim magna idesn en molestie</p>
				<div class="welcome-button mt-4">
					<a href="about.php">Read More</a>
				</div>
			</div>
			
			<div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
				<div class="image1 mb-4">
				<h4>Photo / Video </h4>
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
				</div>
				<div class="image1">
				<h4>Flowers & Music</h4>
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- welcome -->

<!-- about -->
<section class="about py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Who We Are</h3>
		<div class="row about-grids">
			<div class="col-lg-6">
				<h4>We are committed to service excellence and quality on wedding & events</h4>
				<p class="mb-3">Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictu lacinia, nislen est posuere nulla,
				nec egestas leo miid sed lorem. Maecenas sem nulla. Maecenas risus enim, pharetra accumsan nulla vitae, mollis hendrerit orci.
				Pellentesque nec purus eurts tortor molestie fringilla ut sit amet mauris. Maecenas mattis eleifend lacus non condimentum. Elit
				Donec fringilla nisi risus.</p>
				<p>Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictu lacinia, nislen est posuere nulla,
				nec egestas leo mid.</p>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<img src="images/who1.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- subscribe -->
<section class="subscribe text-center bg-light py-5">
	<div class="container p-sm-3">
		<h3 class="heading mb-2"> Subscribe Newsletter </h3>
		<p class="mb-5">Signup and recieve 15% on your First Plan.</p>
		<form action="#" method="post">
			<input class="form-control" type="email" placeholder="Your Email Address" name="Subscribe" required="">
			<button class="btn1">
				<span class="fa fa-paper-plane"></span>
			</button>
		</form>
	</div>
</section>
<!-- //subscribe -->
<?php
include("footer.php");

?>

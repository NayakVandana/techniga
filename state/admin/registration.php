<?php

include("config.php");
include ("sidebar.php");
include ("header.php");
 
if(isset($_POST['Submit']))
{
	 $name=$_POST['name'];
	 $email_id=$_POST['email_id'];
	 $Password=$_POST['Password'];

echo "tha data is $name<br>";
echo "tha data is $email_id<br>";
echo "tha data is $Password<br>";

}



?>
<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Today</h5>
							<h4>Sales</h4>
						</div>
						<div class="stats-right">
							<label> 45</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>Today</h5>
							<h4>Visitors</h4>
						</div>
						<div class="stats-right">
							<label> 80</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Today</h5>
							<h4>Orders</h4>
						</div>
						<div class="stats-right">
							<label>51</label>
						</div>
						

		<!--footer-->
		
        <!--//footer-->
	</div>
	<!-- Classie -->
		
</body>
</html>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Forms</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Basic Form :</h4>
						</div>
						<div class="form-body">
							<form  method="POST" enctype="multipart/form-data"> 

								<div class="form-group"> <label for="exampleInputEmail1">Name</label> <input type="text"  name="name" class="form-control" id="exampleInputEmail1" placeholder="Name"> </div> 

								<div class="form-group"> <label for="exampleInputPassword1">Email</label> <input type="email" name="email_id" class="form-control" id="exampleInputPassword1" placeholder="Email"> </div>

								<div class="form-group"> <label for="exampleInputPassword1">Password</label> <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="password"> </div>

							  <button type="submit" name="Submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>


<htm>
<body>
<form method="POST">
<table border="1">
	<tr>
		<td>
			Name
		</td>
		<td>
			<input type="text" name="name">
		</td>
	</tr>

	<tr>
		<td>
			Email ID
		</td>
		<td>
			<input type="text" name="email_id">
		</td>
	</tr>
	<tr>
		<td>
			Password
		</td>
		<td>
			<input type="Password" name="Password">
		</td>
	</tr>
	<tr>
		<td>
			Submit
		</td>
		<td>
			<input type="Submit" name="Submit">
		</td>
	</tr>
</table>
</form>
</body>
</html>

<?php
include ("footer.php");
?>
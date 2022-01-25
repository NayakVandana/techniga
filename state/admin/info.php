<?php
  include("config.php");
  $query1="select * from tbl_milkdistributor where status=0";
  $result1=mysqli_query($con,$query1);
  $count=mysqli_num_rows($result1);
  
  
  $query1="select * from tbl_product where status=0";
  $result1=mysqli_query($con,$query1);
  $count1=mysqli_num_rows($result1);
  
  
  $query1="select * from order_detail where status='pending'";
  $result1=mysqli_query($con,$query1);
  $count2=mysqli_num_rows($result1);
  
  
  
 
 
  ?> 
   
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		
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
							<h5>Total</h5>
							<h4>Dist.</h4>
						</div>
						<div class="stats-right">
							<label><?php echo $count;?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Product</h4>
						</div>
						<div class="stats-right">
							<label> <?php echo $count1;?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Today</h5>
							<h4>Orders</h4>
						</div>
						<div class="stats-right">
							<label><?php echo $count2;?></label>
						</div>
						

		<!--footer-->
		
        <!--//footer-->
	</div>
	<!-- Classie -->
		
</body>
</html>

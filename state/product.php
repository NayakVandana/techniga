<?php
include("header.php");
?>

    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

<!-- Recent Events -->
<section class="Recent Events py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Product</span> </h3>
		<div class="row course-grids">
			<?php    
	
	include("config.php");
					$sql = "select * from tbl_product where status=0";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($result))
			{
		$Path="product/".$row['logo'];
			?>	
			<div class="col-lg-4 col-md-6">
			
			
			
			
		
			
			
			
			
			
			
			
			
				<div class="card">
				
				  
				  
				  
				  
				  <?php echo "<img alt='Groovy Apparel' class='card-img-top' src='./admin/product/$row[4]'style='height:226px;width:348px;'>" ?>			
				  
				  
				  
				  <div class="card-body">
					<h5 class="card-title"><?php echo $row['pro_name'];?></h5>
					<h5 class="card-title">Rs.<?php echo $row['price'];?></h5>
					<p class="card-text mb-3">Description:<?php echo $row['description'];?></p>
					
					
					<p class="card-text mb-3">Packing:<?php echo $row['packing'];?></p>
					
					
					<a href="index.php"   onclick="alert('login first')"; class="my-cart-b item_add"
					
					style="outline: none;
    border: none;
    cursor: pointer;
    font-size: 15px;
    color: #fff;
    background: #dc3545;
    padding: 12px 40px;
    text-transform: capitalize;
    letter-spacing: 1px;
    display: inline-block;
}">Add to cart</a>	
				  </div>
				</div>
			</div>
			
			<?php
			}
			?>
			
			
			
			
		</div>
	</div>
</section>
<?php
include("footer.php");
?>
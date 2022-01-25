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
/*<script src="raty/jquery.raty.js" type="text/javascript"></script>

 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */


error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'state_dairy');


define('PROJECT_NAME', 'Product rating system with php, mysql, jquery and Ajax - www.thesoftwareguy.in');
$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
  $DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}



?>
     
    
  				 
    
    
    <?php
      $sql = "SELECT pro_id ,pro_name,logo,price,description,packing FROM tbl_product WHERE 1 and status=0 LIMIT 16";
      try {
        $stmt = $DB->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
      } catch (Exception $ex) {
        echo $ex->getMessage();
      }

      // fetching ratings for specific product
       

      for ($i = 0; $i < count($products); $i++) {

        try {
          $stmt->bindValue(":pro_id", $products[$i]["pro_id"]);
		  
          $stmt->execute();
		  
         
		  
        } catch (Exception $ex) {
          // you can turn it off in production mode.
          echo $ex->getMessage();
        }
        ?>
			
                    
			<div class="col-lg-4 col-md-6">
			
			
			
			
		
			
			
			
			
			
			
			
			
				<div class="card">
				
				  
				  
				  
				  
				  
				  
	<img class='card-img-top' alt='' src='../admin/product/<?php echo $products[$i]['logo'];?>' style='height:226px;;width:348px;'</p> 							  
				  
				  <div class="card-body">
					<h5 class="card-title"><?php echo $products[$i]['pro_name'];?></h5>
					<h5 class="card-title">Rs.<?php echo $products[$i]['price'];?></h5>
					<p class="card-text mb-3">Description:<?php echo $products[$i]['description'];?></p>
					
					
					<p class="card-text mb-3">Packing:<?php echo $products[$i]['packing'];?></p>
					
					
					<a href="cartAction.php?action=addToCart&pro_id=<?php echo $products[$i]["pro_id"]; ?>" class="my-cart-b item_add"
					
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
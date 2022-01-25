

<?php
include("header.php");
?>

<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Success -</title>
    <meta charset="utf-8">
    
</head>
</head>
<body>
<div class="container">
    <h1 style="color:#F60;">Order Status</h1>
    <p style="margin-top:20px;">Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
    <h4 style="margin-left:28px; margin-top:20px; ">select your payment option</h4>

</div>
</body>
</html>



<?php
include("config.php");
global $id,$name,$price;


$sql="select pl.pro_name,lgn.* from order_detail lgn INNER JOIN tbl_product pl ON pl.pro_id=lgn.pro_id where lgn.email_id='$email_id'";

	
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$id=$row['order_id'];
	$name=$row['pro_name'];	
	$price=$row['total_price'];
}

?>



<div id="demo" >
<html>

<form method="POST" action="paytm.php">
<input type="image" name="submit" border="0" style="margin-left:43%;margin-top:10px;heigth:60px;width:134px;"
  src="images/paytm.png" 
  >

</form>
</html></div>




<br><br>


<a href="payment.php?id=<?php echo $id;?>" value="Pay now"><img src="images/payment.png" style="height:50px; width:200px;margin-left: 41%;
    margin-top: -8%;
}" /></a>


<!--<a  href="payment1.php" class="my-cart-b item_add" >Cash on delivery</a>
</form>-->
<br><br>







<?php
include("footer.php");
?>


























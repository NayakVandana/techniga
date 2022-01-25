<?php

include("header.php");
include("config.php");

?>





<?php
global $fees_perhrs,$email_id,$tutor_name;
include("config.php");

$sql="select * from order_detail";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	
	
	$total_price=$row['total_price'];
	$pro_id=$row['pro_id'];

}

?>



<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<h3> <center>Payment Details</center></h3>
	<pre>
	</pre>
	<form method="post" action="PaytmKit/pgRedirect.php">
		<center><table border="1" >
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>Order id:*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" style="width:329px;">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>Cust Id:*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="50" size="12"
					name="CUST_ID" autocomplete="off" value="<?php echo $user;?>" style="width:329px;"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>industry type id:*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
					name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" style="width:329px;"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel:*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" style="width:329px;">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Total Price:*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $total_price;?>" style="width:329px;">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table></center>
	
	</form>
</body>
</html>


<?php

include("footer.php");

?>

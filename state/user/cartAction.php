<?php
include("header.php");
?>


<?php
// initialize shopping cart class
include 'Cart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['pro_id'])){
        $pro_id = $_REQUEST['pro_id'];
        // get product details
        $query = $db->query("SELECT * FROM tbl_product WHERE pro_id = ".$pro_id);
        $row = $query->fetch_assoc();
        $itemData = array(
            'pro_id' => $row['pro_id'],
            'pro_name' => $row['pro_name'],
			'logo' => $row['logo'],
            'price' => $row['price'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['pro_id'])){
        $itemData = array(
            'rowid' => $_REQUEST['pro_id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['pro_id'])){
        $deleteItem = $cart->remove($_REQUEST['pro_id']);
        header("Location: viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['user'])){
		
		global $email_id;
		
		$sql1 = "select * from tbl_milkdistributor where email_id = '$user' and status=0";
													$result1 = mysqli_query($con,$sql1);
						while($row = mysqli_fetch_array($result1))
													{
						$email_id = $row['email_id'];
													}
		
		
		
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orders (email_id, total_price, created, modified) VALUES ('".$email_id."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO order_detail(order_id,email_id,pro_id,total_price,quantity,date,status) VALUES ('".$orderID."','".$email_id."', '".$item['pro_id']."','".$cart->total()."', '".$item['qty']."',NOW(),'pending');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
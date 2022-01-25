
<?php
include("header.php");
?>
<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>

    <script>
    function updateCartItem(obj,pro_id){
        $.get("cartAction.php", {action:"updateCartItem", pro_id:pro_id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }
        });
    }
    </script>
</head>
</head>
<body>
<div class="container">
    <h1 style="margin-left:493px; margin-top:10px;color:#F60; font-family:Georgia, 'Times New Roman', Times, serif;"> Product Cart </h1>
    <table class="table" style="margin-top:47px; margin-left:47px;">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>image</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["pro_name"]; ?></td>
            
            <td> <img src='../admin/product/<?php echo $item['logo'];?>' style='height:55px;;width:55px;'</td>
            <td><?php echo 'Rs.'.$item["price"].' '; ?></td>
            <td><input style="max-width:80;" type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onChange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo 'Rs.'.$item["subtotal"].' '; ?></td>
            <td>
                <!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
                <a href="cartAction.php?action=removeCartItem&pro_id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onClick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash">Delete</i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
        
        
        
        
        
        
        
            <td><a  href="index.php" class="my-cart-b item_add">Continue Shopping</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo 'Rs.'.$cart->total().' '; ?></strong></td>
            <td><a  href="checkout.php" class="my-cart-b item_add">Checkout</a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
<?php
include("footer.php");
?>
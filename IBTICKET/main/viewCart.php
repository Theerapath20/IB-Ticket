<?php
// Include the configuration file
require_once 'dbConnect.php';


// Initialize shopping cart class
include_once 'Cart.class.php';
$cart = new Cart;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>View Cart</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<!-- Custom style -->
<link href="css/style.css" rel="stylesheet">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<?php 
    require_once("navbar.php");
  ?>
<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('ต้องการเพิ่มจำนวนสินค้าใช่หรือไม่');
        }
    });
}
</script>
</head>
<body>
<div class="container">
    <h1>SHOPPING CART</h1>
	<div class="row">
		<div class="cart">
			<div class="col-12">
				<div class="table-responsive">
					<table class="table table-striped cart">
						<thead>
							<tr>
                                <th width="10%"></th>
								<th width="35%">Product</th>
								<th width="15%">Price</th>
								<th width="15%">Quantity</th>
								<th width="20%">Total</th>
								<th width="5%"> </th>
							</tr>
						</thead>
						<tbody>
                        <?php
                        if($cart->total_items() > 0){
                            // Get cart items from session
                            $cartItems = $cart->contents();
                            foreach($cartItems as $item){
                                $proImg = !empty($item["image"])?'images/products/'.$item["image"]:'images/demo-img.png';
                        ?>
							<tr>
                                <td><img src="<?php echo $proImg; ?>" alt="..."></td>
								<td><?php echo $item["name"]; ?></td>
								<td><?php echo CURRENCY_SYMBOL.$item["price"].' '.CURRENCY; ?></td>
								<td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
								<td><?php echo CURRENCY_SYMBOL.$item["subtotal"].' '.CURRENCY; ?></td>
								<td><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to remove cart item?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;" title="Remove Item"><i class="itrash"></i> </button> </td>
							</tr>
						<?php } }else{ ?>
							<tr><td colspan="6"><p>Your cart is empty.....</p></td>
						<?php } ?>
						<?php if($cart->total_items() > 0){ ?>
							<tr>
                                <td></td>
								<td></td>
								<td></td>
								<td><strong>Cart Total</strong></td>
								<td><strong><?php echo $cart->total().' '; ?></strong></td>
								<td></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col mb-2">
				<div class="row">
					<div class="col-sm-12  col-md-6">
						<a href="index.php" class="btn btn-block btn-secondary"><i class="ialeft"></i>Continue Shopping</a>
					</div>
					<div class="col-sm-12 col-md-6 text-right">
						<?php if($cart->total_items() > 0){ ?>
						<a href="checkout.php" class="btn btn-block btn-primary">Proceed to Checkout<i class="iaright"></i></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
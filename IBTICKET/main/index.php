<?php
// Include the database connection file
require_once 'dbConnect.php';

require_once 'configlogin.php';
// Initialize shopping cart class
include_once 'Cart.class.php';
$cart = new Cart;

// Fetch products from the database
$sqlQ = "SELECT * FROM products";
$stmt = $db->prepare($sqlQ);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>IBTICKET Shopping Cart</title>
<!---->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />




        <?php
        require_once 'navbar.php';
        ?>
     
     
      <style>
        .linkdetail{
          
          bottom:5px;
        }
      </style>
     
     



      
    
<!---->

<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
<link href="css/style.css" rel="stylesheet">

</head>









<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=" images\products\1.jpg" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\products\br1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=" images\products\br4.jpg" class="d-block w-100  " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="container">
    <h1>PRODUCTS</h1>
	
	<!-- Cart basket -->
	<div class="cart-view">
		<a href="viewCart.php" title="View Cart"><i class="icart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':0; ?>)</a>
	</div>
    
	<!-- Product list -->
    <div class="row col-lg-12">
    <?php
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $proImg = !empty($row["image"])?'images/products/'.$row["image"]:'images/demo-img.png';
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $proImg; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo CURRENCY_SYMBOL.$row["price"].' '.CURRENCY; ?></h6>
                <p class="card-text"><?php echo $row["description"]; ?></p>
                
                <div class="linkdetail">
                <a href="<?php echo $row["link"];?>"><i class="fa-solid fa-magnifying-glass"></i>
                รายละเอียด<br></a>
                <!--<a herf="<?php #echo $row["link"];?>"> ข้อมูลเพิ่มเติม<br>     </a>-->
                <!--<a href="#<?php #echo $row["id"]; ?>=<?php #echo $row["id"]; ?>" class="btn btn-primary">details</a>-->
                <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary">Add to Cart</a><!--ตรงนี้คือปุ่มที่เราต้องแก้้    ให้มันลิ้งไปรายละเอียดก่อน แล้วค่อยกลับไปที่-->

                </div>
                
            </div>
        </div>
    <?php } }else{ ?>
        <p>Product(s) not found.....</p>
    <?php } ?>
    </div>
</div>
</body>


<?php
require_once 'footer.php'; 
?>
  
</html>

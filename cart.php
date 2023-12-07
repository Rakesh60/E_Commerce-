<?php
include 'admin_area\includes\connect.php';
include 'funcions\common_function.php';
session_start();

 $profilename = $_SESSION['profilename'];

 if($profilename!=''){
	 
	 }
	 else{
		 echo "<script>alert('Please Login First To Buy products'),window.location.href='http://localhost/ecommerce/logout.php'</script>";
	 }
  ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>NativeArt Ecommerce</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/cartstyle.css">
	<link rel="stylesheet" href="css/cartdemo.css">
  
  </head>
  <body>
 <header class="intro">
 <h1>Native_Art Shopping Cart</h1>


 <div class="action">

 <a href="productpage.php" class="btn back">Back to Product Page</a>
 </div>
 </header>
  
      
 <main>
     


	<div class="container">

		<section id="cart"> 
		<?php
		if(isset($_GET['pid'])){
			$product=$_GET['pid'];
		
		$select_query = "SELECT * FROM `products` WHERE product_id=$product";
		$result_query = mysqli_query($conn, $select_query);
	}
		while ($row = mysqli_fetch_assoc($result_query)) {
			$product_id = $row['product_id'];
			$product_title = $row['product_title'];
			$description = $row['product_description'];
			$product_image1 = $row['product_image1'];
			$product_price = $row['product_price'];
			$category_id = $row['category_id'];
			$state_id = $row['state_id'];
			$mrp=rand(10,99)+$product_price;
		
			
			echo"<article class='product'>
			<header>
				<a class='remove'>
					<img src='./admin_area/product_images/$product_image1' alt='Gamming Mouse'>
		
					<h3>Remove product</h3>
				</a>
			</header>
		
			<div class='content'>
		
				<h1>$product_title</h1>
		
				<p>$description</p>
		
				<div title='You have selected this product to be shipped in the color yellow.' style='top: 0' class='color yellow'></div>
				<div style='top: 43px' class='type small'></div>
			</div>
		
			<footer class='content'>
				<span class='qt-minus'>-</span>
				<span class='qt'>1</span>
				<span class='qt-plus'>+</span>
		
				<h2 class='full-price'>
				$product_price
				</h2>
					
				<h2 class='price'>
				$mrp
				</h2>
			</footer>
		</article>";
		
		}
		
		





			
			?>
			
		</section>

	</div>

	<footer id="site-footer">
		<div class="container clearfix">

			<div class="left">
				<h2 class="subtotal">Subtotal: <span><?php echo $product_price?></span>RS</h2>
				<h3 class="tax">Taxes (5%): <span>8.2</span>RS</h3>
				<h3 class="shipping">Shipping: <span>5.00</span>RS</h3>
			</div>

			<div class="right">
				<h1 class="total">Total: <span><?php echo"$product_price";?></span>RS</h1>
				<a href="#" class="" id="check">Checkout</a>
			</div>

		</div>
	</footer>
 </main>
 
      
  <footer class="credit">HINDICODERS <a title="Awesome web design code & scripts" href="https://www.codehim.com?source=demo-page" target="_blank">HINDICODERS </a></footer>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="./js/script.js"></script> 
      
  </body>
</html>
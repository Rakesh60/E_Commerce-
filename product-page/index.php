<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
  <!-- CSS -->
  <link href="style.css" rel="stylesheet">
  <meta name="robots" content="noindex,follow" />

</head>

<body>

  <?php 
  include('../admin_area/includes/connect.php');
  $select_query = "SELECT * FROM `products`";
  $result_query = mysqli_query($conn, $select_query);

  while ($row = mysqli_fetch_assoc($result_query)) {
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $description = $row['product_description'];
  $product_image1 = $row['product_image1'];
  $product_image2 = $row['product_image2'];
  $product_image3 = $row['product_image3'];
  $product_price = $row['product_price'];
  $category_id = $row['category_id'];
  $state_id = $row['state_id'];
  $mrp=rand(10,99)+$product_price;
  echo $product_id;
  echo $product_title;
  echo print_r($row);
  echo"<main class='container'>

  <!-- Left Column / Headphones Image -->
  <div  class='left-column'>
    
    <img data-image='black'class='active' src='../admin_area/product_images/$product_image1' alt=''>
    <img data-image='blue' src='../admin_area/product_images/$product_image2' alt=''>
    <img data-image='red'  src='../admin_area/product_images/$product_image3' alt=''>
  </div>


  <!-- Right Column -->
  <div class='right-column'>

    <!-- Product Description -->
    <div class='product-description'>
      <span>Headphones</span>
      <h1>$product_title</h1>
      <p>$description</p>
    </div>

    <!-- Product Configuration -->
    <div class='product-configuration'>

      <!-- Product Color -->
      <div class='product-color'>
        <span>Color</span>

        <div class='color-choose'>
          <div>
            <input data-image='red' type='radio' id='red' name='color' value='red' checked>
            <label for='red'><span></span></label>
          </div>
          <div>
            <input data-image='blue' type='radio' id='blue' name='color' value='blue'>
            <label for='blue'><span></span></label>
          </div>
          <div>
            <input data-image='black' type='radio' id='black' name='color' value='black'>
            <label for='black'><span></span></label>
          </div>
        </div>

      </div>

      <!-- Cable Configuration -->
      <div class='cable-config'>
        <span>Cable configuration</span>

        <div class='cable-choose'>
          <button>Straight</button>
          <button>Coiled</button>
          <button>Long-coiled</button>
        </div>

        <a href='#'>How to configurate your headphones</a>
      </div>
    </div>

    <!-- Product Pricing -->
    <div class='product-price'>
      <span>$product_price</span>
      <a href='#' class='cart-btn'>Add to cart</a>
    </div>
  </div>
</main>";
  }

  ?>



  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
  <script src="script.js" charset="utf-8"></script>
</body>

</html>
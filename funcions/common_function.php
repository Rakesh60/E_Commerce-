<?php
// including connect file
include './admin_area/includes/connect.php';

//Getting products

function getproducts()
{

    global $conn;
//Condition To Check Isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['state'])) {

            $select_query = "SELECT * FROM `products` ORDER BY rand() ";
            $result_query = mysqli_query($conn, $select_query);

            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $state_id = $row['state_id'];
                echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2 d-flex '>
    <div class='card'>

        <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body d-flex flex-column justify-content-end '>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$description </p>

           <div class='d-grid gap-2 d-md-block '>
           <a href='cart.php?pid=$product_id' class='btn  btn-primary'>Buy now</a>
           <a href='#' class=' btn  btn-primary'>Add to<i class='bi bi-cart3'></i></a>
           <a href='product_details.php?product_id=$product_id' class='ms-1 text-center'><i class='bi bi-eye'></i></a>





           </div>

        </div>

    </div>

</div>";

            }

        }
    }
}
//GETTING unique categories
function get_unique_category()
{

    global $conn;
//Condition To Check Isset or not
    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];

        $select_query = "SELECT * FROM `products` WHERE category_id=$category_id";
        $result_query = mysqli_query($conn, $select_query);
        $num_rows = mysqli_num_rows($result_query);
        if ($num_rows == 0) {
            echo "<h2 class='text-center text-warning'>Stock Not Available for this category</h1><p class='text-center'>We will get the stocks soon</p>
            <div class='alert alert-primary' role='alert'>
            Click this link t browse other item <a href='productpage.php?' class='alert-link'>
            NAtiveart.com
          </div> ";
        }

// $row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $state_id = $row['state_id'];
            echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2 d-flex '>
    <div class='card'>
        <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body d-flex flex-column justify-content-end bg-light bg-gradient'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$description </p>

           <div class='d-grid gap-2 d-md-block '>
           <a href='cart.php?pid=$product_id' class='btn  btn-primary'>Buy now</a>
           <a href='#' class='btn  btn-primary'>Add to Cart <i class=''></i> </a>
           </div>

        </div>
    </div>

</div>";

        }

    }
}

//GETTING UNique_state
//GETTING unique categories
function get_unique_state()
{

    global $conn;
//Condition To Check Isset or not
    if (isset($_GET['state'])) {
        $state_id = $_GET['state'];

        $select_query = "SELECT * FROM `products` WHERE state_id=$state_id";
        $result_query = mysqli_query($conn, $select_query);
        $num_rows = mysqli_num_rows($result_query);
        if ($num_rows == 0) {
            echo "<h2 class='text-center text-warning'>Stock Not Available for this State</h1><p class='text-center'>We will get the stocks soon</p>
            <div class='alert alert-primary' role='alert'>
            Click this link t browse other item <a href='productpage.php?' class='alert-link'>
            NAtiveart.com
          </div> ";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $state_id = $row['state_id'];
            echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2 d-flex '>
    <div class='card'>
        <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body d-flex flex-column justify-content-end bg-light bg-gradient'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$description </p>

           <div class='d-grid gap-2 d-md-block '>
           <a href='cart.php?pid=$product_id' class='btn  btn-primary'>Buy now</a>
           <a href='#' class='btn  btn-primary'>Add to Cart <i class=''></i> </a>
           </div>

        </div>
    </div>

</div>";

        }

    }
}

//DISPLAYING state
function getstate()
{
    global $conn;
    $select_state = "SELECT *FROM `state`";
    $result_state = mysqli_query($conn, $select_state);
// $row_data=mysqli_fetch_assoc($result_state);
// echo $row_data['state_title'];
    while ($row_data = mysqli_fetch_assoc($result_state)) {
        $state_title = $row_data['state_title'];
        $state_id = $row_data['state_id'];
        echo "<li class='nav-item bg-light'>
    <a href='productpage.php?state=$state_id' class=' nav-link text-primary'>
        <h4>$state_title</h4>
    </a>
</li>";

    }
}

//DISPLAY CATEGORY
function getcategory()
{
    global $conn;
    $select_category = "SELECT *FROM `categories`";
    $result_category = mysqli_query($conn, $select_category);
// $row_data=mysqli_fetch_assoc($result_category);
// echo $row_data['category_title'];
    while ($row_data = mysqli_fetch_assoc($result_category)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='nav-item bg-light'>
    <a href='productpage.php?category=$category_id' class=' nav-link text-primary'>
        <h4>$category_title</h4>
    </a>
</li>";

    }
}

//DROPDOWN CATEGORY

function getdropdowncategory()
{
    global $conn;
    $select_category = "SELECT *FROM `categories` ORDER BY category_title";
    $result_category = mysqli_query($conn, $select_category);
    // $row_data=mysqli_fetch_assoc($result_category);
    // echo $row_data['category_title'];
    while ($row_data = mysqli_fetch_assoc($result_category)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='bg-primary' ><a class='dropdown-item' href='productpage.php?category=$category_id'>
                                    $category_title
                                </a>
                            </li>";

    }
}

function getdropdownindex()
{
    global $conn;
    $select_category = "SELECT *FROM `categories` ORDER BY category_title";
    $result_category = mysqli_query($conn, $select_category);
    // $row_data=mysqli_fetch_assoc($result_category);
    // echo $row_data['category_title'];
    while ($row_data = mysqli_fetch_assoc($result_category)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='bg-primary' ><a class='dropdown-item' href='Final\login.php'>
                                    $category_title
                                </a>
                            </li>";

    }
}

//GET SEARCH BOX DATA ============+++++++++++

function search_product()
{
    global $conn;
    if (isset($_GET['search_data_products'])) {
        $search_data_value = $_GET['search_data'];
        global $username;

        $search_query = "SELECT * FROM `products` WHERE product_keyword LIKE '%$search_data_value%'";
        $result_query = mysqli_query($conn, $search_query);
        $num_rows = mysqli_num_rows($result_query);
        if ($num_rows == 0) {
            echo "<h2 class='text-center text-warning'>Search not matched </h1><p class='text-center'>Working On Better Search Result </p>
            <div class='alert alert-primary' role='alert'>
            Click this link to browse other item <a href='productpage.php?' class='alert-link'>
            NAtiveart.com
          </div> ";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $state_id = $row['state_id'];
            echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2 d-flex '>
        <div class='card'>
            <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
            <div class='card-body d-flex flex-column justify-content-end bg-light bg-gradient'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$description </p>

               <div class='d-grid gap-2 d-md-block '>
               <a href='#' class='btn  btn-primary'>Buy now</a>
               <a href='#' class='btn  btn-primary'>Add to Cart <i class=''></i> </a>
               </div>

            </div>
        </div>

    </div>";

        }
    }
}

function productsList()
{

    global $conn;
//Condition To Check Isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['state'])) {

            $select_query = "SELECT * FROM `products`  LIMIT 12 ";
            $result_query = mysqli_query($conn, $select_query);

            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $state_id = $row['state_id'];
                $texts = ['sale', 'new', 'out of stock', 'offer'];
                $randomText = $texts[array_rand($texts)];
                echo "<div class='col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3'>
                <div class='product'> 

                <img class='rounded' src='./admin_area/product_images/$product_image1'class='card-img-top' alt='...'>

                <ul class=' d-flex align-items-center justify-content-center list-unstyled icons'>
                    <li class='icon'><span class='fas fa-expand-arrows-alt'></span></li>
                    <li class='icon mx-3'><span class='far fa-heart'></span></li>
                    <li class='icon'><span class='fas fa-shopping-bag'></span></li>
                    </ul>
                </div>
                <div class='tag bg-warning'>$randomText</div>
                <div class='title pt-4 pb-1'>$product_title</div>
                <div class='d-flex align-content-center justify-content-center'> <span class='fas fa-star'></span>
                    <span class='fas fa-star'></span> <span class='fas fa-star'></span> <span class='fas fa-star'></span> <span
                        class='fas fa-star'></span>
                </div>
                <div class='price'>&#8377; $product_price</div>
            </div>";

            }

        }
    }
}


// trendingList
function trendingList()
{

    global $conn;
//Condition To Check Isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['state'])) {

            $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 12 ";
            $result_query = mysqli_query($conn, $select_query);

            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $state_id = $row['state_id'];
                $mrp=rand(10,99)+$product_price;
                $rating=rand(2,5);
                // $catSql="SELECT * FROM categories Where category_id=$category_id";
                // $resultcat=mysqli_query($conn,$catSql);
                // while($catrow=mysqli_fetch_assoc($resultcat)){
                //      $specialcat=$catrow['category_title'];
                //     //var_dump($catrow);
                // }
                echo "<div class='row p-2 bg-white border rounded mt-2'>
                <div class='col-md-3 mt-1'><img class='img-fluid img-responsive rounded product-image'
                        src='./admin_area/product_images/$product_image1'></div>
                <div class='col-md-6 mt-1'>
                    <h5>$product_title</h5>
                    <div class='d-flex flex-row'>
                        <div class='ratings mr-2'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i
                                class='fa fa-star'></i></div><span>$rating</span>
                    </div>
                    <div class='mt-1 mb-1 spec-1'><span>Special Discount</span></div>
                    <div class='mt-1 mb-1 spec-1'><span> Product</span><span class='dot'></span><span> For
                            $product_title</span><span class='dot'></span><span>Casual<br></span></div>
                    <p class='text-justify text-truncate para mb-0'>$description<br><br>
                    </p>
                </div>
                <div class='align-items-center align-content-center col-md-3 border-left mt-1'>
                    <div class='d-flex flex-row align-items-center'>
                        <h4 class='mr-1'>&#8377;$product_price</h4><span class='strike-text'><s> &#8377;$mrp </s></span>
                    </div>
                    <h6 class='text-success'>Free shipping</h6>
                    
                         <div class='d-flex flex-column mt-4'><button class='btn btn-primary btn-sm'
                            type='button'>Details</button>
                            <a class='btn btn-outline-primary btn-sm mt-2' type='button' href='cart.php?pid=$product_id'>Buy Now</a>
                            </div>
                           
                </div>
            </div>";

            }

        }
    }
}

#footer
function footer(){
    echo" <footer>
    <!-- place footer here -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css'
        integrity='sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=' crossorigin='anonymous' />
    <footer class='bg-dark-gradient footer'>
        <div class='footer-top'>
            <div class='container'>
                <div class='footer-border-bottom pb-6 mb-5'>
                    <div class='row'>
                        <div class='col-lg-4 col-xl-3'>
                            <h4 class='text-white'>
                                Sign up to Get Latest Updates
                            </h4>
                        </div>
                        <div class='col-lg-4 col-xl-6'>
                            <form class='d-flex flex-row mb-2 p-1 bg-white input-group' >
                                <input name='semail' type='email' class='form-control rounded-0 border-0'
                                    placeholder='you@yoursite.com'>
                                <button class='btn btn-secondary rounded-0 flex-shrink-0'
                                   name='subscribe' type='submit'>Subscribe</button>
                            </form>
                           
                        </div>
                        <div class='col-lg-4 col-xl-3'>
                            <div class='text-lg-end text-white'>
                                <span class='h6'>Call Us On</span><br>
                                <span class='h3'>+91 6202442454</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6 col-lg-3 my-4'>
                    <h5 class='text-white h6 mb-4'>Social Media</h5>
                        
                        <div class='text-white mb-4'>We are measuring the results of our social media campaigns to optimize our efforts.</div>
                        <div class='nav footer-socila-icon'>
                            <a href='#'>
                                <i class='fab fa-facebook-f'></i>
                            </a>
                            <a href='#'>
                                <i class='fab fa-twitter'></i>
                            </a>
                            <a href='#'>
                                <i class='fab fa-instagram'></i>
                            </a>
                            <a href='#'>
                                <i class='fab fa-linkedin-in'></i>
                            </a>
                        </div>
                    </div>
                    <div class='col-sm-6 col-lg-2 my-4'>
                        <h5 class='text-white h6 mb-4'>Customer</h5>
                        <ul class='list-unstyled white-link footer-links'>
                            <li>
                                <a href='#'>Get Corpo</a>
                            </li>
                            <li>
                                <a href='#'>Documentation</a>
                            </li>
                            <li>
                                <a href='#'>Help center</a>
                            </li>
                            <li>
                                <a href='#'>Pricing</a>
                            </li>
                            <li>
                                <a href='contactus\contactus.php'>Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class='col-sm-6 col-lg-2 my-4'>
                        <h5 class='text-white h6 mb-4'>Join Us</h5>
                        <ul class='list-unstyled white-link footer-links'>
                            <li>
                                <a href='#'>Portfolio</a>
                            </li>
                            <li>
                                <a href='#'>Blog</a>
                            </li>
                            <li>
                                <a href='#'>Join our team</a>
                            </li>
                            <li>
                                <a href='#'>Elements</a>
                            </li>
                            <li>
                                <a href='#'>Products</a>
                            </li>
                        </ul>
                    </div>
                    <div class='col-sm-6 col-lg-2 my-4'>
                        <h5 class='text-white h6 mb-4'>Our Policies</h5>
                        <ul class='list-unstyled white-link footer-links'>
                            <li>
                                <a href='#'>About</a>
                            </li>
                            <li>
                                <a href='#'>Careers</a>
                            </li>
                            <li>
                                <a href='#'>Legal &amp; Security</a>
                            </li>
                            <li>
                                <a href='#'>Terms of use</a>
                            </li>
                            <li>
                                <a href='#'>We're hiring!</a>
                            </li>
                        </ul>
                    </div>
                    <div class='col-sm-6 col-lg-3 my-4'>
                        <h5 class='text-white h6 mb-4'>Company by</h5>
                        <div class='white-link'>
                            <div class='d-flex pb-3'>
                                <!-- <div class='avatar avatar-lg rounded'>
                                    <img class='rounded-circle'
                                        src='https://bootdey.com/img/Content/avatar/avatar1.png' title=' alt='>
                                </div> -->
                                <div class='col ps-3'>

                                    <h6 class='font-w-500 h6 m-0'><a class='text-white' href='#'>Rajkumar
                                            Behera</a></h6>
                                </div>
                            </div>
                            <div class='d-flex'>
                                <!-- <div class='avatar avatar-lg rounded'>
                                    <img class='rounded-circle'
                                        src='https://bootdey.com/img/Content/avatar/avatar2.png' title=' alt='>
                                </div> -->
                                <div class='col ps-3'>

                                    <h6 class='font-w-500 h6 m-0'><a class='text-white' href='#'>Rajeev Kumar</a>
                                    </h6>
                                </div>
                            </div>
                            <div class='d-flex pb-3'>
                                <!-- <div class='avatar avatar-lg rounded'>
                                    <img class='rounded-circle'
                                        src='https://bootdey.com/img/Content/avatar/avatar1.png' title=' alt='>
                                </div> -->
                              
                            </div>
                            <div class='d-flex pb-3'>
                                <!-- <div class='avatar avatar-lg rounded'>
                                    <img class='rounded-circle'
                                        src='https://bootdey.com/img/Content/avatar/avatar1.png' title=' alt='>
                                </div> -->
                                <div class='col ps-3'>
                                    <h6 class='font-w-500 h6 m-0'><a class='text-white' href='#'>Sumit Singh</a></h6>
                                </div>
                            </div>

                            <div class='d-flex pb-3'>
                                <!-- <div class='avatar avatar-lg rounded'>
                                    <img class='rounded-circle'
                                        src='https://bootdey.com/img/Content/avatar/avatar1.png' title=' alt='>
                                </div> -->
                                <div class='col ps-3'>
                                    <h6 class='font-w-500 h6 m-0'><a class='text-white' href='#'>Rakesh Kumar
                                            Gupta</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='footer-bottom footer-border-top light py-3'>
            <div class='container text-center text-white'>
                <p class='m-0'> Copyright © 2023 All Right Reserved By <a href='#' class='text-reset'>Native_Art</a>
                </p>
            </div>
        </div>
    </footer>
</footer>";
}
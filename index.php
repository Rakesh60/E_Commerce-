<?php
include 'admin_area\includes\connect.php';
include 'funcions\common_function.php';

// require './Final/PHPMailer/src/Exception.php';
// require './Final/PHPMailer/src/PHPMailer.php';
// require './Final/PHPMailer/src/SMTP.php';
// use PHPMailer\PHPMailer\PHPMailer;
?>
<!doctype html>
<html lang="en">

<head>
    <title>NATIVE_ART</title>
    <link rel="icon" href="./indeximages/titleicon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- My OWN CSS -->
    <link rel="stylesheet" href="./FrontPageStyle/style.css">
    <link rel="stylesheet" href="./FrontPageStyle/footer.css">
    <link rel="stylesheet" href="./rajstyle.css">
    <link rel="stylesheet" href="./responsive.css">

    <!-- FONT AWSOME LINK -->
    <script src="https://kit.fontawesome.com/ef36600fd6.js" crossorigin="anonymous"></script>






    <!-- Google Fonts apis -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,800;1,100;1,200&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- HEADER -->
    <!-- HEADER -->
    <header class="fixed-top">
        <!-- TOP NAV -->

        <!-- TOP NAV -->

        <div class="home-section ">
            <!-- NAV BAR -->
            <nav class="navbar  navbar-expand-lg" id="navbar">
                <div class="container-fluid">
                    <a class="navbar-" href="#" id="nlogo"><img src="" alt=""> NATIVE_ART</a>
                    <!-- navbar-toggler  add this class in button-->
                    <button class="navbar-toggler btn btn-outline-info" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span> <i class="fa-solid fa-bars" style="color:rgb(255, 255, 255)"></i> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home <i
                                        class="fa fa-house"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#products">Products</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown"
                                    style="background-color: #5959ff" ;>
                                    <?php getdropdownindex();?>
                                </ul>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Contact Us <i
                                        class="fa-solid fa-phone"></i></a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#" tabindex="-1">Orders <i class="fa-solid fa-bell"></i></a>
                            </li>
                        </ul>

                        <form id="formbox" class="d-flex me-5" action="Final\login.php" method="get">
                            <input id="search-box" name="search_data" class="form-control me-2" type="search"
                                placeholder="Search" aria-label="Search">
                            <button name="search_data_products" type="submit" value="search" class="search-butt">

                                <i class=" fa-solid fa-magnifying-glass" id="search-icon" class="search-butt"></i>
                            </button>
                            <!-- <input type="submit" class="btn btn-danger" value="search" name="search_data_products"> -->
                        </form>
                        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                            <li class="nav-item"><a href="./Final/login.php" class="nav-link"><button class="btn btn-sm
                                        btn-light">Login <i class="fa-solid fa-user"></i></button></a></li>
                            <li class="nav-item"><a class="nav-link" href="">Cart <span><i
                                            class="fa-solid fa-cart-shopping"></i></span></a>


                            </li>

                        </ul>


                    </div>
                </div>
            </nav>

            <!-- NAV BAR END-->
        </div>
    </header>
    <!-- main -->

    <main class="mt-5">
        <!-- RAJKUMAR ADD HERE -->
        <section id="home" class="home overflow-hidden ">
            <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="home-banner home-banner-1">
                            <div class="home-banner-text">
                                <h1>Product</h1>
                                <h2>32% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-light text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-2">
                            <div class="home-banner-text">
                                <h1>Product</h1>
                                <h2>42% Discount For This Season</h2>
                                <a href="#" class="btn  btn-outline-light text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-3">
                            <div class="home-banner-text">
                                <h1>Product</h1>
                                <h2>52% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-light text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-4">
                            <div class="home-banner-text">
                                <h1>Product</h1>
                                <h2>52% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-light text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-5">
                            <div class="home-banner-text">
                                <h1>Product</h1>
                                <h2>52% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-light text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-6">
                            <div class="home-banner-text">
                                <h1>Product</h1>
                                <h2>52% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-light text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <span class="ti-angel-left slider-icon">

                        </span>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <span class="ti-angel-right slider-icon">
                        </span>
                        <span class="visually-hidden">Next</span>
                </button>
            </div>



        </section>


        <section id="counter">

            <section class="counter mt-4">
                <div class="container">
                    <div class="row text-center">
                        <h2>Our Sales </h2>
                        <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
                            <h2>
                                <span id="count1"></span>+
                            </h2>
                            <p>Orders</p>
                        </div>
                        <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
                            <h2>
                                <span id="count2"></span>+
                            </h2>
                            <p>Products</p>
                        </div>
                        <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
                            <h2>
                                <span id="count3"></span>+
                            </h2>
                            <p>Delivered</p>
                        </div>
                        <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
                            <h2>
                                <span id="count4"></span>K+
                            </h2>
                            <p>Customers</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="book-food">
            <div class="book-food mt-4">
                <div class="container book-food-text">
                    <div class="row text-center">
                        <div class="col-lg-9 col-md-12">
                            <!-- <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2> -->
                        </div>
                        <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="service">
            <div class="pt- pb-4">
                <div class="container">
                    <div class="row">
                        <div class="section_head col-sm-12">
                            <h4>Whyee<span>Us ?</span></h4>
                            <p>Many native and handmade products are made with sustainable materials, such as natural fibers and recycled materials. This means that you can feel good about buying these products, knowing that you're not contributing to environmental damage.</p>
                            <p>When you buy native and handmade products, you're supporting local artisans and communities. This helps to preserve traditional crafts and skills, and it also provides economic opportunities for people in these communities.
</ul>   
                            </p>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <span class="icon feature_box_col_one">
                                    <i class="fa-solid fa-cart-shopping fa-bounce"></i>
                                </span>
                                <h5>Easy To Purchase</h5>
                                <p>Purchase with confidence with our secure checkout.
                                   Shop with ease and buy with confidence.
                                   Easy checkout and great customer service.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <span class="icon feature_box_col_two">
                                    <i class="fa-solid fa-truck-fast fa-beat-fade"></i>
                                </span>
                                <h5>Fast Delivery</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat amet ut dicta sint
                                    nulla aliquam.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <span class="icon feature_box_col_three">
                                    <i class="fa-solid fa-wallet fa-beat"></i>
                                </span>
                                <h5>Money Saving Deals</h5>
                                <p>By taking the time to find and use these deals,you can save a significant amount of money over time
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <span class="icon feature_box_col_four">
                                    <i class="fa-solid fa-envelope-circle-check fa-shake"></i>
                                </span>
                                <h5>Secure Payment</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat amet ut dicta sint
                                    nulla aliquam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="button" id="scroolup">
            <a href="#home"><i class="fa-solid fa-arrow-up fa-bounce"></i></a>
        </div>
        <!-- TRENDING PRODUCTS NEW ONLY -->
        <div class="container bg-white" id="products">

            <div class="row">
                <div class="container text-center display-4 text-primary">All Products</div>
                <?php productsList() ?>
                
               
            </div>
           
        </div>

        <!-- TRENDING PRODUCTS NEW ONLY end -->




        <!-- TRENDING PRODUCTS START -->
        <div class="container mt-5 mb-5">

            <div class="d-flex justify-content-center row">

                <div class="col-md-10" id="category">
                    <div class="container text-center">
                        <h1 style="text-decoration: underline;">Trending Products</h1>
                    </div>
                    <?php 
                    trendingList();
                     ?>
                    <!-- <div class="row p-2 bg-white border rounded">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                src="./ancient-gd05e0fde5_1280.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Rakesh shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light
                                    weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For
                                    men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable.<br><br>
                            </p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">&#8377;13.99</h4><span class="strike-text ">&#8377;20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm"
                                    type="button">Details</button><button class="btn btn-outline-light btn-sm mt-2"
                                    type="button">Add to wishlist</button></div>
                        </div>
                    </div> -->
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- TRENDING PRODUCTS END -->





        <!-- FAQ SECTION -->
        <section id="faq ">
            <h2 class="text-center text-upparcase mt-4">FAQ</h2>
            <div class="container mt-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What is your return policy?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Our return policy allows you to return any item within 30 days of purchase for a full refund. You can return items for any reason, as long as they are in the original condition. To return an item, simply contact our customer service team and they will provide you with a return shipping label.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                How do I checkout?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">To checkout, simply click on the <button class="btn btn-sm btn-warning">Checkout</button> button available in the cart section. You will be asked to provide some additional information, such as your shipping address and payment information. Once you have submitted your payment information, your order will be placed.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                How do I create an account?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">To create an account, simply click on the <button class="btn btn-sm
                                        btn-primary">Login <i class="fa-solid fa-user"></i></button> button on the top right corner of the website then go to signup. You will be asked to provide some basic information, such as your name, email address, and password. Once you have created an account, you will be able to log in and start shopping.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                How do I track my order?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Once you have placed an order, you will receive an email confirmation with your order number. You can track your order by clicking on the "Track My Order" link in the email confirmation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </main>
    <?php 
    footer();
    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    <script src="main.js"></script>

</body>

</html>
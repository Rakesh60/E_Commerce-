<!-- Connect File -->
<?php
include 'admin_area\includes\connect.php';
include 'funcions\common_function.php';
session_start();

?>



<!doctype html>
<html lang="en">

<head>
    <title>Pdoduct_Page_Native_Art</title>
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


    <!-- FONT AWSOME LINK -->
    <script src="https://kit.fontawesome.com/5f91f3dc4d.js" crossorigin="anonymous"></script>

    <!-- Google Fonts apis -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,800;1,100;1,200&display=swap"
        rel="stylesheet">

</head>

<body>
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
                                <a class="nav-link active" aria-current="page" href="productpage.php">Home <i
                                        class="fa fa-house"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown"
                                    style="background-color: #5959ff" ;>
                                    <?php getdropdowncategory();?>
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

                        <form id="formbox" class="d-flex me-5" action="" method="get">
                            <input id="search-box" name="search_data" class="form-control me-2" type="search"
                                placeholder="Search" aria-label="Search">
                            <button name="search_data_products" type="submit" value="search" class="search-butt">

                                <i class=" fa-solid fa-magnifying-glass" id="search-icon" class="search-butt"></i>
                            </button>
                            <!-- <input type="submit" class="btn btn-danger" value="search" name="search_data_products"> -->
                        </form>
                        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                            <li class="nav-item"><a href="" class="nav-link"><button class="btn btn-sm
                                      btn-light"><?php
$profilename = $_SESSION['profilename'];

if($profilename!=''){
    echo $profilename;
    }
    else{
        echo "<script>window.location.href='http://localhost/ecommerce/'</script>";
    }

?> <i class="fa-solid fa-user"></i></button></a></li>
                            <li class="nav-item"><a class="nav-link" href="">Cart <span><i
                                            class="fa-solid fa-cart-shopping"></i></span></a>


                            </li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout <span><i
                            class="fa fa-sign-out" aria-hidden="true"></i></span></a>


                            </li>

                        </ul>


                    </div>
                </div>
            </nav>

            <!-- NAV BAR END-->
        </div>
    </header>
    <!-- main -->

    <main class="my-5  ">
        <div class="container">


            <div class="category container d-flex row">
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Top Category
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" <?php getdropdowncategory();?></ul>
                    </li>
                </div>

                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Best Deals
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Health care
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Baby products

                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Best Products </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Popular Category
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>


            </div>



        </div>

        <!-- PRODUCT SECTION ANDCategory  DETAIL -->

        <div class="container-fluid row">




            <div class="col-lg-2 col-md-3 col-sm-12 bg-info p-0 m-0">
                <!-- SIDE NAV -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-warning">
                        <a href="" class="nav-link text-danger">
                            <h4>Category</h4>
                        </a>
                    </li>
                    <?php

getcategory();
?>

                    <li class="nav-item bg-warning">
                        <a href="" class="nav-link text-danger">
                            <h4>State</h4>
                        </a>
                    </li>

                    <?php
getstate();
?>

                </ul>

            </div>


            <div class=" col-lg-10 col-md-9 col-sm-12">
                <!-- Products -->
                <div class="container row">

                    <!-- Fetching  Full products -->
                    <?php
//for searching products
search_product();

//get unique category
get_unique_category();
//get unique state
get_unique_state();

?>


                    <!-- <div class="col-lg-3 col-md-4 col-sm-12 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="./ProductIMG.jpg&text=PRODUCT+IMAGE" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                                <a href="#" class="btn btn-primary">Add toCart <i class=""></i> </a>

                            </div>
                        </div>

                    </div> -->











                    <!-- Card row wala div end    -->
                </div>

                <!-- col-10 wala div end -->
            </div>








        </div>




    </main>
    <!-- footer -->
    <?php 
    //footer
    footer()
    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
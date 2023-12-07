<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" href="admin_panel.css">
    <!-- Bootstrap CSS v5.2.1 -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   
    <link rel="stylesheet" href="./table.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <i class='bx bx-id-card bx-flashing bx-flip-horizontal' ></i>
      <span class="logo_name">Native Art</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="admin_panel.php?products">
          <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Insert Product</span>
           
             
          </a>
        </li>
        <li>
            <a href="admin_panel.php?insert_cat">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">Insert Category</span>
            </a>
          </li>
          <li>
            <a href="admin_panel.php?insert_brand">
              <i class='bx bx-coin-stack' ></i>
              <span class="links_name">Insert Brand</span>
            </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Total Category
            <?php 
             include './includes/connect.php';
  $countrow="SELECT *  FROM `categories`";
  $rowrs = mysqli_query($conn,$countrow);
  $rowcount = mysqli_num_rows( $rowrs);
  
  echo '<b>'.$rowcount.'</b>';

   ?>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Brands/State
            <?php 
             include './includes/connect.php';
  $countrow="SELECT *  FROM `state`";
  $rowrs = mysqli_query($conn,$countrow);
  $rowcount = mysqli_num_rows( $rowrs);
  echo '<b>'.$rowcount.'</b>'
   ?>
            </span>
          </a>
        </li>
        <li>
          <a href="admin_panel.php?viewProduct">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">View Products</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">All Orders</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">All Products</span>
          </a>
        </li>
        <li>
          <a href="admin_panel.php?viewUser">
            <i class='bx bx-user' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Admin name</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <div class="home-content">
    
      
      <!-- <form action="" method="post" class="">
        <h1>this is admin panel</h1> <br>
        email :<input type="text">
        <button>submit</button>
      </form> -->
     
<?php 
if(isset($_GET['products'])){
include('insert_product.php');
}

if(isset($_GET['insert_cat'])){
  include('insert_cat.php');
}
if(isset($_GET['insert_brand'])){
  include('insert_brands.php');
}
if(isset($_GET['viewProduct'])){
  include('viewProduct.php');
}
if(isset($_GET['viewUser'])){
  include('user.php');
}

?>

    </div>

  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
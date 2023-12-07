<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="logo.png" type="image/icon">
    <title>Native_Art</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <!-- ############# BOOTSTRAP CDN ############# -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <h3>Login Here</h3>

        <label for="username">Email</label>
        <input type="email" placeholder="Email " id="username" name="email" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>
        <div id="toggle" onclick="showhide();"></div>
        <span></span>


        <button type="submit" name="login">Log In</button>
        <div class="social">
            <div class="go"><a href="signup.php">Signup</a></div>
            <div class="fb"><a href="forgetpassword.php">Forget</a></div>
        </div>
    </form>

    <!-- PHP Start -->

    <?php

//If & Isset To Check Email Resisterd Or Not Then Login

if (isset($_POST['login'])) {
    include "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT Email,Password FROM userinfo WHERE Email = '{$email}' AND Password = '{$password}'";
    $result = mysqli_query($conn, $sql);
  
    //If & Session To Store Userinfo

    if (mysqli_num_rows($result) > 0) {
        if($result==TRUE){
            $sql2 = "SELECT Firstname FROM userinfo WHERE Email = '{$email}'";
            $result2 = mysqli_query($conn, $sql2);
            $result3 = mysqli_fetch_array($result2);
            $profilename = $result3[0];
           }
        
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION["email"] = $row['email'];
            $_SESSION["password"] = $row['password'];
            $_SESSION['profilename'] = $profilename;

            header("Location: http://localhost/ecommerce/homepage.php");
        }
    } else {
        echo "<div class=' mt-5 alert alert-danger text-center'>Email Or Password Not Match.</div>";
    }
}
?>


    <!-- ############# JS CDN ############### -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- ############# Main JS############### -->

    <script src="main.js"></script>
</body>

</html>
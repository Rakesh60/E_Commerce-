<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="logo.png" type="image/icon">
    <title>Native_Art</title>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

     <!-- ############# BOOTSTRAP CDN ############# -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>

<!-- PHP START -->
<?php

    // Connection Config & PHP Mailer Config File Define

    include_once('config.php');
    if(isset($_REQUEST['secret'])){
        $email = $_REQUEST['email'];
        $pwd = trim(md5($_REQUEST['pwd']));
        $cpwd = trim(md5($_REQUEST['cpwd']));


        // If Block To Check Both Password Are Same And Update Task 

        if($pwd == $cpwd){
           $reset_pwd =mysqli_query($conn,"UPDATE userinfo SET Password ='$pwd' WHERE Email = '$email'");
           if($reset_pwd>0){
            if(isset($_POST['pwdrst'])){
            $msg ='<div class="alert alert-success text-center">After Change Please <a href="signin.php">Click Here</a> To Login.</div>';

            }
           }
           else{
            echo "<div class='alert alert-danger text-center'>Can't Update Your Password</div>";
           }
        }
        else{
            $msg = "<div class='alert alert-danger text-center'> Password Dose Not Match.</div>";
        }
    }?>


<?php

//If Block To Check That Secret Email Recived Or Not 

if($_GET['secret'])
{
    $email = base64_decode($_GET['secret']);
    $check_details = mysqli_query($conn,"SELECT Email FROM userinfo WHERE Email='$email'");
    $result =mysqli_num_rows($check_details);
    if($result>0){ ?>

<body>
    <div id="reset">
        <form method="post">
            <h3>Reset Password</h3>
            <input type="hidden" name="text" value="<?php echo $email;?>"/>
            <label for="password">New Password</label>
            <input type="password" placeholder="New Password" id="password" name="pwd" required>
            <div id="toggle" onclick="showhide();"></div>
            <span></span>
            <label for="username">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" id="username" name="cpwd" required>
            <button>Reset</button>
            <p class="error"> <?php if(!empty($msg)){echo $msg;}?></p>
        </form>
    </div>

    <!-- ############# JS CDN ############### -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- ############# Main JS############### -->

    <script src="main.js"></script>
    <?php }}?> 
</body>

</html>
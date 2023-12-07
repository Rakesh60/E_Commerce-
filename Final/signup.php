<?php
use PHPMailer\PHPMailer\PHPMailer;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if (isset($_POST['save'])) {
    include "config.php"; //Connection File

    // Veriables Define
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    // SQL Query TO Check Email & Password
    $sql = "SELECT email FROM userinfo WHERE email = '{$email}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");

    // If Block For Check That User Is Exit Or Not

    if (mysqli_num_rows($result) > 0) {
        // echo"<div class='alert alert-danger text-center'>Email Already Exist Go to Login Page</div>";

        // echo "<script>Alert('Email Already Exist please Go to Login Page');</script>";
    }

    // Else Block For Insert Data In Table If Not Exit

    else {
        $sql1 = "INSERT INTO userinfo(Firstname,Lastname,Email,Password) VALUES('{$fname}','{$lname}','{$email}','{$password}')";
        echo "<div class='alert alert-danger text-center'>Registration Succesfull</div>";

        //  If Block For Next Page Location Assign

        if (mysqli_query($conn, $sql1)) {
            header("Location: http://localhost/ecommerce/final/login.php");
        }
    }

    //  If Block For Already Registerd Person

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='alert alert-danger text-center'>Email Already Exist Go to Login Page</div>";
    } else {
        $massage = file_get_contents('Thank.html');

        //  Thanking Email Function

        $mail = new PHPMailer;
        $mail->isSMTP();
// $mail->SMTPDebug = 2; //To Debug The Error In Mail Send(Deactived By Me)
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'rakeshibm909@gmail.com';
        $mail->Password = 'bztgpqcpjatvcydi';
        $mail->setFrom('rakeshibm909@gmail.com', 'NativeArt');
        $mail->addReplyTo('rakeshibm909@gmail.com', 'NativeArt');
        $mail->addAddress($email, $fname);
        $mail->Subject = "Thank You " . $fname;
        $mail->msgHTML(file_get_contents($massage));
        $mail->Body = $massage;
//$mail->addAttachment('attachment.txt'); //You Can Send Atachment Too (Deactived By Me)
        if (!$mail->send()) {
// echo 'Mailer Error: ' . $mail->ErrorInfo;  To Dispaly The Error In Mail Send(Deactived By Me)
        } else {
            echo 'The email message was sent.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="logo.png" type="image/icon">
    <title>Signup</title>

    <!-- ############# BOOTSTRAP CDN ############# -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ############# Font CDN ############# -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">


    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div id="signup">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <h3>SignUp Here</h3>

            <label for="fname">First Name</label>
            <input type="text" placeholder="First Name" id="fname" name="fname" required>

            <label for="lname">Last Name</label>
            <input type="text" placeholder="Last Name" id="lname" name="lname" required>

            <label for="email">Email</label>
            <input type="text" placeholder="Email " id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <div id="toggle" onclick="showhide();"></div>
            <span></span>


            <button type="submit" name="save">Sign Up</button>
            <button>Already a member ? <a href="login.php">Login</a></button>
            <!-- <div class="social">
            <div class="go">Signup</div>
            <div class="fb">Forget</div>
        </div> -->
    </div>
    </form>

    <!-- ############# Bootstrap JS CDN ################ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- ############# Custom JS ################ -->

    <script src="main.js"></script>
</body>

</html>
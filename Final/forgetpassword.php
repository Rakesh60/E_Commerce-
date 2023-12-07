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

    <?php
    
    // PHP Mailer Config File Define

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    // Email Checking Function Register Or Not

    include_once('config.php');
    if(isset($_REQUEST['pwdrst'])){
        $email = $_REQUEST['email'];
        $check_email = mysqli_query($conn,"SELECT Email FROM userinfo WHERE Email='$email'");
        $fname= mysqli_query($conn,"SELECT Firstname FROM userinfo WHERE Email='$email'");
        $result= mysqli_num_rows($check_email);

    // If Yes,  Send The Mail With Reset Button

        if($result>0){
            $message ='<div>
            <p>Hello Dear,</p>
            <p> Please Click The Below Button To Reset Your Password</p>
            <p><button align="center" style="color:red;text-decoration:none;" ><a href="http://localhost/ECOMMERCE/final/resetpassword.php?secret=' .base64_encode($email).'">Reset Password</a></button></p></div>';
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
            $mail->addAddress($email,$fname);
            $mail->Subject = "Thank You ";
            $mail->isHTML(TRUE);
            $mail->Body = $message;
            //$mail->addAttachment('attachment.txt'); //You Can Send Atachment Too (Deactived By Me)

            //If Block if Mail Not Send

            if (!$mail->send()) {
                // echo 'Mailer Error: ' . $mail->ErrorInfo;  To Dispaly The Error In Mail Send(Deactived By Me)
            } 
            
            //Else Block
            
            else {
                echo 'The email message was sent.';
            }
        } 
        else{
            echo"<div class='alert alert-danger text-center'>Email Not Exist</div>";
        }  
    }
   
    ?>


<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <h3>Forget Password</h3>

        <label for="username">First Name</label>
        <input type="name" placeholder="First Name" id="username" name="name" required>

        <label for="password">Email</label>
        <input type="email" placeholder="Registered Email" id="password" name="email" required>
        
        

        <button type="submit" name="pwdrst">Send Reset Link</button>
        <div class="social">
            <div class="go"><a href="signup.php">Signup</a></div>
            <div class="fb"><a href="login.php">Login</a></div>
        </div>
    </form>
      <!-- ############# JS CDN ############### -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>
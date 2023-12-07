<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="contactstyle.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
          <h1>Contact US</h1>
        </div>
        <form method="post" action="contactus.php" class="contact-form">
          <div class="input-fields">
            <input type="text" name="name" class="input" placeholder="Name">
            <input type="text" name="email" class="input" placeholder="Email Address">
            <input type="text" name="phone" class="input" placeholder="Phone">
            <input type="text" name="subject" class="input" placeholder="Subject">
          </div>
          <div class="msg">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="send" class="btn">send</button>
          </div>
        </form>
      </div>
</body>
</html>
<?php
include '..\admin_area\includes\connect.php';
session_start();
if (isset($_POST['send'])) {


$name =mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$phone =mysqli_real_escape_string($conn, $_POST['phone']);
$subject =mysqli_real_escape_string($conn, $_POST['subject']);
$message =mysqli_real_escape_string($conn, $_POST['message']);

        $sql1 = "INSERT INTO contactus(fname,email,phone,fsubject,fdescription) VALUES('$name','$email','$phone','$subject','$message')";


        echo "<div class='alert alert-danger text-center'>Form submited Succesfull</div>";

        //  If Block For Next Page Location Assign
        if (mysqli_query($conn, $sql1)) {
          $profilename = $_SESSION['profilename'];
          if($profilename==''){
          header("Location: http://localhost/ecommerce/");
        }
        else{
          header("Location: http://localhost/ecommerce/homepage.php");
        }
      }
    }
 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="utf-8">

</head>
<body>
  <!-- <div class="container-fluid">
     <div class="d-grid gap-2 d-md-block">

           <div class="container-fluid">
    
                <div class="container">

                    <br>
                     <a href="loginpage.php"><button type="button" class="btn btn-outline-success">Log in</button></a>
                         <a href="signuppage.php"><button type="button" class="btn btn-outline-warning">Sign up</button></a>
                 
                          <br><br>
            </div>
          </div>
          </div>
    </div> -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container" >
    <a class="navbar-brand" href="#"><img src="kinjobs.png"style="width: 15%">KIN JOBS </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="homepage.php"  class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a href="companies.php" class="nav-link" href="#">Companies</a>
        </li>
  <li class="nav-item">
          <a href="orderpage.php" class="nav-link" href="#">Browse Job</a>
        </li>
  <li class="nav-item">
          <a href="postjobs.php" class="nav-link" href="#">Post Job</a>
        </li>
  <li class="nav-item">
          <a href="contactpage.php" class="nav-link" href="#">Contact us</a>
        </li>
  <li class="nav-item">
          <a href="blog.php" class="nav-link" href="#">Blog</a>
        </li>  
        <li class="nav-item">
          <a href="aboutpage.php" class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a href="faQ's.php" class="nav-link" href="#">faQ's</a>
        </li>
 <li class="nav-item">
          <a href="loginpage.php" class="nav-link" href="#"><button type="button" class="btn btn-sm btn-outline-success">Log in</button></a>
        </li>
        <li class="nav-item">
          <a href="signuppage.php"  class="nav-link" href="#"><button type="button" class="btn btn-sm btn-outline-success">Sign up</button></a>
        </li>
      </ul>
     <!--  <form class="d-flex" role="search">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<div class="container-fluid">
    <section class="container-fluid" style="background:#002423;background:linear-gradient(180deg,rgba(0,0,35,.48506785631507) 10%,rgba(97,120,149,.0) 49%,#00d4ff 100%),url(mailbag.jpg);background-position:50%;background-repeat:no-repeat;background-size:cover;position:relative;width:100%">
    <div class="container">
        <br><br><br><br><br><br><br>
    <center>
    
    <br><br><br>
</center>
</div>
</section>
</div>



<div class="container">
 <div class="row">
 <!--  <div class="card" style="">
    <div class="card-body"> -->
    <div  class="col-md-6 col-l-6 col-xl-6">
  <img src="mail.jpg" style="width: 50%"><br>
<?php use PHPMailer\PHPMailer\PHPMailer; ?>
<?php

 // use PHPMailer\PHPMailer;
 // use PHPMailer\Exception;

// require 'path/to/PHPMailer/Exception.php';
// require 'path/to/PHPMailer/PHPMailer.php';
// require 'path/to/PHPMailer/SMTP.php';
require 'config.php';
if(isset($_POST['submit'])) {

    $email = $_POST['email'];

    // Check if the email exists in the database
    $check_email = "SELECT * FROM `csignup` WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);

    if(mysqli_num_rows($result) > 0) {
        // Generate a random password
        $new_password = substr(md5(rand()), 0, 8);

        // Update the user's password in the database
        $update_password = "UPDATE `csignup` SET password = '$new_password' WHERE email = '$email'";
        if(mysqli_query($conn, $update_password)) {
include_once 'PHPMailer/PHPMailer.php';
include_once 'PHPMailer/Exception.php';
include_once 'PHPMailer/SMTP.php';



            // Send the user an email with their new password
            $mail = new PHPMailer();
            $mail->isSMTP();
           // $mail->SMTPDebug = 0;

           // $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->Host = 'smtp.gmail.com';  // Specify SMTP server
            $mail->Port = 587; // SMTP port
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'aliygalig@gmail.com'; // SMTP username
            $mail->Password = 'vdrzoblbwtxqynef'; // SMTP password
            $mail->setFrom('aliygalig@gmail.com', 'KinJobs');
            $mail->addAddress($email); // Add a recipient
            $mail->Subject = 'New Password';
            $mail->Body = "Your new password is: $new_password";
            if($mail->send()) {
                // Redirect the user to a page indicating that their new password has been sent
              //  header("Location: password_sent.php");
            	echo "Your new Password is sent to Your email address";
                exit;
            } else {
                // If the email fails to send, display an error message
                echo "Failed to send email: " . $mail->ErrorInfo;
            }
        } else {
            // If the password update fails, display an error message
            echo "Failed to update password.";
        }
    } else {
        // If the email does not exist in the database, display an error message
        echo "Email not found.";
    }






}
?>
<br>


</div>
     <div class="col-8">
                       
            
<form method="post" action="cforgets.php">
    <label class="text-muted" for="email" ><p style="color: darkblue";>    Enter Your email address</p></label><br>
    <input type="email" id="email" placeholder="example@gmail.com" name="email" required="">
    <button class="btn btn-danger" type="submit" name="submit">Submit</button>
</form>
</div>

</div>

</div>
</div></div>

<!-- </center>
 --><?php include "footer.html"; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
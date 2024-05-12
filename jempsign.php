<!DOCTYPE html>
<html style="background-color: lightblue;">
<head>
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<meta charset="utf-8">

	</head >
<body>
<!--  <div class="container-fluid">
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
    </div>
 -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container" >
    <a class="navbar-brand" href="#"><img src="kinjobs.png"style="width: 15%">KIN JOBS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="index.php"  class="nav-link active" aria-current="page" href="#">Home</a>
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
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<div class="container-fluid">
  <section class="container-fluid" style="background:#002423;background:linear-gradient(180deg,rgba(0,0,35,.87) 10%,rgba(97,120,149,.0) 49%,#00d4ff 100%),url(signpp.jpeg);background-position:50%;background-repeat:no-repeat;background-size:cover;position:relative;width:100%">
  <div class="container">
    <br><br><br><br><br><br><br>  <br><br><br><br><br><br><br>
    <center>
  
    <br><br><br>
</center>
</div>

  <br><br><br><br>
  </div>
	<br>
<div class="container"><br><br>
		<center><h1 style="color:darkblue;">SIGN UP</h1></center>
		<div class="row">
			<div class="col-4">
				<img src="signip.jpg" style="width:98%;">

			</div>
			<div class="col-6">
						<div class="card" style="">
			<div class="card-body">
        <?php
        include 'config.php';
       if(isset($_POST['register'])) {
    $Company_Name = $_POST['Company_Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Confirm_Password = $_POST['Confirm_Password'];
    $date = date("Y-m-d");

    if ($password != $Confirm_Password) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="fa fa-warning"></i>  Password Not Same
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>';
        } else {
          // $encrypted_password = md5($password);
            $register ="INSERT INTO csignup(Company_Name,email,password, CDate)VALUES('$Company_Name','$email','$password', '$date');";
            $result = mysqli_query($conn, $register);                  
            if($result != true) {
                echo "Error";
            } else {
             echo "Successfully Registered";
            }
        }
}
?>
     		<form method="POST" action="jempsign.php">

                    <label class="text-muted">Company Name</label>
					<input type="text" name="Company_Name" class="form-control" style="color:black;" placeholder="Company Name" required="">
                    <label class="text-muted">Email</label>
					<input type="email" name="email" class="form-control" style="color:black;" placeholder="companyexample@gmail.com" required="">
					<label class="text-muted">Password</label>
					<input type="password" name="password" class="form-control" style="color:black;" placeholder="Enter Your Password" required="">
					<label class="text-muted">Confirm Password</label>
					<input type="password" name="Confirm_Password" class="form-control" style="color:black;" placeholder="Enter Your Password Again" required=""><br>
					<input type="checkbox" name="checkbox" style="color: black;" required=""> by ticking the box you are agreeing to the terms and conditions of the company<a href="terms.php"> terms and conditions</a>
                <!-- terms and conditions needed for sign up and any other process -->
					<button class="btn btn-primary" type="submit" name="register" style="width: 98%;">Sign Up</button>

					<br><br><span style="font-size: 13px;" class="text-muted">Don't have a account? <a href="jemplog.php">Log In</a>
						<br>
					
	</form>
			</div>
		</div>
			</div>
		
</div>
</div>

<?php include "footer.html"?>
<!--   -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
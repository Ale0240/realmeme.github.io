<html style="background-color: lightblue;">
<head>
	<meta charset="utf-8">
<title>KIN JOBS</title>
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
  <section class="container-fluid" style="background:#002423;background:linear-gradient(180deg,rgba(0,3699999999999999,35,.48506785631507) 10%,rgba(97,120,149,.0) 49%,#00d4ff 100%),url(coins-job-word.jpg);background-position:50%;background-repeat:no-repeat;background-size:cover;position:relative;width:100%">
  <div class="container">
    <br><br><br><br><br><br><br>
    <center>
  
    <br><br><br>
</center>
</div>

  <br><br><br><br>
  </div>
    <br>
	<div class="container"><br><br>
		<center><h1 style="color:darkblue;">LOG IN</h1></center>
		<div class="row">
			<div class="col-4">
				<img src="rlog.jpg" style="width:98%;">

			</div>
			<div class="col-6">
						<div class="card" style="">
			<div class="card-body">
<?php

session_start();
include 'config.php';

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = "SELECT * FROM `signup` WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($conn, $login);

    if(mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;
        
        // Redirect the user to the order page after 3 seconds
        $wait_time = "3";
        $redirect_url = "orderpage.php";
        header("Refresh: $wait_time; URL=$redirect_url");

       // echo 'You have successfully logged in. You will be redirected to the order page in '.$wait_time.' seconds.';
    } else {
        echo "Failed to login";
    }
}







// include 'config.php';
// if(isset($_POST['login'])) {

//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $delete ="DELETE FROM `signup` WHERE Email = '$email' AND Password = '$password'";
//     $result = mysqli_query($conn, $delete);                  
//     if($result == true) {

//      // echo 'Your email is '.$email;


//       echo "successfull";

//     } else {
//       echo "failed";
                
            
//         }
// }
?>
				<form method="POST" action="Loginpage.php">
					<label class="text-muted">Email</label>
					<input type="email" name="email" class="form-control" style="color:black;" placeholder="example@gmail.com" required="">
					<label class="text-muted">Password</label>
					<input type="password" name="password" class="form-control" style="color:black;" placeholder="Enter Your Password" required=""><br>

					<a href="orderpage.php"><button class="btn btn-primary" type="submit" name="login" style="width: 98%;">Log In</button></a>

					<br><br><span style="font-size: 13px;" class="text-muted">Don't have a account? <a href="signuppage.php"> Sign Up</a>
						<br>
					<a href="forget.php">forget password ?</a></span>  
	</form>
			</div>
		</div>
			</div>
			<div class="col-3"></div>
		</div>
</div>

</center>


<?php
$Catagory=["Catagory"];
//echo $Catagory["A"];
//needs database for storing information of users
 $email=["email"];
$password=["password"];
//echo $_POST["password"];
/*$servername="localhost";
$username= "root";
$password="";
$dbname="SQLQuery1";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
die("connection failed: " . $conn->connect_error);

} else {
echo "connected successfully";
}
*/
?>

<br><br><br><br><br><br><br><br>

<?php include "footer.html"?>
<!--   -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
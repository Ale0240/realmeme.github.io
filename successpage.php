<!DOCTYPE html>
<html style="background-color: lightblue;">
<head >
<title>KIN JOBS</title>
	<meta charset="utf-8"> 


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<meta charset="utf-8">



  <!-- div class="container-fluid">
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
 --><nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
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
        </li>  <li class="nav-item">
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

</head>
<body>
<div class="container">
  <div class="card"style="background-color: lightgray;">
    <div class="card-body">
        <br><br><br><br><br><br><br>  
     <b> <h3 style="color:green;font-size: 50px;background-color: lightgray;">Successfully Register for ...<?php  include "config.php";  //echo $industry;?></h3></b>

     <?php
     // include 'config.php';
     session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page
    header("Location: loginpage.php");
    exit;
}

// If the session is correct, continue with the rest of the script
// include 'config.php';

$industry  = $_SESSION['industry'];
$get_data = "SELECT * FROM `companies` WHERE industry = '$industry'";
$result = mysqli_query($conn, $get_data);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        // Output the data
        $msg = 'Successfully Registered '. $row["industry"];
       
    }
} else {
    echo "No data found for this user.";
}
     ?>
    </div><br><br><br><br><br><br><br>
  </div>
</div>

<!-- <? 
//webid.ai
// function registerUserForJob(row) {
// // Send a message to the user that they are registered for the job.
// console.log("Successfully registered for " + row["industry"]);
// }


// function successJobRegistration($jobId, $email)
// {
// // Send an email to the user confirming their registration.
// $to = $email;
// $subject = "Your job registration has been successful";
// $message = "Your job registration has been successful. Your job ID is $jobId.";
// mail($to, $subject, $message);
// // Redirect the user to the success page.
// header("Location: successpage.php");
// }

?>-->
<?php include "footer.html"?>
 
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>

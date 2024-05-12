<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page
    header("Location: jemplog.php");
    exit;
}

// If the session is correct, continue with the rest of the script
include 'config.php';

$cemail  = $_SESSION['email'];
$get_data = "SELECT * FROM `csignup` WHERE email = '$cemail'";
$result = mysqli_query($conn, $get_data);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        // Output the data
        $msg = 'Welcome back '. $row["Company_Name"];
       
    }
} else {
    echo "No data found for this user.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="utf-8">

</head>

<body style="background-color: #ced4da;">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container" >
    <a class="navbar-brand" href="#"><img src="kinjobs.png"style="width: 15%">KIN JOBS </a>
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
    <!-- Example: Adding a logout link -->
<a href="logout.php" class="nav-link" herf='#'><button type="button" class="btn btn-sm btn-outline-success">Log out</button></a>
</li>
</ul>
</div>
</div>
</nav>
<br>

<?php
include 'config.php';
// Query to retrieve data from the database
$sql = "SELECT * FROM companies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row using a while loop
    while ($row = $result->fetch_assoc()) {
        // Access the columns of each row using the column names
        $name = $row["name"];
        $industry = $row["industry"];
        $description = $row["description"];

        echo '
        <br>
        <div class="container">
<div class="card mt-1">
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <img src="https://ui-avatars.com/api/?background=2596be&color=fff&name='.$name.'" style="border-radius:50%;">
            </div>
            <div class="col-8">
                <p>' . $name . '</p>
                <p>'. $industry .'</p>
                <p>
  <a class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Read more
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body"> <p>'. $description .'</p>
   

  </div>
</div>
               
                <br>
                 <a  class="btn-outline-primary "href="uploadresume.php?company=' . urlencode($name) . ' role="button" ">Apply</a>
            </div>
        </div>
        </div>
</div>
</div>';
        // // Display the retrieved data
        // echo "ID: " . $name . "<br>";
        // echo "Name: " . $industry . "<br>";
        // echo "Email: " . $description . "<br>";
        // echo "<br>";
    }
} else {
    echo "No records found.";
}


?>

<br><br><br>
<?php include "footer.html"?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>










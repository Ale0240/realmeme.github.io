
<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page
    header("Location: jemplog.php");
    exit;
}

// If the session is correct, continue with the rest of the script
include 'config.php';

$cemail	 = $_SESSION['email'];
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
	<title>Companies</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<meta charset="utf-8">

</head>
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
       <!--    <a href="loginpage.php" class="nav-link" href="#"><button type="button" class="btn btn-sm btn-outline-success">Log in</button></a>
        </li>
        <li class="nav-item">
          <a href="signuppage.php"  class="nav-link" href="#"><button type="button" class="btn btn-sm btn-outline-success">Sign up</button></a>
        </li> -->
      </ul>
     <!--  <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<div class="container-fluid">
	<section class="container-fluid" style="background:#002423;background:linear-gradient(180deg,rgba(0,3699999999999999,35,.48506785631507) 10%,rgba(97,120,149,.0) 49%,#00d4ff 100%),url(carrer.jpg);background-position:50%;background-repeat:no-repeat;background-size:cover;position:relative;width:100%">
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		

</section>


<div class="container"><br><br>
<center><h1 style="color:darkblue;"><?php echo $msg; ?></h1></center>
	<div class="row">
			<div class="col-md-4 col-l-4 col-xl-4">
				<img src="signip.jpg" style="width:102%;">
			</div>
			<div class="col-md-5 col-l-5 col-xl-5" style="background-color: rgb(118,181,197);">
			
		<br><br><br><br><br>
    <center>





        <form method="POST" action="postjobs.php">
          <label class="text-muted" for="name">Company Name</label>
          <input type="text" id="name" name="name" class="form-control" style="color:black;" placeholder="enter the company name" required="">
          <label class="text-muted">Industry</label>
          <input type="text" name="industry" id="industry" class="form-control" style="color:black;" placeholder="enter type of qualification needed" required=""><br>
          <label class="text-muted" for="name">Description</label>
          <textarea class="editor form-control ck-editor__editable_inline" id="editor" name="description" style="height: 150px;"></textarea>
<br>
         <button class="btn btn-primary" type="submit" name="postjobs" style="width: 98%;">Submit</button>
 
          
  </form>

<?php
include 'config.php';

if (isset($_POST['postjobs'])) {
    // Sanitize and validate user inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $industry = mysqli_real_escape_string($conn, $_POST['industry']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Validate inputs (perform additional validation as needed)
    if (empty($name) || empty($industry) || empty($description)) {
        echo '<div class="alert alert-danger">Please fill in all the required fields</div>';
        exit; // Stop further execution if validation fails
    }

    // Prepare and bind parameters to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO companies (name, industry, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $industry, $description);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo '<div class="alert alert-success">Company inserted successfully</div>';
    } else {
        echo '<div class="alert alert-danger">Error: ' . $stmt->error . '</div>';
    }

    // Close the prepared statement
    $stmt->close();
}

// Close connection
$conn->close();
?>





    <br><br><br>
</center>
</div>
</div>



</div>

</div>

	<br><br><br><br>




<!-- <?php
// include 'config.php';
// // Query to retrieve data from the database
// $sql = "SELECT * FROM companies";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Output data of each row using a while loop
//     while ($row = $result->fetch_assoc()) {
//         // Access the columns of each row using the column names
//         $name = $row["name"];
//         $industry = $row["industry"];
//         $description = $row["description"];

//         echo '
//         <br>
// <div class="card mt-2">
// 	<div class="card-body">
// 		<div class="row">
// 			<div class="col-2">
// 				<img src="https://ui-avatars.com/api/?background=2596be&color=fff&name='.$name.'" style="border-radius:50%;">
// 			</div>
// 			<div class="col-10">
// 				<p>' . $name . '</p>
// 				<p>'. $industry .'</p>
// 				<p>'. $description .'</p>
// 			</div>
// 		</div>
// </div>
// </div>';
//         // // Display the retrieved data
//         // echo "ID: " . $name . "<br>";
//         // echo "Name: " . $industry . "<br>";
//         // echo "Email: " . $description . "<br>";
//         // echo "<br>";
//     }
// } else {
//     echo "No records found.";
// }


?>

 -->









	<?php include "footer.html"?>
<!--  -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="ckeditor.js"></script>

<script>ClassicEditor
      .create( document.querySelector( '.editor' ), {
        
        toolbar: {
          items: [
            '|',
            'heading',
            '|',
            'bold',
            'italic',
            'underline',
            'numberedList',
            'bulletedList',
            'link',
            'insertTable',
            'imageUpload',
            'Blockquote',
            'undo',
            'redo'
          ]
        },
        language: 'en',
        image: {
          toolbar: [
            'imageTextAlternative',
            'imageStyle:full',
            'imageStyle:side'
          ]
        },
        table: {
          contentToolbar: [
            'tableColumn',
            'tableRow',
            'mergeTableCells'
          ]
        },
        licenseKey: '',
        
      } )
      .then( editor => {
        window.editor = editor;
    
        
        
        
    
        
        
        
      } )
      .catch( error => {
        console.error( 'Oops, something went wrong!' );
        console.warn( 'Build id: yh7g7ebd95vd-fina739l2zdd' );
        console.error( error );
      } );
  </script>
</html>













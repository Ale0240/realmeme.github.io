<!DOCTYPE html>
<html>
<head>
	<h1 style="background-color:orange ;">ULTIMATE BUSINESS CENTER</h1>
<hr>
	<meta charset="utf-8">
	<img src="UBD.png" alt="Company logo"/>
	<title>Ultimate Business Center</title>
</head>
<body> 
	
	
	 
 <p>This website will give you delivery to anything any thing any where</p><br>
 <a href="login.php"><button>Log in</button></a>
 <a href="signup.php"><button>Sign up</button></a>
	 <br><br><br><br><br><br><br><br>
		

<br><br><br><br><br><br><br><br>
for more info contact us atsucks3334@gmail.com or +2519999999
	
</body>
<hr>
<h3 style="background-color:magenta ;">Thanks for visiting</h3>
</html>
<html>
<head style="background-color: white;">
	<meta charset="utf-8">
	<title></title>
	<img src="UBD.png" alt="Company logo" />
	<video src ="dude.mp4" alt=""></video> 
</head >
<body style="font-color: red;">

	<a href="project1.php"><button>HomePage</button></a><br>
	<br>
	<form action="signup.php" method="post">
		Email: <input type="text" name="email"><br><br>
		Password: <input type="password" name="password"><br><br>
		Confirm Password: <input type="password" name="password"><br>
		<input type="submit">
        </form>
        <br>
        <a href="login.php"><button>Order Now</button></a>
		<?php 

		echo $_POST["email"];
		echo $_POST["password"];
?>

<?php include "footer.html"?>

</body>
</html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<img src="UBD.png" alt="Company logo"/>
</head>
<body>
	<?php include "header.html"?>
	<a href="project1.php"><button>HomePage</button></a>
	<form action="login.php" method="post">
	Email:	<input type="text" name="email"><br>
	Password:	<input type="password" name="password"><br>
		<input type="submit">
		<hr>

	</form>
<?php

echo $_POST["email"];
echo $_POST["password"];
?>
<a href="items.php"><button>Log In</button></a>
<br><br><br><br><br><br><br><br>

<?php include "footer.html"?>




</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<img src="UBD.png" alt="Company logo " height="95" />
</head>
<?php include"header.html"?>
<a href="project1.php"><button>HomePage</button></a>
<body>
<form action="items.php" method="post">
	<fieldset style="border-color: white;">Choose Items to Order</fieldset>
	Item 1: <input type="checkbox" name="items[]" value="item1"><br>
	
	Item 2: <input type="checkbox" name="items[]"value="item2"><br>
	
    Item 3: <input type="checkbox" name="items[]"value="item3">
   
    <input type="submit">

</form>

<a href="sucess.php"><button>Order</button></a>
<?php
$items = $_POST["items"];

 echo $items[0]; 
 echo $items[1];
 echo $items[2];

 ?>

 

</body>
<?php include"footer.html"?>
</html>
<html>
<head>
	<img src="UBD.png" alt="Company logo"/>
	<?php include"header.html"?>
	<a href="project1.php"><button>HomePage</button></a>
	<br><br><br><br>
	<h2>Successfully ordered</h2><br><br><br>
	<p>See you soon</p><br><br><br>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


</body>
<?php include"footer.html"?>
</html>

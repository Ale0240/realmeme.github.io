<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<?php
$var1="A";
$var2="B";
echo "variables before swapping : ";
 echo "<br>";
echo "variable 1 : ";
echo $var1;
echo " , ";
echo "variable 2 : ";
 echo $var2;
 echo "<hr>";
echo "variables after swapping : ";
 echo "<br>";

echo "variable 1 : ";
echo str_replace($var1, $var2, $var1);
echo " , ";
echo "variable 2 : ";
 echo str_replace($var2, $var1, $var2);


?>
</body>
</html>

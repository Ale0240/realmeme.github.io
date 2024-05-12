<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head><body>
<?php
function trinary_Test($n){
$r = $n > 30
? "greater than 30"
: ($n > 20
? "greater than 20"
: ($n >10
? "greater than 10"
: "Input a number at least greater than 10!")); 
echo $n." : ".$r."\n";
}
trinary_Test(32);
trinary_Test(21);
trinary_Test(12);
trinary_Test(4);
?>
</body>
</html>
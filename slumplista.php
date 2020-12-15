<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
<h2>Slumplista</h2>
<?php
$number = rand(1,100);
$number2= rand(1,100);
$number3 = rand(1,100);
$number4 = rand(1,100);
$number5 = rand(1,100);

$numbers = array($number, $number2, $number3, $number4, $number5);
sort($numbers);
$lägsta = array_shift($numbers);
$högsta = array_pop($numbers);
echo" Talen är: $number, $number2, $number3, $number4, $number5";
echo "<br>";
echo"Lägsta talet är: $lägsta";
echo "<br>";
echo"Högsta talet är: $högsta";
?>

</body>
</html>
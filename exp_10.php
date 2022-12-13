<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 - Constant Declaration vs Variable Declaration</title>
</head>
<body>
    <h3>10 - Constant Declaration vs Variable Declaration</h3>
    
</body>
</html>

<?php
// define(name, value, case-insensitive);
define("GREETING", "Hello, Doctor! ");
echo GREETING;

$name = "Kyaw Kyaw"."<br>"; // local scope
$arr = [1, 2, 3, 4, 5, 6, 7];
echo "<br>";

define("NUM", $arr, false);
var_dump(NUM);
echo "<br>";

foreach(NUM as $num) {
    echo $num."<br>";
}

$arr2 = [6, 3, 7, 8, 5, 6, 10];
// define("NUM2",$arr, true);
define("NUM2",$arr);
var_dump(NUM2);

echo "<br>";

function showMessage() {
    // $name = "Tun Tun";
    global $name;
    echo $name."<br>";
    echo GREETING;
}

showMessage();

?>
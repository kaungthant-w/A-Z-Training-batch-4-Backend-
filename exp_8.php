<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function</title>
</head>
<body>
    <h1>Math Function</h1>
    pow(x, y) <br>
    sqrt(x) <br>
    abs(x) <br>
    ceil(x) <br>
    floor(x) <br>
    rand(start, end) <br>
    max() <br>
    min() <br>
    <hr><br>
</body>
</html>

<?php
$num = [2,3,32, 30, 31, 3, 21, 98,9];
echo pow(3,5)."<br>";
echo round(3,5)."<br>";
echo sqrt(3)."<br>";
echo abs(3)."<br>";
echo ceil(3.1)."<br>";
echo ceil(3.8)."<br>";
echo floor(3.8)."<br>";
echo floor(3.1)."<br>";
echo rand(2, 340)."<br>";
echo max($num)."<br>";
echo min($num)."<br>";

?>
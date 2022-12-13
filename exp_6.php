<?php

$name = "kaung thant";

if($name == "kaung thant") {
    echo "You, right";
}

echo "<br>";
echo "The end";
echo "<br>";

if($name == "aung khant") {
    echo "You, right";
} else if ($name == "Min Thu") {
    echo "Also U.";
} else {
    echo "Nobody Here";
}
echo "<br>";

$car = ["BMW", "Toyota", "Honda", "Luna"];
echo "<pre>";
var_dump($car);
echo "<br>";

for($i = 0; $i < count($car); $i++) {
    echo $car[$i]."<br>";
}

echo "<br>";

foreach ($car as $item ) {
    echo $item."<br>";
}

echo "<br>";

$num2 = 1;
while( $num2 <= 10) {
    echo $num2."<br>";
    $num2++;
}

$num3 = 0;
do {
    echo $num3."<br>";
    $num3++;
} while($num3 <= 20);

echo "<br>";

function outputMessage() {
    echo "This is output function";
}

outputMessage();

echo "<br>";

function output1($i) {
    echo "My name is ".$i;
}

output1("Tun Tun");

echo "<br>";

function output2($i= 'empty') {
    echo "There is ".$i;
}

output2();
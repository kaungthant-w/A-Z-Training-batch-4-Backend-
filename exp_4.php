<?php

// integer, double, boolean, null, string, array, object, undefine
echo "Variable & Operator";
$name = "Kaung Thant";
echo "<br>";

// output
var_dump($name);
echo "<br>";
print($name);
echo "<br>";
print_r($name);
echo "<br>";
echo $name;
echo "<br>";

$num1 = 10;
$num2 = 20;
echo $num1 + $num2;
echo "<br>";

// associative array
$assoArray = [
    'name' => 'mgmg',
    'role' => 'developer'
];
var_dump($assoArray);
echo "<br>";

// array
$array = ['one', 'two', 'three'];
var_dump($array);
echo "<br>";
echo $array[0];
echo "<br>";

// variable function
$output = function () {
    echo "this is function call";
};

$output();
echo "<br>";

// constant
define("MIZI", 20);
echo MIZI;
echo "<br>";

// if...else statement
$fruit = "mango";
if($fruit == 'mango') {
    echo "this is mango";
}else{
    echo 'this is another fruit';
}

echo "<br>";

// ternary operator
$result = $fruit == "mango" ? 'this is mango': 'this is another fruit';
echo $result;

echo "<pre>";
var_dump($_SERVER);


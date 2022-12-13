<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Function</title>
</head>
<body>
    <h3>Array Build in Function</h3>
</body>
</html>

<?php 
//current()
// end()
// array_rand()
// array_sum()
// range(0, 10)
// in_array("searchValue", $array)
// array_key_exists()
// array_keys()
// array_values()
// implode("|", $arr)
// join("|", $arr)
// shuffle($arr)
// array_push()
// array_pop()
// array_shift()
// array_unshift()
// sort()
// rsort() 
// asort ()
// ksort()
// krsort()



// array count
$arr = ["apple", "orange", "mango", "lemon"];
echo count($arr)."<br>";
echo $arr[3]."<br>";
echo $arr[1]."<br>";
echo $arr[2]."<br>";
// echo $arr[5];

echo "<hr>";
// current end 
echo current($arr)."<br>";
echo end($arr)."<br>";

// array_rand()
// var_dump(array_rand($arr));
echo array_rand($arr)."<br>";
echo array_rand($arr)."<br>";
echo $arr[array_rand($arr)]." ";
echo $arr[array_rand($arr)];
echo $arr[array_rand($arr)]."<br>";

// array_sum()\
$num1 = [3,32,2,1,8,0,8,99,9,4];
echo array_sum($arr)."<br>";
echo array_sum($num1);

// range()
echo "<pre>";
print_r (range(0,10));
$numRg = range(0, count($num1));
var_dump($numRg);

// in_array()
$arr2 = ["apple", "orange", "mango", "lemon", "watermelon"];
$inArr = in_array("apple", $arr2);
echo $inArr."<br>";
echo $arr2[$inArr]."<br>";

// ternary array 
echo in_array("apple", $arr2) ? "true":"false";
echo "<br>";
echo in_array("aaapple", $arr2) ? "true":"false";
echo "<br>";


// array_key_exists( )
$person = [
    "name" => "Kyaw Kyaw",
    "job" => "Doctor",
    "address" => "Sagaing",
    "telephone" => 032314333,
];

echo array_key_exists("name", $person)?"True":"False";
echo "<br>";

echo array_key_exists("salary", $person)?"True":"False";
echo "<br>";
echo "<br>";

var_dump(array_keys($person));
echo "<br>";
var_dump(array_values($person));
echo "<br>";


// explode() , implode()

$name = 'This is football';
var_dump(explode(" ", $name));

$nameExp = explode(" ", $name);
echo join("/", $nameExp)."<br>";
echo join("+", $nameExp)."<br>";
echo implode("***", $nameExp)."<br>";
echo implode("@", $nameExp)."<br>";
echo implode("|", $nameExp)."<br>";

// array_push() add back
$arrCRUD = ["one", "two", "three", "four"];
array_push($arrCRUD, "five");
array_push($arrCRUD, "five");
var_dump($arrCRUD);

// remove back
array_pop($arrCRUD);
var_dump($arrCRUD);

// add front
array_unshift($arrCRUD, "seven");
var_dump($arrCRUD);

// remove front
array_shift($arrCRUD);
var_dump($arrCRUD);

// sorting
$cars = ["Volvo", "BMW", "Toyota"];
// var_dump (sort($cars));
sort($cars);
rsort($cars);

foreach($cars as $car) {
    echo $car."<br>";
}


$person1 = [
    "name" => "Kyaw Kyaw",
    "job" => "Doctor",
    "address" => "Sagaing",
    "telephone" => 032314333,
];

arsort($person1);
var_dump($person1);
echo "<br>";

krsort($person1);
var_dump($person1);
echo "<br>";

shuffle($person1);
var_dump($person1);
echo "<br>";

shuffle($arr);
var_dump($arr);
echo "<br>";

?>


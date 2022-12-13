<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String</title>
</head>
<body>
    <h1>Strings</h1>
    strlen() <br>
    str_word_count() <br>
    strrev() <br>
    str_shuffle() <br>
    strpos(str, search) <br>
    substr(str.length) <br> -->
    strtoupper() <br>
    strtolower() <br>
    strip_tags() <br>
    str_replace(find, new, string) <br>
    trim() <br>
    str_split() <br>
    explode() <br>   
    <hr>
</body>
</html>

<?php
    $name = "kaung thant";
    $name1 = "<h2>kaung thant lay</h2>";
    $name2 = "<h2>   kaung thant  </h2>";
    $name3 = "/ka/ung/than/t";
    echo $name."<br>";
    echo strlen($name)."<br>";
    echo str_word_count($name)."<br>";
    echo strrev($name)."<br>";
    echo str_shuffle($name)."<br>";
    echo strpos($name,'g')."<br>";
    echo strpos($name,'thant')."<br>";
    echo strpos($name,'t')."<br>";
    echo substr($name,0,3)."<br>";
    echo substr($name,0,6)."<br>";
    echo strtoupper($name)."<br>";
    echo strtolower($name)."<br>";
    echo strip_tags($name1)."<br>";
    echo $name1."<br>";
    var_dump(strip_tags($name1));
    echo "<br>";
    echo ucfirst($name)."<br>";
    echo ucwords($name)."<br>";
    echo str_replace("k", '$$$', $name)."<br>";
    // var_dump($name1);
    // echo "<br>";
    echo trim($name2)."<br>";
    echo ltrim($name1)."<br>";
    echo rtrim($name1)."<br>";
    // var_dump(str_split($name1));
    echo "<pre>";
    var_dump(str_split($name1, 3));
    var_dump(str_split($name1, 5));
    echo "</pre>";
    echo "<br>";
    var_dump(explode(" ", $name2));
    echo "<br>";
    var_dump(explode("/", $name3));
    echo "<br>";
    var_dump(explode("/", $name3, 3));
    echo "<br>";
    var_dump(explode("/", $name3, 5));
    echo "<br>";
    var_dump(explode("/", $name3, 6));
    echo "<br>";
    echo crypt($name,30);

    
?>
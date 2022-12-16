<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12 - Encrypt , Decrypt & Password Hash</title>
</head>
<body>
    <h2>Encrypt, Decrypt & Password Hash</h2>

</body>
</html>

<?php
    $name = "Code Lab";
    echo $name."<br>";
    $MdName = md5($name);
    echo $MdName."<br>";
    $shaName = sha1($name);
    echo $shaName."<br>";
    $CyName = crypt($name, "salt");
    echo $CyName."<br>";
    $CyName2 = crypt($name,"kyaw");
    echo $CyName2."<br>";


    $password = "password23";
    echo password_hash($password, PASSWORD_BCRYPT)."<br>";
    $hasPass = password_hash($password, PASSWORD_DEFAULT);
    echo $hasPass."<br>";
    var_dump(password_verify($password, $hasPass));
    echo "<br>";
    echo password_verify($password, $hasPass)?"same password":"wrong password";
?>
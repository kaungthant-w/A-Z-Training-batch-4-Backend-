<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20 - Password Hashing</title>
</head>
<body>
<h3>Password Hashing</h3>
<form action="" method="post">
    <input type="text" name="userEmail" placeholder="User Email"> <br> <br>
    <input type="password" name="userPassword" placeholder="password"> <br> <br>
    <input type="submit" value="Login" name="btnLogin">
</form>
</body>
</html>

<?php 

$email = 'admin@gmail.com';
// $pass = 'admin';
$pass = '$2y$10$B6dAIrJaMeNP8lLeBEkOmekEGZFW5b8kzR6oBtg/lEHq24OZ2NEHe'; //admin
// $hashPass = password_hash('admin', PASSWORD_BCRYPT);
// echo $pass;
// echo "<br>";
// echo $hashPass;
// echo "<br>";

// var_dump(password_verify('admin', '$2y$10$IXO1CVnbPGhVhx8Ba1.uMO1pmlLbtct9MXThqgGuxKcpCDqx7Q7D2')); password check

if(isset($_POST["btnLogin"])) {
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST["userPassword"];
    
    // echo $userEmail."<br>";
    // echo $pass."<br>";
    // echo "<br>";
    // var_dump($pass, $userPassword);
    // echo "<br>";

    // echo "<br>";

    if($email == $userEmail && password_verify($userPassword, $pass)) {
        echo "Login Success!";
    } else {
        echo "Login fail! Try Again!...";
    }
}
?>
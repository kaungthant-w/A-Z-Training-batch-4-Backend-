<?php include "header.php" ?>
<?php include "left_content.php"; ?>
<div class="col-12 col-md-8">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Your password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter Your confirm password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" name="register" value="Register" class="btn btn-dark float-end">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
<?php

if(isset($_POST['register'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    // echo strlen($password);
    if($name !="" & $email !="" & $password !="" & $password != "" & $confirmPassword !="") {
        if(strlen($password) >= 6 && strlen($confirmPassword) >= 6) {
            if($password == $confirmPassword) {
                $_SESSION["email"] = $email;
                $_SESSION["password"] = password_hash($password, PASSWORD_BCRYPT);
                echo "Regsiter Success!";
            
            } else {
                echo "Password not same. Try Again!";
            }
        } else {
            echo "Password must be grather than 6";
        }
    } else {
        echo "Need to fill";
    }
}

?>

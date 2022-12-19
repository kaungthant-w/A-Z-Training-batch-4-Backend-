<?php session_start(); ?> 
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

function checkStrongPassword($password) {
    // echo "hello";
    // echo $password;

    $upperStatus = false;
    $lowerStatus = false;
    $numberStatus = false;
    $specialstatus = false;

    // if(preg_match('/[A-Z]/', $password)) {
    //     echo "contain";
    // } else {
    //     echo "not contain";
    // }

    if(preg_match('/[A-Z]/', $password)) {
        $upperStatus = true;
    }

    if(preg_match('/[a-z]/', $password)) {
        $lowerStatus = true;
    }

    if(preg_match('/[0-9]/', $password)) {
        $numberStatus = true;
    }

    if(preg_match('/[!@$#%^&]/', $password)) {
        $specialstatus = true;
    }

    if($upperStatus && $lowerStatus && $numberStatus && $specialstatus ) {
        // echo "strong password <br>";
        return true;
    } else {
        // echo "weak password <br>";
        return false;
    }

}

// checkStrongPassword("Admin123@3");

if(isset($_POST['register'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    // echo strlen($password);
    if($name !="" && $email !="" && $password !="" && $password != "" && $confirmPassword !="") {
        if(strlen($password) >= 6 && strlen($confirmPassword) >= 6) {
            if($password == $confirmPassword) {
                $status = checkStrongPassword($password);
                // var_dump($status);
                if($status) {
                    $_SESSION["email"] = $email;
                    $_SESSION["password"] = password_hash($password, PASSWORD_BCRYPT);
                    echo "Regsiter Success!";
                } else {
                    echo "Your password is not strong Password! (eg. Contain A-Z a-z 0-9 !@#$%^&)";
                }
            
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

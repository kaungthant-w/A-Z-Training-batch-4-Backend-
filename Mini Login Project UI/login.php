<?php session_start(); ?> 
    <?php include "header.php" ?>
    <?php include "left_content.php"; ?>
    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Your email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Your password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Login" name="login" class="btn btn-dark float-end">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>

    <?php
        if(isset($_POST['login'])) {
            $userEmail = $_POST["email"];
            $password = $_POST["password"];

            // echo $userEmail;
            // echo $password;
            // echo $_SESSION["email"];
            // echo $_SESSION['password'];

           if($userEmail != "" || $password != "") {
                if(isset($_SESSION["email"]) && isset($_SESSION["password"])) {
                    if( $userEmail == $_SESSION["email"] && password_verify($password, $_SESSION["password"])) {
                        echo "login success!";
                    } else {
                        echo "login fail! Try Again...";
                    }
                } else {
                    echo "Account doesn't exist.";
                }
           } else {
            echo "Need to fill";
           }

        // if ($userEmail != "" || $password != "") {
        //         if ($userEmail == $_SESSION["email"] && password_verify($password, $_SESSION["password"])) {
        //             echo "login success!";
        //         } else {
        //             echo "login fail! Try Again...";
        //         }
        // } else {
        //     echo "Need to fill";
        // }
        
    }

    ?>
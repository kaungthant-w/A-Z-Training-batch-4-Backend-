<?php 
    $errorName = $errorEmail = $errorPhone = $errorAddress = "";
    $name = $email = $phone = $address = "";
    if(isset($_POST["btnSave"])) {

        if($_POST["name"] == "" && $_POST["name"] == null && empty($_POST["name"])) {
            $errorName = "Please fill Name field!";
            
        } else {
            $name = $_POST["name"];
        }

        if($_POST["email"] == "" && $_POST["email"] == null && empty($_POST["email"])) {
            $errorEmail = "Please fill Email field!";
            
        } else {
            $email = $_POST["email"];
        }

        if($_POST["phone"] == "" && $_POST["phone"] == null && empty($_POST["phone"])) {
            $errorPhone = "Please fill Phone field!";
            
        } else {
            $phone = $_POST["phone"];
        }

        if($_POST["address"] == "" && $_POST["address"] == null && empty($_POST["address"])) {
            $errorAddress = "Please fill Address field!";
            
        } else {
            $address = $_POST["address"];
        }

        if($name != "" && $email != "" && $phone != "" && $address != "" ) {
            echo $name."<br>";
            echo $email."<br>";
            echo $phone."<br>";
            echo $address."<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offeset-3 border shadow m-auto">
                <form method="post">
                    <div class="my-3 px-2">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                        <small class="text-danger"><?php echo $errorName; ?></small>
                    </div>

                    <div class="my-3 px-2">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                        <small class="text-danger"><?php echo $errorEmail; ?></small>
                    </div>

                    <div class="my-3 px-2">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
                        <small class="text-danger"><?php echo $errorPhone; ?></small>
                    </div>

                    <div class="my-3 px-2">
                        <label for="address">Address:</label>
                        <textarea name="address" class="form-control" id="address" cols="30" rows="5"></textarea>
                        <small class="text-danger"><?php echo $errorAddress; ?></small>
                    </div>
                    <div class="my-3 px-2 float-end">
                        <input type="submit" value="Save" name="btnSave" class="btn btn-dark text-white">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
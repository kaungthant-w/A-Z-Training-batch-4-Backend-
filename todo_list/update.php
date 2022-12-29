<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="mt-5 text-center">
    <h1 class="h3">Update Todo <a href="read.php" class="badge bg-info text-decoration-none">Cancel</a></h1>

    <?php
        require_once("db_connection.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM work WHERE id=$id";

        // echo "<pre>";
        $query = mysqli_query($conn, $sql);
        // print_r(mysqli_fetch_assoc($query));
        $data = mysqli_fetch_assoc($query); // get data

        if(isset($_POST['updatedBtn'])) {
            $Updateid = $_POST["taskId"];
            $taskName = $_POST['taskName'];

            if($taskName == null || $taskName == "") {
                echo "<small class='text-danger'>Task Name is required!</small>";
            } else {
                $updateSQL = "UPDATE work SET name='$taskName' WHERE id=$Updateid ";

                if(mysqli_query($conn, $updateSQL)) {
                    header("location:read.php");

                } else {
                    echo "Update error";
                }
            }
        }

    ?>

    <form action="" method="POST">
        <input type="hidden" name="taskId" value="<?php echo $data['id']; ?>">
        <div class=" form-group mt-3">
            <label for="name" class=" form-label">Your Tasks</label>
            <input type="text" name="taskName" id="name" class="form-control w-25 mx-auto" value="<?php echo $data['name']; ?>">
            <button name="updatedBtn" class="mt-3 btn btn-outline-primary">Update</button>
        </div>
    </form>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>


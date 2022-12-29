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
    <h1 class="h3">Todo List <a href="read.php" class="badge bg-info text-decoration-none">View</a></h1>
    <form action="" method="post">
        <div class=" form-group mt-3">
            <label for="name" class=" form-label">Your Tasks</label>
            <input type="text" name="taskName" id="name" placeholder="Enter your Tasks...">
            <button name="addBtn" class="btn btn-primary">Add</button>
        </div>
    </form>

    <?php
        require_once ("db_connection.php");
        
        if(isset($_POST['addBtn'])) {

            $taskName = $_POST['taskName'];

            if($taskName == null || $taskName =="") {
                echo "<div class='text-danger'>Task name is required...</div>";
            } else{
                $sql = "INSERT INTO work(name)VALUES('$taskName')";
                if(mysqli_query($conn, $sql)) {
                    echo "<div class='text-success'>Insert Success...</div>";
                } else {
                    echo "Query Fail...";
                }
            }
              
        }

    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
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
    <h1 class="h3">Task List <a href="create.php" class="badge bg-primary text-decoration-none">Create</a></h1>
    
    <table class="table m-auto mt-5 w-50">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                require_once("db_connection.php");
                $sql = "SELECT * FROM work";
                $query = mysqli_query($conn, $sql);
                $totalRow = mysqli_num_rows($query);

                while($row = mysqli_fetch_assoc($query)) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>Code Lab</td>
                        <td>1.2.2022</td>
                        <th>
                            <a class='btn btn-outline-primary' href='#'>Update</a> 
                            <a class='btn btn-outline-danger'  href='#'>Delete</a>
                        </th>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db connection</title>
</head>
<body>
    <h1>Database connection running ...</h1>
    <?php
        // mysqli_connect('hostname', 'userName', 'password', 'databaseName');
        $connection = mysqli_connect("localhost", 'root', '', 'test');
        if($connection) {
            echo "<h1>database connect success!</h1>";
        } else {
            die("Connection fail...". mysqli_connect_error());
        }
    ?>
</body>
</html>
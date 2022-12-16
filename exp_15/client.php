<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 60vh;
        }
    </style>
</head>
<body>
    <h3>Client Site</h3>
    <form action="./server.php" method="post" enctype="multipart/form-data"> 
        <input type="text" name="firstName"> <br>
        <input type="text" name="secondName"> <br>

        <select name="gender" id="gender"> 
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br>

        <input type="file" name="photo"> <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>
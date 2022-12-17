<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h3>File Upload</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photoFile"> <br><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>
<?php
if(isset($_FILES["photoFile"])) {
    // echo "<pre>";
    // print_r($_FILES);
    // $imgName = $_FILES['photoFile'];
    // print_r($imgName);
    $imgName = $_FILES["photoFile"]['name'];
    $tmpName = $_FILES["photoFile"]['tmp_name'];
    // print_r($imgName);
    // echo "<br>";
    // print_r($tmpName);

    $target_file = 'images/'.$imgName;
    if(move_uploaded_file($tmpName, $target_file)) {
        move_uploaded_file($tmpName, $target_file);
        echo "success uploading";
    } else {
        echo "error";
    }

}

?>
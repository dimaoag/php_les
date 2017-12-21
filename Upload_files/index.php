<?php
if (isset($_FILES['image'])){
    $errors = array();
    $filename = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp_name = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));


    $expension = array('jpeg', 'jpg', 'img');

    if ($file_size > 2097152){
        $errors[] = 'File would be more 2mb';
    }

    if (empty($errors) == true){
        move_uploaded_file($file_tmp_name, 'images/'.$filename);
        echo 'Success!';
    }else{
        print $errors;
    }


}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Upload">

    <ul>
        <li>File name: <?= $_FILES['image']['name'] ?></li>
        <li>File size: <?= $_FILES['image']['size'] ?></li>
        <li>File type: <?= $_FILES['image']['type'] ?></li>
    </ul>
</form>
</body>
</html>

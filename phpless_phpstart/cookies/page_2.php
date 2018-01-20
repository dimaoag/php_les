<?php
if(isset($_COOKIE['name'])){
    $username = $_COOKIE['name'];
}
else {
    $username = 'Guest';
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
    <h1>Page 2</h1>
    <p>Hello: <?php echo $username; ?></p>
    <a href="page_1.php"> Page 1</a>
</body>
</html>

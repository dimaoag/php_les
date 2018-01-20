<?php
if (isset($_REQUEST['username']) && (!empty($_REQUEST['username']))){
    $username = $_REQUEST['username'];
    setcookie('name', $username, time() + 5);
    }
    elseif(isset($_COOKIE['name'])){
    $username = $_COOKIE['name'];
    }
else{
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
<h1>Page 1</h1>
<a href="page_2.php"> Page 2</a>
<br>
<p>Hello: <?php echo $username; ?></p>
<form action="page_1.php" method="post">
    <input type="text" name="username">
    <input type="submit" name="submit" value="Send">
</form>
</body>
</html>

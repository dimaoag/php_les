<?php
if (isset($_REQUEST['submit'])){
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];

    if (!empty($a) && !empty($b) && !empty($c)){
        echo 'Success';
    } else {
        echo "You input a = $a b = $b c = $c.";
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
<form action="page_1.php" method="post">
    A: <input type="text" name="a"><br>
    B: <input type="text" name="b"><br>
    C: <input type="text" name="c"><br>
    <input type="submit" name="submit" value="Send">
</form>
</body>
</html>

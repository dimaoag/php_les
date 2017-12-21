<?php
session_start();


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
<?php
$_SESSION['color'] = 'red';
$_SESSION['page'] = 'home';

echo $_SESSION['color'];
echo $_SESSION['page'];

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

session_unset();
session_destroy();
?>
</body>
</html>

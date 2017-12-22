<?php
unset($_COOKIE['user_id']);
unset($_COOKIE['username']);
setcookie('user_id', '', -1);
setcookie('username', '', -1);

$path = 'http://' . $_SERVER['HTTP_HOST'] . '/php_less/test_auth/home.php';
header("Location: " . $path);
?>
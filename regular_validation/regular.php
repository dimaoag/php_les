<?php
    // https://github.com/Respect/Validation
    require_once "regular.php";
    echo $_SERVER['SCRIPT_FILENAME'];

    $s = "1515sss";

    function check_login($str){
        if (preg_match('/^[A-z0-9]{3,10}$/', $str)){
            echo "Yes";
        }else
            echo "No";
    }

    function check_email($str){
        if (preg_match('/^([A-z0-9_\.-]+)@([A-z0-9_\.-]+)\.([A-z\.]{2,6})$/', $str)){
            echo "Yes";
        }else
            echo "No";
    }

    function check_password($str){
        if (preg_match('/^[A-z0-9]{3,15}$/', $str)){
            echo "Yes";
        }else
            echo "No";
    }

    function check_captcha($str){
        if (preg_match('/^[0-9]{1,5}$/', $str)){
            echo "Yes";
        }else
            echo "No";
    }

    echo "<br>";
    check_password($s);

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
<form action="validate.php">
    Login:  <input type="text"  name="login" value="">
    Email:  <input type="text" name="email" value="">
    Password:  <input type="password" name="password" value="">
    <input type="submit" name="submit" value="Check">
</form>
</body>
</html>

<?php


// counter visiting on you web site

    //$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
    //$counter++;
    //setcookie('counter', $counter);
    //echo $counter;


$cookie_name = 'user';
$cookie_value = 'cookie user';

setcookie($cookie_name, $cookie_value, time()+86400); // one day in seconds

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

if(!isset($_COOKIE[$cookie_name])){
    echo "cookie named = $cookie_name";
    echo "cookie value = $cookie_value";
}

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";



if($_COOKIE[$cookie_name] == $cookie_value){  //access
    echo "cookie are enabled";
}



//if(count($_COOKIE) > 0){
//    echo "cookie are enabled"; // on
//}
//else{
//    echo "cookie are disabled"; // off
//}


?>

</body>
</html>

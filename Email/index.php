<?php

//phpinfo();
$to = "dimaoag@gmail.com";
$from = "dimatest@gmail.com";
$subject = "Test email";
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$message = "Hello my Email\r\n Line 2\r\n Line 3"; // line max 70 chars
$message = wordwrap($message, 70, "\r\n");

 // text/html
$headers  = "Content-type: text/plain; charset=utf-8\r\n";
$headers .= "From: $from\r\n";
$headers .= "Reply-to: $from\r\n";

$res = mail($to, $subject,$message, $headers);

if ($res == true){
    echo 'Success!';
}else{
    echo 'Error';

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

</body>
</html>

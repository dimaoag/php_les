<?php

$to = 'dimaoag@gmail.com';
$subject = 'This is test email';
$message = "<h1>Hello!</h1><p>Thank's for testing!</p>";

$headers = "From: The Sender Name <info@mysite.loc>\r\n";
$headers .= "Reply-To: replyto@indomysite.loc\r\n";
$headers .= "Content-type: text/html\r\n";

mail($to,$subject,$message,$headers);
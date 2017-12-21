<?php
require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mailer = new PHPMailer();
$mailer->CharSet = 'UTF-8';
$mailer->IsSMTP();
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = "tls";
$mailer->Host = "smtp.gmail.com";
$mailer->Port = 587;
$mailer->Username = "dimaoag@gmail.com";
$mailer->Password = "1926odag3";  // Change password!!!!!!!!!!!
$mailer->SetFrom('dimaoag@gmail.com','Dima');
$mailer->FromName = "my_site_Dima";
$mailer->AddAddress("dimaoa@mail.ru");
$mailer->Subject = "Hello Vados";
$mailer->Body = "<H3>Hello! Vasya is Apsend Today.</H3>";
$mailer->IsHTML (true);

if (!$mailer->Send())
{
    echo "Error: $mailer->ErrorInfo";
}
else
{
    echo "Message Sent!";
}

?>

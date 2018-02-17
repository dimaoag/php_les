<?php
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mailer = new PHPMailer();
$mailer->CharSet = 'UTF-8';
$mailer->Encoding = '8bit';
//$mailer->IsSMTP();
$mailer->Host = "mail.adm.tools";
$mailer->SMTPAuth = false;
$mailer->Username = 'info@mysite.vpsground.site';
$email->Password ='123456vps';
$mailer->SMTPSecure = false;
$mailer->Port = 25;
$mailer->ContentType = "text/html; charset=utf-8\r\n";
$mailer->SetFrom("info@mysite.vpsground.site\r\n");
$mailer->FromName = "my_site_Dima";




$mailer->AddAddress("dimaoag@gmail.com");
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

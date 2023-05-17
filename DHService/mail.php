<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'wes1-smtp.wedos.net';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 465;
$phpmailer->SMTPSecure= PHPMailer::ENCRYPTION_SMTPS;
$phpmailer->Username = 'info@dhservices.cz';
$phpmailer->Password = '123DHS!rvices';

$phpmailer->From = 'info@dhservices.cz';
$phpmailer->addAddress('karelfila05@gmail.com', 'Karel Fíla');
$phpmailer->addReplyTo($_POST["email"]);
$phpmailer->FromName = $_POST["name"];
$phpmailer->Subject = $_POST["subject"];
$phpmailer->Body = $_POST["message"];



$phpmailer->send();
header("Location: /");

?>

<?php

$name = $_POST("name");
$from = $_POST("email");
$subject = "Wiadomosc z formularza";
$to = "mateusztalarek107@gmail.com";
$message = $_POST("msg");

$txt = "Imie " . $name . "\r\n" . "Email: " . $from . "\r\n" . "\r\n" . "Treść: " . $message;

$headers = "From: " . $from . "\r\n";
$headers.= "Reply-To: " . $from . "\r\n";

$mail_status = mail($to, $subject, $txt, $headers);

if($mail_status) {
    header("Location: ?mail_status=sent")
}
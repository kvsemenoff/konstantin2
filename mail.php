<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
/* получатели */
$to = "mi@konstantin-wettig.com"; . ", " ; 
$to .= "kw@konstantin-wettig.com";

/* тема/subject */
$subject = "Message from " . $name;

$message = "Name: " . $name . "<br>";
$message .= "E-mail: " . $email . "<br>";
$message .= "Phone: " . $phone . "<br><br>";
$message .= "Message: " . $_POST["message"];


/* Для отправки HTML-почты вы можете установить шапку Content-type. */
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

mail($to, $subject, $message, $headers);

header("Location: kontakt/");
?>
<?php

$name = $_POST['name'];
$visitorEmail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailFrom = 'info@yourwebsite.com(my domain name)';

$emailSubject = 'New Form Submission';

$emailBody = "User Name: $name.\n".
    "User Email: $visitorEmail.\n".
    "User Subject: $subject.\n".
    "User Message: $message";

$to = 'judin-ilya@yandex.ru';

$headers = "From: $emailFrom \r\n";

$headers .= "Reply-To: $visitorEmail \r\n";

mail($to, $emailSubject, $emailBody, $headers);

header("Location: contact.html");
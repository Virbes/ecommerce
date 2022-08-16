<h1>HOLa</h1>

<?php


$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = 'UTF-8';

$body = 'Cuerpo del correo de prueba';

$mail->IsSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = true;
$mail->Username   = 'francisco.virbes.457@gmail.com';
$mail->Password   = 'theelderscrolsvsskyrim';
$mail->SetFrom('francisco.virbes.457@gmail.com', "Ferreteria AGNA");
$mail->AddReplyTo('no-reply@mycomp.com','no-reply');
$mail->Subject    = 'Correo de prueba PHPMailer';
$mail->MsgHTML($body);

$mail->AddAddress('francisco.virbes@gmail.com');
$mail->send();


?>
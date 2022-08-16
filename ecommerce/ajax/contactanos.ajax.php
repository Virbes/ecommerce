<?php

/* Envio de contactanos al correo */

require '../extensiones/PHPMailer/src/Exception.php';
require '../extensiones/PHPMailer/src/PHPMailer.php';
require '../extensiones/PHPMailer/src/SMTP.php';

$body ='
    <div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
        <div style="position:relative; margin:auto; width:600px; background:white; padding-bottom:20px">
            <center>
                <h3 style="font-weight:100; color:black;">¡CORREO DE CONTACTANOS!</h3>
                <hr style="width:80%; border:1px solid #ccc">
                <h4 style="font-weight:100; color:black; padding:0px 20px;">Nombre: '.$_POST["nombre"].'</h4>
                <h4 style="font-weight:100; color:black; padding:0px 20px;">De: '.$_POST["email"].'</h4>
                <h4 style="font-weight:100; color:black; padding:0px 20px;">Teléfono: '.$_POST["telefono"].'</h4>
                <h4 style="font-weight:100; color:black; padding:0px 20px">'.$_POST["mensaje"].'</h4>
                <hr style="width:80%; border:1px solid #ccc">
            </center>
        </div>
    </div>
';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = 'UTF-8';

$mail->IsSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = true;
$mail->Username   = 'francisco.virbes.457@gmail.com';
$mail->Password   = 'thetreasures1';
$mail->SetFrom('francisco.virbes.457@gmail.com', "Ferreteria AGNA");
$mail->AddReplyTo('no-reply@mycomp.com', 'no-reply');
$mail->Subject    = 'HAS RECIBIDO UN MENSAJE DE "CONTACTANOS"';
$mail->MsgHTML($body);

$mail->addAddress('francisco.virbes.457@gmail.com');
$mail->Send();

require_once "../modelos/contactanos.modelo.php";
ModeloContactanos::addContact($_POST['nombre'], $_POST['email'], $_POST['telefono'], $_POST['mensaje']);
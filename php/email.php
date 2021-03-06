<?php

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

require_once 'class.phpmailer.php';

$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch

try {
  $mail->AddReplyTo($_POST['email'], $_POST['nombre']);
  $mail->AddAddress('demian@e-roy.com', 'Middle Summit');
  $mail->SetFrom('contact@middlemamagerssummit', 'Middle Managers Summit');
  $mail->Subject = utf8_decode('Nueva Solicitud de Inscripción');
  $mail->AltBody = 'Para ver este mensaje debera contar con un cliente de email HTML';
  
  $body = '<h3>Nueva Solicitud de Inscripci&oacute;n</h3>';
  $body .= 'Nombre: ' . $_POST['nombre'] . '<br>';
  $body .= 'Email: ' . $_POST['email'] . '<br>';
  $body .= 'Tel&eacute;fono: ' . $_POST['tel'] . '<br>';
  $body .= 'Empresa: ' . $_POST['empresa'] . '<br>';
  $body .= 'Cargo: ' . $_POST['cargo'] . '<br>';
  $body .= 'Tipo de Pase: ' . utf8_decode($_POST['pase']) . '<br>';
  
  $mail->MsgHTML($body);
  $mail->Send();
  header("Location: http://$host$uri/inscripciones.php?e=1");
} catch (phpmailerException $e) {
  //echo $e->errorMessage(); //Pretty error messages from PHPMailer
  header("Location: http://$host$uri/inscripciones.php?e=2");
} catch (Exception $e) {
  //echo $e->getMessage(); //Boring error messages from anything else!
  header("Location: http://$host$uri/inscripciones.php?e=2");
}
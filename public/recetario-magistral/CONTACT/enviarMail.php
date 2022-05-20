<?php

require 'conn.php';



$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$destino = "$mail";
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$estado = 'Ingresado';

$query_insert = mysqli_query($conexion,"INSERT INTO contacto(mail,nombre,telefono,mensaje,estado) VALUES('$mail','$nombre','$telefono','$mensaje','$estado')");


$msj = "Hola ".$nombre.":<br /><br />

nos pondremos en contancto a la brevedad....";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';




$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.narma.cl';                       //Set the SMTP server to send through

    //servers
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cotizar@narma.cl';       //SMTP username
    $mail->Password   = 'Narma2022@';                            //SMTP password
    $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('cotizar@narma.cl', 'NarmaContacto');
    $mail->addAddress('cotizar@narma.cl');     //Add a recipient
    $mail->addAddress($destino);          
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contacto Narma';
    $mail->Body    = $msj;

    $mail->send();
    echo 'mensaje enviado';
    header("Location: contacts.php");
} catch (Exception $e) {
    echo 'mesaje no enviado: ', $mail->ErrorInfo;
}
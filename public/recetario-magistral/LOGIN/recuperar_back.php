<?php
require 'conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$alert='';
if (empty($_POST['username'])) {
    $alert='<p class="alert alert-danger">todos los campos son obligatorio</p>';
}
else
{
    $username = $_POST['username'];

    $sql = "SELECT * FROM usuario WHERE usuario='$username'";


    $stmt = mysqli_query($conexion,$sql);

    $filas = mysqli_fetch_array($stmt);
        
    if ($filas > 0) {
        
        $sql = ("SELECT * FROM usuario WHERE usuario = '$username'");
        // $stmt->execute(array($username));
        $stmt = mysqli_query($conexion,$sql);

        // $resultado =  sqlsrv_fetch_array($stmt);
        $resultado =  $stmt->fetch_assoc();



        $clave = $resultado['clave'];

        $msj = "Hola Estimado:<br /><br />
        Tu Contraseña es :".$clave.".<br /><br />
        Para ingresar haz click en el siguiente enlace<br /><br />
        http://localhost/nueva%20carpeta/narma/site/login.php";


        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through

            //servers
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'memo.parkour@gmail.com';       //SMTP username
            $mail->Password   = 'xnjahhbirygwtijy';                            //SMTP password
            $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('memo.parkour@gmail.com', 'NarmaContacto');
            $mail->addAddress('memo.parkour@gmail.com');     //Add a recipient
            $mail->addAddress($username);          
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Recuperacion de clave de acceso';
            $mail->Body    = $msj;

            $mail->send();
            echo 'mensaje enviado';
            header('Location: login.php');
        } catch (Exception $e) {
            echo 'mesaje no enviado: ', $mail->ErrorInfo;
        }
    } else {
        $alert='<p class="alert alert-danger">Usuario o contraseña incorrectas</p>';
    }
}
mysqli_close($conexion);
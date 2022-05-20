<?php


$servername = "localhost";
$username = "cna79277";
$password = "";
$dbname = "narma";

// Create connection
$conn1 = mysqli_connect("localhost","cna79277","PPkTstVxEJjqdaKnSDHg","cna79277_narma");
// Check connection
if (!$conn1) {
  die("Connection failed: " . mysqli_connect_error());
}


$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];
$email=$_POST["correo"];
$destino = "$email";
$mensaje=$_POST["mensaje"];
$rpfarma_sucursal='';
$asociado_sucursal='';
$asociado_sucursal1='';
$comunadespacho='';
$direcciondespacho='';
$referencia='';
$estado ="ingresado";
$precio =0;
$direccion = 'Av. Providencia 1438, Providencia';

$password = $_POST['password'];
$rol=2;

$permitidos = array("image/jpg","image/jpeg","image/gif","image/png");
$limite_kb=100;
$ruta= "IMAGENES_RECETAS/".$_FILES['imagen']['name'];
move_uploaded_file($_FILES["imagen"]["tmp_name"] , $ruta);



$sql = "INSERT INTO registro (mail,nombre,telefono,mensaje,imagen,precio,estado,direccion,rpfarma_sucursal,asociado_sucursal,comunadespacho,direcciondespacho,
referencia) VALUES ('$destino','$nombre','$telefono','$mensaje','$ruta','$precio','$estado','$direccion','$rpfarma_sucursal','$nombrefarmacia',
'$comunadespacho','$direcciondespacho', '$referencia')";


$result1=mysqli_query($conn1, $sql);
if ($result1) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
}

$query_insert = mysqli_query($conn1,"INSERT INTO usuario(usuario,clave,rol) VALUES('$email','$password','$rol')");


$msj = "Hola ".$nombre.":<br /><br />

Tu receta magistral ha sido registrada y a la brevedad nos pondremos en contacto.<br /><br />
 
Para hacer seguimiento y revisar tu solicitud haz click en el siguiente enlace<br /><br />

Usuario : ".$email."<br /><br />

Clave : ".$password."<br /><br />

https://narma.cl/LOGIN/login.php";


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
    $mail->Subject = 'Cotizador De Recetas Medicas';
    $mail->Body    = $msj;

    $mail->addAttachment($ruta, 'imagenReceta');

    $mail->send();
} catch (Exception $e) {
    echo 'mesaje no enviado: ', $mail->ErrorInfo;
}

mysqli_close($conn1);

?>

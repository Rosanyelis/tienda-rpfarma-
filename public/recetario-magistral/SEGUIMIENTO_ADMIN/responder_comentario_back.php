<?php

require 'conn.php';

    $id = $_POST['id'];  
    $alert='';
    
      $sql = ("SELECT * FROM registro WHERE id_registro = '$id'");
    $stmt = mysqli_query($conexion,$sql);
    $resultado =  $stmt->fetch_assoc();
    $correo = $resultado['mail'];
    $destino = "$correo";
    $nombre = $resultado['nombre'];
    $msj = "Hola ".$nombre.":<br /><br />

    tienes un nuevo comentario....<br /><br />
    
    haz click en el enlace para hacer seguimiento a tu solicitud : https://narma.cl/LOGIN/login.php";


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';


    

    if (empty($_POST['mensaje']) ) 
    {
        echo'<p class="alert alert-danger">mensaje obligatorio</p>';
    }
    else
    {
        $sql = "SELECT * FROM comentarios WHERE id_registro = '$id'";
        $stmt = mysqli_query($conexion,$sql);
        $filas = mysqli_fetch_array($stmt);
        if ($filas > 0) {
            //con comentarios
            $mensaje = $_POST['mensaje'];   
            $user =   $_POST['user'];   
            $id = $_POST['id'];  

            $query_insert = mysqli_query($conexion,"INSERT INTO comentarios(id_registro,nombre,mensaje) VALUES('$id','$user','$mensaje')");
            
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
        $mail->Subject = 'Nuevo Comentario De Farmacia';
        $mail->Body    = $msj;
    
        $mail->send();
        header('Location: responder_admin.php?id='.$id);
    } catch (Exception $e) {
        echo 'mesaje no enviado: ', $mail->ErrorInfo;
    }



            
        }else{
            //sin comentarios
            if ($_POST['PR'] == 0) 
            {
                //cuando viene sin precio puede ser por no a ver materias prima

                $mensaje = $_POST['mensaje'];   
                $user =   $_POST['user'];   
                $id = $_POST['id']; 
                $estado = 'Cotizado'; 
    
                $query_insert1 = mysqli_query($conexion,"INSERT INTO comentarios(id_registro,nombre,mensaje) VALUES('$id','$user','$mensaje')");

                $query_modificar = mysqli_query($conexion,"UPDATE registro SET estado='$estado' WHERE id_registro ='$id'");
                
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
        $mail->Subject = 'Nuevo Comentario De Farmacia';
        $mail->Body    = $msj;
    
        $mail->send();
        header('Location: responder_admin.php?id='.$id);
    } catch (Exception $e) {
        echo 'mesaje no enviado: ', $mail->ErrorInfo;
    }


            }else{
                //con precio

                $mensaje = $_POST['mensaje'];   
                $user = $_POST['user'];
                $id = $_POST['id'];
                $estado = 'Cotizado';
                $PR = $_POST['PR'];
                $PD = $_POST['PD'];
                $PT = $_POST['PT'];
                $TD = $_POST['TD'];
                
                $query_modificar = mysqli_query($conexion,"UPDATE registro SET estado='$estado' WHERE id_registro ='$id'");
                $query_modificar = mysqli_query($conexion,"UPDATE registro SET precio='$PT' WHERE id_registro ='$id'");
                $query_insert2 = mysqli_query($conexion,"INSERT INTO pago(id_registro,precio_receta,precio_depacho,precio_total,dias_despacho,mensaje,usuario) VALUES('$id','$PR','$PD','$PT','$TD','$mensaje','$user')");
              
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
        $mail->Subject = 'Nuevo Comentario De Farmacia';
        $mail->Body    = $msj;
    
        $mail->send();
        header('Location: responder_admin.php?id='.$id);
    } catch (Exception $e) {
        echo 'mesaje no enviado: ', $mail->ErrorInfo;
    }

            }
        }
    }
?>
<?php
/**
 * Pagina del comercio para redireccion del pagador
 * A esta página Flow redirecciona al pagador pasando vía POST
 * el token de la transacción. En esta página el comercio puede
 * mostrar su propio comprobante de pago
 */
require '../../../conn.php';
require(__DIR__ . "/../../lib/FlowApi.class.php");

try {
	//Recibe el token enviado por Flow
	if(!isset($_POST["token"])) {
		throw new Exception("No se recibio el token", 1);
	}
	$token = filter_input(INPUT_POST, 'token');
	$params = array(
		"token" => $token
	);
	//Indica el servicio a utilizar
	$serviceName = "payment/getStatus";
	$flowApi = new FlowApi();
	$response = $flowApi->send($serviceName, $params, "GET");
	
	$floworden = $response['flowOrder'];
	$oredencomer =$response['commerceOrder'];
	$fecha = $response['requestDate'];
	$estado = $response['status'];
	$metodo = $response['subject'];
	$monto = $response['amount'];
	$mail = $response['payer'];
	
	
    $sql = "INSERT INTO detalles_pago(orden_flow,codigo_interno,fecha_pago,estado,metodo,monto,correo) VALUES('$floworden','$oredencomer','$fecha','$estado','$metodo','$monto','$mail')";

    if (mysqli_query($conexion, $sql)) {
        
    } else {
        
    }
    
    if($estado == 2){
        $x = 'Pagado';
        $sql1 = ("SELECT * FROM registro WHERE mail = '$mail'");
        $stmt = mysqli_query($conexion,$sql1);
        $resultado =  $stmt->fetch_assoc();
        
        $id_registro = $resultado['id_registro'];
        $mail = $resultado['mail'];
        $nombre = $resultado['nombre'];
        $telefono = $resultado['telefono'];
        $mensaje = $resultado['mensaje'];
        $imagen = $resultado['imagen'];
        $creacion = $resultado['creacion'];
        $precio = $resultado['precio'];
        $estado = $resultado['estado'];
        $direccion = $resultado['direccion'];
        
        $sql2 = "INSERT INTO registro_pago(id_registro_pago,mail,nombre,telefono,mensaje,imagen,creacion,precio,estado,direccion) VALUES('$id_registro','$mail','$nombre','$telefono','$mensaje','$imagen','$creacion','$precio','$x','$direccion')";
        if (mysqli_query($conexion, $sql2)) {
            
        } else {
            
        }
        
        $sql3 = "DELETE FROM registro WHERE id_registro = '$id_registro'";

        if (mysqli_query($conexion, $sql3)) {
            
        } else {
            
        }
        
        
        header('Location: ../../../../index.php');
        
    }

} catch (Exception $e) {
	echo "Error: " . $e->getCode() . " - " . $e->getMessage();
}

?>

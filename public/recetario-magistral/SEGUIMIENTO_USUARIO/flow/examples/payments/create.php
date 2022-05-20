<?php

$pago =$_GET['id'];
$mail =$_GET['mail'];
/**
 * Ejemplo de creación de una orden de cobro, iniciando una transacción de pago
 * Utiliza el método payment/create
 */
require(__DIR__ . "/../../lib/FlowApi.class.php");

//Para datos opcionales campo "optional" prepara un arreglo JSON
$optional = array(
	"rut" => "9999999-9",
	"otroDato" => "otroDato"
);
$optional = json_encode($optional);

//Prepara el arreglo de datos
$params = array(
	"commerceOrder" => rand(1100,2000),
	"subject" => "uso plataforma",
	"currency" => "CLP",
	"amount" => $pago,
	"email" => "$mail",
	"paymentMethod" => 9,
	"urlConfirmation" => Config::get("BASEURL") . "/SEGUIMIENTO_USUARIO/flow/examples/payments/confirm.php",
	"urlReturn" => Config::get("BASEURL") ."/SEGUIMIENTO_USUARIO/flow/examples/payments/result.php"
);
//Define el metodo a usar
$serviceName = "payment/create";

try {
	// Instancia la clase FlowApi
	$flowApi = new FlowApi;
	// Ejecuta el servicio
	$response = $flowApi->send($serviceName, $params,"POST");
	//Prepara url para redireccionar el browser del pagador
	$redirect = $response["url"] . "?token=" . $response["token"];
	header("location:$redirect");
} catch (Exception $e) {
	echo $e->getCode() . " - " . $e->getMessage();
}

?>
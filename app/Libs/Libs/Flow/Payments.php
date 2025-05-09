<?php
namespace App\Libs\Flow;

use App\Libs\Flow\FlowApi;
use Exception;


class Payments
{
    /**
     * Funcion para generar una orden de pago y redirecciona directamente
     * al sitio web de flow para procesar como corresponde en su plataforma
     * @param string $serviceName indica el metodo a usar para la orden
     * @param array $params datos a ser enviados
     */
    public function create($params)
    {
        try {
            //Define el metodo a usar
            $serviceName = "payment/create";
            // Instancia la clase FlowApi
            $flowApi = new FlowApi;
            // Ejecuta el servicio
            $response = $flowApi->send($serviceName, $params,"POST");
            //Prepara url para redireccionar el browser del pagador
            $redirect = $response["url"] . "?token=" . $response["token"];
            // realiza una redireccion a la url generada por la api en laravel
            return redirect($redirect);

        } catch (Exception $e) {
            echo $e->getCode() . " - " . $e->getMessage();
        }
    }

    /**
     * Pagina del comercio para recibir la confirmación del pago
     * Flow notifica al comercio del pago efectuado
     */
    public function confirm($token)
    {
        try {
            if(!isset($token)) {
                throw new Exception("No se recibio el token", 1);
            }
            $params = array(
                "token" => $token
            );
            $serviceName = "payment/getStatus";
            $flowApi = new FlowApi();
            $response = $flowApi->send($serviceName, $params, "GET");

            //Actualiza los datos en su sistema
            dd($response);

        } catch (Exception $e) {
            echo "Error: " . $e->getCode() . " - " . $e->getMessage();
        }
    }

    public function result($token)
    {
        try {
            //Recibe el token enviado por Flow
            if(!isset($token)) {
                throw new Exception("No se recibio el token", 1);
            }
            $params = array(
                "token" => $token
            );
            //Indica el servicio a utilizar
            $serviceName = "payment/getStatus";
            $flowApi = new FlowApi();
            $response = $flowApi->send($serviceName, $params, "GET");

            return $response;

        } catch (Exception $e) {
            echo "Error: " . $e->getCode() . " - " . $e->getMessage();
        }
    }
}

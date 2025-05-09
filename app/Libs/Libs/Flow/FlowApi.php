<?php
namespace App\Libs\Flow;

use Exception;

/**
 * Clase cliente del Api2 de Flow
 * @Filename: FlowApi.class.php
 * @version: 2.1
 * @Author: flow.cl
 * @Email: csepulveda@tuxpan.com
 * @Date: 28-04-2017 11:32
 * @Last Modified by: Carlos Sepulveda
 * @Last Modified time: 28-04-2017 11:32
 */

class FlowApi {

	protected $apiKey;
	protected $secretKey;
    protected $Apiurl;
    protected $baseUrl;


	public function __construct() {
		// $this->apiKey = "42E9F2AF-8B4D-4F83-A544-1L3ABDDEFFE0";
		// $this->secretKey = "5dd0eac4e3c02de4eceac81434233e3509e6f26f";
        // $this->Apiurl = "https://www.flow.cl/api";
        // $this->baseUrl = "https://farmaciasrpfarma.cl";
        $this->apiKey = "30BFC97A-6166-4AFA-BC59-31BLDD2922C2";
		$this->secretKey = "4c910b35f7424806fe919795e3e3eff094da6f6e";
        $this->Apiurl = "https://sandbox.flow.cl/api";
        $this->baseUrl = "https://farmaciasrpfarma.cl";
	}


	/**
	 * Funcion que invoca un servicio del Api de Flow
	 * @param string $service Nombre del servicio a ser invocado
	 * @param array $params datos a ser enviados
	 * @param string $method metodo http a utilizar
	 * @return string en formato JSON
	 * @throws Exception
	 */
	public function send( $service, $params, $method = "GET") {
		$method = strtoupper($method);
		$url = $this->Apiurl . "/" . $service;
		$params = array("apiKey" => $this->apiKey) + $params;
		$params["s"] = $this->sign($params);
		if($method == "GET") {
			$response = $this->httpGet($url, $params);
		} else {
			$response = $this->httpPost($url, $params);
		}

		if(isset($response["info"])) {
			$code = $response["info"]["http_code"];
			if (!in_array($code, array("200", "400", "401"))) {
				throw new Exception("Unexpected error occurred. HTTP_CODE: " .$code , $code);
			}
		}
		$body = json_decode($response["output"], true);
		return $body;
	}

	/**
	 * Funcion para setear el apiKey y secretKey y no usar los de la configuracion
	 * @param string $apiKey apiKey del cliente
	 * @param string $secretKey secretKey del cliente
	 */
	public function setKeys($apiKey, $secretKey) {
		$this->apiKey = $apiKey;
		$this->secretKey = $secretKey;
	}


	/**
	 * Funcion que firma los parametros
	 * @param string $params Parametros a firmar
	 * @return string de firma
	 * @throws Exception
	 */
	private function sign($params) {
		$keys = array_keys($params);
		sort($keys);
		$toSign = "";
		foreach ($keys as $key) {
			$toSign .= $key . $params[$key];
		}
		if(!function_exists("hash_hmac")) {
			throw new Exception("function hash_hmac not exist", 1);
		}
		return hash_hmac('sha256', $toSign , $this->secretKey);
	}


	/**
	 * Funcion que hace el llamado via http GET
	 * @param string $url url a invocar
	 * @param array $params los datos a enviar
	 * @return array el resultado de la llamada
	 * @throws Exception
	 */
	private function httpGet($url, $params) {
		$url = $url . "?" . http_build_query($params);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$output = curl_exec($ch);
		if($output === false) {
			$error = curl_error($ch);
			throw new Exception($error, 1);
		}
		$info = curl_getinfo($ch);
		curl_close($ch);
		return array("output" =>$output, "info" => $info);
	}

	/**
	 * Funcion que hace el llamado via http POST
	 * @param string $url url a invocar
	 * @param array $params los datos a enviar
	 * @return array el resultado de la llamada
	 * @throws Exception
	 */
	private function httpPost($url, $params ) {
        // dd($url);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$output = curl_exec($ch);

		if($output === false) {
			$error = curl_error($ch);
			throw new Exception($error, 1);
		}
		$info = curl_getinfo($ch);
		curl_close($ch);
		return array("output" =>$output, "info" => $info);
	}


}

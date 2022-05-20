<?php
/**
 * Clase para Configurar el cliente
 * @Filename: Config.class.php
 * @version: 2.0
 * @Author: flow.cl
 * @Email: csepulveda@tuxpan.com
 * @Date: 28-04-2017 11:32
 * @Last Modified by: Carlos Sepulveda
 * @Last Modified time: 28-04-2017 11:32
 */
 
$COMMERCE_CONFIG = array(
    "APIKEY" => "45DFF458-2AE8-47A0-9991-5AD3DLE4D9E8", // Registre aquí su apiKey
    "SECRETKEY" => "021c4b1d175aee246f65788050014703463c7a49", // Registre aquí su secretKey
    "APIURL" => "https://www.flow.cl/api", // Producción EndPoint o Sandbox EndPoint
    "BASEURL" => "https://narma.cl" //Registre aquí la URL base en su página donde instaló el cliente
);

 
 class Config {
 	
	static function get($name) {
		global $COMMERCE_CONFIG;
		if(!isset($COMMERCE_CONFIG[$name])) {
			throw new Exception("The configuration element thas not exist", 1);
		}
		return $COMMERCE_CONFIG[$name];
	}
 }

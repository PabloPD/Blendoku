<?php

//Comprobamos si est� cargado SOAP
if (!extension_loaded("soap")) {
    dl("php_soap.dll");
}
ini_set("soap.wsdl_cache_enabled", "0");



//Instanciamos el servicio y lo asignamos a una clase
require_once '../Blendoku.php';

$server = new SoapServer("game.wsdl");
$server->setClass("Blendoku");
$server->handle();

?>

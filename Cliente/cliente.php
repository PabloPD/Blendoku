<?php
try{
 $clienteSOAP = new SoapClient('http://localhost/Blendoku/Servicio/game.wsdl');
 
 $get_game = $clienteSOAP->getGame(1);
// $check_game = $clienteSOAP->checkGame(0,["fadsfa"]);
 
 echo "Get game es: " . $get_game[0] . "<br/>";
// echo "Check game es: " . $check_game . "<br/>";
 
} catch(SoapFault $e){
 var_dump($e);
}
?>
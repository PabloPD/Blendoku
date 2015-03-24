<?php

require_once 'Model.php';

class Blendoku{

    public function getGame($partida){
       
        $colores = Model::getGame($partida);
//        $colores="4444";
        
        return $colores;
    }
    public function checkGame($partida,$colores){
        
        $colores = Model::checkGame($partida);
        
        return 0;
    }
    
    
}

?>

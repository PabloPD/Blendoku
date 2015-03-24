<?php
require_once "ModelPDO.php";

class Model extends ModelPDO {
    
    static function getGame($partida){
        
        $oDB = $this->getDBO();
//        $query = $oDB->query( 'SELECT colores FROM partidas WHERE id='+$partida);
//        $colores = $query->fetchAll(PDO::FETCH_ASSOC);
        $query = $oDB->prepare( 'SELECT colores FROM partidas WHERE id='+$partida);
//        $query->execute();
//        $colores = $query->fetch(PDO::FETCH_ASSOC);
        $colores = $query->fetchColum();

        return $colores;
    }
    
    static function checkGame($partida){
        
        $oDB = $this->getDBO();
//        $query = $oDB->query( 'SELECT colores FROM partidas WHERE id='+$partida);
//        $colores = $query->fetchAll(PDO::FETCH_ASSOC);
        $query = $oDB->prepare( 'SELECT colores FROM partidas WHERE id='+$partida);
//        $query->execute();
//        $colores = $query->fetch(PDO::FETCH_ASSOC);
        $colores = $query->fetchColum();

        return $colores;
    }

}
?>

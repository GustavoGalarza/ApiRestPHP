<?php
require_once "conexion.php";

class ModeloCursos{
#creacion de tablas
    public static function index($tabla){        
        $stmt=Conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();
 
        return $stmt->fetchAll(PDO::FETCH_CLASS);
        $stmt->close();
        $stmt->null;
    }
}

?>
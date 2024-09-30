<?php
class ControladorCursos{

    public function  index(){
        //validar cliente de la ruta
        
        $cursos=ModeloCursos::index("cursos");
        $json=array(
            "status"=> 200,
            "detalle"=> $cursos           
        );
        echo json_encode($json, true);
        return;
    }
}


?>
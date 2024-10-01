<?php
//capturamos la ruta
$array = explode ("/", $_SERVER["REQUEST_URI"]);


if (Count(array_filter($array))==1){
    $json=array(
        "detalle"=>"Sin Solicitudes",
    );
    echo json_encode($json, true);
}else{
    //a la espera de la peticion api

    if (Count(array_filter($array))==2){
        if (array_filter($array)[2]=="cursos") {
            # lista de cursos...
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="GET"){
                $cursos=new ControladorCursos();
                $cursos->index();
            }
        }
}
}
?>
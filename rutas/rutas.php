<?php
//aqui se capturas todas las rutas

$array = explode("/", $_SERVER["REQUEST_URI"]);

if (Count(array_filter($array)) == 1) {
    $json = array(
        "detalle" => "Sin Solicitudes",
    );
} else {
    if (Count(array_filter($array)) == 2) {
        $json = array(
            "detalle" => "con Solicitudes",
        );
    }
}
?>
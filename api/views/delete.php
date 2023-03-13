<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once "../basedatos/ClsCRUDMiembros.php";

    $objBaseDatos = new ClsCRUDMiembros;

    $idMiembro = isset($_GET["idMiembro"]) ? $_GET["idMiembro"] : die();
    $exito = $objBaseDatos->eliminarMiembro($idMiembro);

    if($exito){
        http_response_code(200);
        echo json_encode("Registro eliminado.");
    } else {
        http_response_code(404);
        echo json_encode("error");
    }


?>
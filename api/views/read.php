<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset-utf-8");

    include_once '../basedatos/ClsCRUDMiembros.php';

    function getDatosTabla($tabla, $bd){
      if($tabla == "miembros")
        return $bd->consultarMiembros();
      else if($tabla == "domicilio")
        return $bd->consultarDatosDomicilio();
      else if($tabla == "estudios")
        return $bd->consultarDatosEstudios();
      else if($tabla == "salud")
        return $bd->consultarDatosSalud();
      else if($tabla == "emergencia")
        return $bd->consultarDatosEmergencia();
      else if($tabla == "pareja")
        return $bd->consultarDatosPareja();
      else if($tabla == "sesion")
        return $bd->consultarDatosSesion();
      return array();
    }

    $objBaseDatos = new ClsCRUDMiembros();
    $arrayRegistros = getDatosTabla($_POST["tabla"], $objBaseDatos);
    if(isset($arrayRegistros[0])){
        http_response_code(200);
        echo json_encode($arrayRegistros);

    }else {
        http_response_code(404);
        echo json_encode(array("message" => "No se encontraron Miembros registrados."));
    }

?>
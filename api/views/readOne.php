<?php 

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once "../basedatos/ClsCRUDMiembros.php";

    function getDatosTabla($tabla, $id, $bd){
      if($tabla == "miembros")
        return $bd->consultarMiembro($id);
      else if($tabla == "domicilio")
        return $bd->consultarDatosDomicilio($id);
      else if($tabla == "estudios")
        return $bd->consultarDatosEstudios($id);
      else if($tabla == "salud")
        return $bd->consultarDatosSalud($id);
      else if($tabla == "emergencia")
        return $bd->consultarDatosEmergencia($id);
      else if($tabla == "pareja")
        return $bd->consultarDatosPareja($id);
      else if($tabla == "sesion")
        return $bd->consultarDatosSesion($id);
      return 0;
    }

    $objBaseDatos = new ClsCRUDMiembros;
    $objDatos = getDatosTabla($_POST["tabla"], $_POST["id"], $objBaseDatos);
    if($objDatos){
        //Respuesta codigo 200 OK, se encontro el registro buscado
        http_response_code(200);
        echo json_encode($objDatos);
    }else{
        //Respuesta codigo 404 error cliente, no se encontro el registro buscado
        http_response_code(404);
        echo json_encode("Miembro no encontrado....");
    }

?>
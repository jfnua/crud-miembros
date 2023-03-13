<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once "../basedatos/ClsCRUDMiembros.php";

$objBaseDatos = new ClsCRUDMiembros;

if(isset($_POST["datosPersonales"])){ // Si POST trae datos, ejecutar
  $exito = $objBaseDatos->actualizarMiembro($_POST);
  if($exito){
    http_response_code(200);
    echo json_encode('Registro actualizado correctamente.');
  } else{
    http_response_code(404);
    echo json_encode('error');
  }
}else {
  http_response_code(404);
  echo json_encode('error');
}

?>
<?php

class APIMiembros {

  private const URL_GET_MIEMBRO = "http://localhost/crud-miembros/api/views/readOne.php";

  private const URL_GET_MIEMBROS = "http://localhost/crud-miembros/api/views/read.php";

  private const URL_SET_MIEMBRO = "http://localhost/crud-miembros/api/views/create.php";

  private const URL_UPDATE_MIEMBRO = "http://localhost/crud-miembros/api/views/update.php";

  private const URL_DELETE_MIEMBRO = "http://localhost/crud-miembros/api/views/delete.php";

  private const URL_GET_LOGIN = "http://localhost/crud-miembros/api/views/readLogin.php";

  static function formatearADatosPOST($arrayDatos){
    $postDataHeader = array('http'=>array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded",
        'content' => http_build_query($arrayDatos)
      )
    );
    return $postDataHeader;
  }

  static function ejecutarAPI($url = "", $datosPOST = []){
    if($datosPOST){ // Si la API requiere enviar datos por POST
      $contexto = stream_context_create($datosPOST);
      $respuesta = json_decode(file_get_contents($url, false, $contexto));
    }else { // Si no requiere enviar datos por POST
      $respuesta = json_decode(file_get_contents($url));
    }
    return $respuesta;
  }

  static function getDatosPersonales($id = ""){
    $postDataHeader = APIMiembros::formatearADatosPOST(["tabla"=>"miembros", "id"=>$id]);
    if($id != "") {
      $datosPersonales = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBRO, $postDataHeader);
    }else {
      $datosPersonales = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBROS, $postDataHeader);
    }
    return $datosPersonales;
  }

  static function getDatosDomicilio($id = ""){
    $postDataHeader = APIMiembros::formatearADatosPOST(["tabla"=>"domicilio", "id"=>$id]);
    if($id != "") {
      $datosDomicilio = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBRO, $postDataHeader);
    }else {
      $datosDomicilio = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBROS, $postDataHeader);
    }
    return $datosDomicilio;
  }

  static function getDatosSalud($id = ""){
    $postDataHeader = APIMiembros::formatearADatosPOST(["tabla"=>"salud", "id"=>$id]);
    if($id != "") {
      $datosSalud = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBRO, $postDataHeader);
    }else {
      $datosSalud = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBROS, $postDataHeader);
    }
    return $datosSalud;
  }

  static function getDatosSesion($id = ""){
    $postDataHeader = APIMiembros::formatearADatosPOST(["tabla"=>"sesion", "id"=>$id]);
    if($id != "") {
      $datosSesion = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBRO, $postDataHeader);
    }else {
      $datosSesion = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBROS, $postDataHeader);
    }
    return $datosSesion;
  }

  static function getDatosPareja($id = ""){
    $postDataHeader = APIMiembros::formatearADatosPOST(["tabla"=>"pareja", "id"=>$id]);
    if($id != "") {
      $datosPareja = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBRO, $postDataHeader);
    }else {
      $datosPareja = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBROS, $postDataHeader);
    }
    return $datosPareja;
  }

  static function getDatosEmergencia($id = ""){
    $postDataHeader = APIMiembros::formatearADatosPOST(["tabla"=>"emergencia", "id"=>$id]);
    if($id != "") {
      $datosEmergencia = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBRO, $postDataHeader);
    }else {
      $datosEmergencia = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBROS, $postDataHeader);
    }
    return $datosEmergencia;
  }

  static function getDatosEstudios($id = ""){
    $postDataHeader = APIMiembros::formatearADatosPOST(["tabla"=>"estudios", "id"=>$id]);
    if($id != "") {
      $datosEstudios = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBRO, $postDataHeader);
    }else {
      $datosEstudios = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_MIEMBROS, $postDataHeader);
    }
    return $datosEstudios;
  }

  static function setMiembro($arrayNuevoMiembro){
    $postDataHeader = APIMiembros::formatearADatosPOST($arrayNuevoMiembro);
    $respuesta = APIMiembros::ejecutarAPI(APIMiembros::URL_SET_MIEMBRO, $postDataHeader);
    return $respuesta;
  }

  static function updateMiembro($arrayActualizarMiembro){
    $postDataHeader = APIMiembros::formatearADatosPOST($arrayActualizarMiembro);
    $respuesta = APIMiembros::ejecutarAPI(APIMiembros::URL_UPDATE_MIEMBRO, $postDataHeader);
    return $respuesta;
  }

  static function eliminarMiembro($idMiembro){
    $respuesta = APIMiembros::ejecutarAPI(APIMiembros::URL_DELETE_MIEMBRO."?idMiembro=".$idMiembro."");
    return $respuesta;
  }

  static function getLoginUsuario($correo) {
    $postDataHeader = APIMiembros::formatearADatosPOST(["correo"=>$correo]);
    $datosLogin = APIMiembros::ejecutarAPI(APIMiembros::URL_GET_LOGIN, $postDataHeader);
    return $datosLogin;
  }

}

?>
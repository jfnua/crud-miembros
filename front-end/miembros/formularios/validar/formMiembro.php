<?php 

include_once("funcionesValidarFormMiembro.php"); 
session_start(); 

if(isset($_POST["enviarDatosUsuario"])){ 
  if(validarCamposVacios($_POST)){
    header("Location: ../../agregar.php?emptyinputs=1");
    die();
  }
  if(validarNombreUsuario($_POST["nombreUsuario"])){
    header("Location: ../../agregar.php?nousername=1");
    die();
  }
  if(validarEmail($_POST["correo"])){
    header("Location: ../../agregar.php?noemail=1");
    die();
  }
  if(validarContrasena($_POST["contrasena"], $_POST["confContrasena"])){
    header("Location: ../../agregar.php?nopassword=1");
    die();
  }
  if(isset($_GET["mod"]) && $_GET["mod"] == 1){ 
    $_SESSION["nuevoMiembro"]["datosSesionUsuario"] = array("nombreUsuario"=>$_POST["nombreUsuario"], "email"=>$_POST["correo"], "contrasena"=>$_POST["contrasena"]);
  } else { 
    $_SESSION["modMiembro"]["datosSesionUsuario"] = array("idSesion"=>$_SESSION["modMiembro"]["datosSesionUsuario"]["idSesion"],"nombreUsuario"=>$_POST["nombreUsuario"], "email"=>$_POST["correo"], "contrasena"=>$_POST["contrasena"]);
  }
}

else if(isset($_POST["enviarDatosPersonales"])){
  if(validarCamposVacios($_POST)){
    header("Location: ../../agregar.php?emptyinputs=1");
    die();
  }
  if(validarTelefono($_POST["telefono"])){
    header("Location: ../../agregar.php?nophone=1");
    die();
  }
  if(validarCURP($_POST["curp"])){
    header("Location: ../../agregar.php?nocurp=1");
    die();
  }

  if(isset($_GET["mod"]) && $_GET["mod"] == 1){ 
    $_SESSION["nuevoMiembro"]["datosPersonales"] = array("nombre"=>ucwords($_POST["nombre"]),"apellido"=>ucwords($_POST["apellido"]), "fechaNacimiento"=>$_POST["fechaNacimiento"], "telefono"=>$_POST["telefono"],"curp"=>strtoupper($_POST["curp"]));
  }else { 
    $_SESSION["modMiembro"]["datosPersonales"] = array("idMiembro"=>$_SESSION["modMiembro"]["datosPersonales"]["idMiembro"],"nombre"=>ucwords($_POST["nombre"]),"apellido"=>ucwords($_POST["apellido"]), "fechaNacimiento"=>$_POST["fechaNacimiento"], "telefono"=>$_POST["telefono"],"curp"=>strtoupper($_POST["curp"]));
  }

}

else if(isset($_POST["enviarDatosDomicilio"])){
  if(validarCamposVacios($_POST)){
    header("Location: ../../agregar.php?emptyinputs=1");
    die();
  }
  if(isset($_GET["mod"]) && $_GET["mod"] == 1){ 
    $_SESSION["nuevoMiembro"]["datosDomicilio"] = array("direccion"=>$_POST["direccion"], "ciudad"=>ucwords($_POST["ciudad"]),"estado"=>ucwords($_POST["estado"]), "pais"=>ucwords($_POST["pais"]),"codigoPostal"=>$_POST["codigoPostal"]);
  }else { 
    $_SESSION["modMiembro"]["datosDomicilio"] = array("idDomicilio"=>$_SESSION["modMiembro"]["datosDomicilio"]["idDomicilio"],"direccion"=>$_POST["direccion"], "ciudad"=>ucwords($_POST["ciudad"]),"estado"=>ucwords($_POST["estado"]), "pais"=>ucwords($_POST["pais"]),"codigoPostal"=>$_POST["codigoPostal"]);
  }
}

else if(isset($_POST["enviarDatosEstudios"])){
  if(validarCamposVacios($_POST)){
    header("Location: ../../agregar.php?emptyinputs=1");
    die();
  }

  if(isset($_GET["mod"]) && $_GET["mod"] == 1){ 
    $_SESSION["nuevoMiembro"]["datosEstudios"] = array("universidad"=>strtoupper($_POST["universidad"]),"licenciatura"=>strtoupper($_POST["licenciatura"]), "gradoEstudio"=>$_POST["gradoEstudio"],"fechaGradoEstudio"=>$_POST["fechaGradoEstudio"],"directivo"=>$_POST["directivo"]);
  }else { 
    $_SESSION["modMiembro"]["datosEstudios"] = array("idEstudios"=>$_SESSION["modMiembro"]["datosEstudios"]["idEstudios"],"universidad"=>strtoupper($_POST["universidad"]),"licenciatura"=>strtoupper($_POST["licenciatura"]), "gradoEstudio"=>$_POST["gradoEstudio"],"fechaGradoEstudio"=>$_POST["fechaGradoEstudio"],"directivo"=>$_POST["directivo"]);
  }
}

else if(isset($_POST["enviarDatosSalud"])){
  $tiposangre = $_POST["tipoSangre"];
  if(validarCamposVacios($tiposangre)){
    header("Location: ../../agregar.php?emptyinputs=1");
    die();
  }

  if(isset($_GET["mod"]) && $_GET["mod"] == 1){
    $_SESSION["nuevoMiembro"]["datosSalud"] = array("tipoSangre"=>$tiposangre, "enfermedades"=>$_POST["enfermedades"],"alergias"=>$_POST["alergias"]);
  }else {
    $_SESSION["modMiembro"]["datosSalud"] = array("idSalud"=>$_SESSION["modMiembro"]["datosSalud"]["idSalud"],"tipoSangre"=>$tiposangre, "enfermedades"=>$_POST["enfermedades"],"alergias"=>$_POST["alergias"]);
  }
}

else if(isset($_POST["enviarDatosEmergencia"])){
  if(validarCamposVacios($_POST)){
    header("Location: ../../agregar.php?emptyinputs=1");
    die();
  }
  if(validarTelefono($_POST["telefono"])){
    header("Location: ../../agregar.php?nophone=1");
    die();
  }
  if(validarEmail($_POST["correo"])){
    header("Location: ../../agregar.php?noemail=1");
    die();
  }

  if(isset($_GET["mod"]) && $_GET["mod"] == 1){
    $_SESSION["nuevoMiembro"]["datosContactoEmergencia"] = array("nombre"=>ucwords($_POST["nombre"]),"relacion"=>$_POST["relacionContactoEmergencia"],"telefono"=>$_POST["telefono"], "email"=>$_POST["correo"]);
  }else {
    $_SESSION["modMiembro"]["datosContactoEmergencia"] = array("idEmergencia"=>$_SESSION["modMiembro"]["datosContactoEmergencia"]["idEmergencia"],"nombre"=>ucwords($_POST["nombre"]),"relacion"=>$_POST["relacionContactoEmergencia"],"telefono"=>$_POST["telefono"], "email"=>$_POST["correo"]);
  }
}

else if(isset($_POST["enviarDatosPareja"])){
  if(isset($_GET["mod"]) && $_GET["mod"] == 1){ 
    $_SESSION["nuevoMiembro"]["datosPareja"] = array("nombre"=>ucwords($_POST["nombre"]), "nombreCredencial"=>ucwords($_POST["nombreCredencial"]),"fechaNacimiento"=>$_POST["fechaNacimiento"],"tipoRelacion"=>$_POST["tipoRelacion"],"hijos"=>$_POST["hijos"],"activo"=>$_POST["activo"]);
    header("Location: ../../agregar.php?confirmReg=1");
    die();
  }else { 
    $_SESSION["modMiembro"]["datosPareja"] = array("idPareja"=>$_SESSION["modMiembro"]["datosPareja"]["idPareja"],"nombre"=>ucwords($_POST["nombre"]), "nombreCredencial"=>ucwords($_POST["nombreCredencial"]),"fechaNacimiento"=>$_POST["fechaNacimiento"],"tipoRelacion"=>$_POST["tipoRelacion"],"hijos"=>$_POST["hijos"],"activo"=>$_POST["activo"]);
    header("Location: ../../modificar.php?confirmMod=1");
    die();
  }
  
}

else if(isset($_POST["siConfirmaRegistro"])){
  include_once("../../ConsultasAPI/APIMiembros.php");
  $exito = APIMiembros::setMiembro($_SESSION["nuevoMiembro"]);
  if($exito == "error"){ 
    header("Location: ../../agregar.php?msg=0");
  }else {
    unset($_SESSION["nuevoMiembro"]);
    header("Location: ../../agregar.php?msg=1");
  }
  die();
}

else if(isset($_POST["siConfirmaModificacion"])){
  include_once("../../ConsultasAPI/APIMiembros.php");
  $exito = APIMiembros::updateMiembro($_SESSION["modMiembro"]);
  unset($_SESSION["modMiembro"]); 
  if($exito == "error"){ 
    header("Location: ../../modificar.php?msg=0");
    die();
  }else { 
    header("Location: ../../modificar.php?msg=1");
    die();
  }
}

else if(isset($_POST["siConfirma"])){
  unset($_SESSION["nuevoMiembro"]);
  $_SESSION["canceloNuevoMiembro"] = true;
}


else if(isset($_POST["siConfirmaMod"])){
  unset($_SESSION["modMiembro"]);
  $_SESSION["canceloModificacion"] = true;
  header("Location: ../../consultar.php");
  die();
}


if(isset($_GET["mod"]) && $_GET["mod"] == "1"){
  if(isset($_GET["page"])){
    header("Location: ../../agregar.php?page=".$_GET["page"]);
    die(); 
  } else {
    header("Location: ../../agregar.php");
    die();
  }
}else { 
  if(isset($_GET["page"])){
    header("Location: ../../modificar.php?page=".$_GET["page"]);
    die(); 
  } else {
    header("Location: ../../modificar.php");
    die();
  }
}


?>
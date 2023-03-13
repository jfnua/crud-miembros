<?php 
session_start();
include_once("ConsultasAPI/APIMiembros.php");
if(isset($_GET["idmod"])){
  $datosPersonales = APIMiembros::getDatosPersonales($_GET["idmod"]);
  $datosSesionUsuario = APIMiembros::getDatosSesion($datosPersonales->datosSesion);
  $datosDomicilio = APIMiembros::getDatosDomicilio($datosPersonales->datosDomicilio);
  $datosEstudios = APIMiembros::getDatosEstudios($datosPersonales->datosEstudios);
  $datosSalud = APIMiembros::getDatosSalud($datosPersonales->datosSalud);
  $datosEmergencia = APIMiembros::getDatosEmergencia($datosPersonales->datosEmergencia);
  $datosPareja = APIMiembros::getDatosPareja($datosPersonales->datosPareja);


  $_SESSION["modMiembro"]["datosSesionUsuario"] = array("idSesion"=>$datosSesionUsuario->idSesion,"nombreUsuario"=>$datosSesionUsuario->nombre_usuario,"email"=>$datosSesionUsuario->email,"contrasena"=>$datosSesionUsuario->contrasena);
  
  $_SESSION["modMiembro"]["datosPersonales"] = array("idMiembro"=>$datosPersonales->idMiembro, "nombre"=> $datosPersonales->nombre, "apellido"=>$datosPersonales->apellido, "fechaNacimiento"=>$datosPersonales->fechaNacimiento, "telefono"=>$datosPersonales->telefono, "curp"=>$datosPersonales->curp);

  $_SESSION["modMiembro"]["datosDomicilio"] = array("idDomicilio"=>$datosDomicilio->iddomicilio,"direccion"=>$datosDomicilio->direccion,"ciudad"=>$datosDomicilio->ciudad,"estado"=>$datosDomicilio->estado,"pais"=>$datosDomicilio->pais,"codigoPostal"=>$datosDomicilio->codigopostal);

  $_SESSION["modMiembro"]["datosEstudios"] = array("idEstudios"=>$datosEstudios->idestudios,"universidad"=>$datosEstudios->universidad, "licenciatura"=>$datosEstudios->licenciatura, "gradoEstudio"=>$datosEstudios->ultimogradoestudio,"fechaGradoEstudio"=>$datosEstudios->fechaultimogradoestudio,"directivo"=>$datosEstudios->directivo);
  
  $_SESSION["modMiembro"]["datosSalud"] = array("idSalud"=>$datosSalud->idinfomedica,"enfermedades"=>$datosSalud->enfermedades, "alergias"=>$datosSalud->alergias, "tipoSangre"=>$datosSalud->tipoSangre);

  $_SESSION["modMiembro"]["datosContactoEmergencia"] = array("idEmergencia"=>$datosEmergencia->idcontactoemergencia,"nombre"=>$datosEmergencia->nombre, "relacion"=>$datosEmergencia->relacion, "telefono"=>$datosEmergencia->telefono, "email"=>$datosEmergencia->correo);

  $relacionPareja = $datosPareja->relacion != null ? $datosPareja->relacion : "otro";
  $_SESSION["modMiembro"]["datosPareja"] = array("idPareja"=>$datosPareja->idpareja,"nombre"=>$datosPareja->nombre,"nombreCredencial"=>$datosPareja->nombrecredencial,"fechaNacimiento"=>$datosPareja->fechaNacimiento,"tipoRelacion"=>$relacionPareja,"hijos"=>$datosPareja->hijos,"activo"=>$datosPareja->activo);
}

header("Location: modificar.php");
?>
<?php 

  function validarCamposVacios($datosFormulario){
    foreach ($datosFormulario as $campo){
      if(empty($campo)) {
        return 1;
      }
    }
    return 0;
  }

  function validarNombreUsuario($nombreUsuario){
    if(strlen($nombreUsuario) > 5 && strlen($nombreUsuario) < 10){
      return 0;
    }
    return 1;
  }

  function validarContrasena($contrasena, $confirmacionContrasena) {
    if(strlen($contrasena) > 7 && strcmp($contrasena, $confirmacionContrasena) === 0){
      return 0;
    }
    return 1;
  }

  function validarEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return 0;
    }
    return 1;
  }

  function validarTelefono($telefono){
    if(is_numeric($telefono) && strlen($telefono) == 10) {
      return 0;
    }
    return 1;
  }

  function validarCURP($curp){
    $regexCURP = '/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/';
    if(preg_match($regexCURP, $curp) === 1) {
      return 0;
    }
    return 1;
  }

?>
<?php 

  include_once("ClsConexion.php");

  class ClsCRUDMiembros extends ClsConexion {
      
    function insertarMiembro($arrayMiembro) {
      $this->open();

      $usuario = $arrayMiembro["datosSesionUsuario"]["nombreUsuario"];
      $email = $arrayMiembro["datosSesionUsuario"]["email"];
      $pass = $arrayMiembro["datosSesionUsuario"]["contrasena"];

      $passEnc = hash_hmac("sha256", $pass, getenv("KEY_PASS"));
      $passHash = password_hash($passEnc, PASSWORD_ARGON2ID);

      $direccion = $arrayMiembro["datosDomicilio"]["direccion"];
      $ciudad = $arrayMiembro["datosDomicilio"]["ciudad"];
      $estado = $arrayMiembro["datosDomicilio"]["estado"];
      $pais = $arrayMiembro["datosDomicilio"]["pais"];
      $codigopostal = $arrayMiembro["datosDomicilio"]["codigoPostal"];

      $universidad = $arrayMiembro["datosEstudios"]["universidad"];
      $licenciatura = $arrayMiembro["datosEstudios"]["licenciatura"];
      $ultimogradoestudio = $arrayMiembro["datosEstudios"]["gradoEstudio"];
      $fechaultimogradoestudio = $arrayMiembro["datosEstudios"]["fechaGradoEstudio"];
      $directivo = $arrayMiembro["datosEstudios"]["directivo"];

      $nombreEmergencia = $arrayMiembro["datosContactoEmergencia"]["nombre"];
      $relacionEmergencia = $arrayMiembro["datosContactoEmergencia"]["relacion"];
      $telefonoEmergencia = $arrayMiembro["datosContactoEmergencia"]["telefono"];
      $emailEmergencia = $arrayMiembro["datosContactoEmergencia"]["email"];

      $enfermedades = $arrayMiembro["datosSalud"]["enfermedades"];
      $alergias = $arrayMiembro["datosSalud"]["alergias"];
      $tipoSangre = $arrayMiembro["datosSalud"]["tipoSangre"];

      $nombrePareja = $arrayMiembro["datosPareja"]["nombre"];
      $nombreCredencial = $arrayMiembro["datosPareja"]["nombreCredencial"];
      $fechaNacimientoPareja = $arrayMiembro["datosPareja"]["fechaNacimiento"] != "" ? $arrayMiembro["datosPareja"]["fechaNacimiento"] : "1900-01-01";
      $relacionPareja = $arrayMiembro["datosPareja"]["tipoRelacion"];
      $hijos = $arrayMiembro["datosPareja"]["hijos"];
      $activo = isset($arrayMiembro["datosPareja"]["activo"]) ? $arrayMiembro["datosPareja"]["activo"] : "";

      $nombre = $arrayMiembro["datosPersonales"]["nombre"];
      $apellido = $arrayMiembro["datosPersonales"]["apellido"];
      $fechaNacimiento = $arrayMiembro["datosPersonales"]["fechaNacimiento"];
      $telefono = $arrayMiembro["datosPersonales"]["telefono"];
      $curp = $arrayMiembro["datosPersonales"]["curp"];

      $statement = $this->conexion->prepare("CALL insertarMiembro(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

      // Se enlazan todos los parametros del procedimineto almacenado en la base de datos
      $statement->bindParam(1, $usuario, PDO::PARAM_STR, 45);
      $statement->bindParam(2, $passHash, PDO::PARAM_STR, 100);
      $statement->bindParam(3, $email, PDO::PARAM_STR, 50);

      $statement->bindParam(4, $direccion, PDO::PARAM_STR, 75);
      $statement->bindParam(5, $ciudad, PDO::PARAM_STR, 45);
      $statement->bindParam(6, $estado, PDO::PARAM_STR, 45);
      $statement->bindParam(7, $pais, PDO::PARAM_STR, 45);
      $statement->bindParam(8, $codigopostal, PDO::PARAM_STR, 8);

      $statement->bindParam(9, $universidad, PDO::PARAM_STR, 50);
      $statement->bindParam(10, $licenciatura, PDO::PARAM_STR, 75);
      $statement->bindParam(11, $ultimogradoestudio, PDO::PARAM_STR, 30);
      $statement->bindParam(12, $fechaultimogradoestudio, PDO::PARAM_STR, 5);
      $statement->bindParam(13, $directivo, PDO::PARAM_INT);

      $statement->bindParam(14, $nombreEmergencia, PDO::PARAM_STR, 100);
      $statement->bindParam(15, $relacionEmergencia, PDO::PARAM_STR, 25);
      $statement->bindParam(16, $telefonoEmergencia, PDO::PARAM_STR, 10);
      $statement->bindParam(17, $emailEmergencia, PDO::PARAM_STR, 45);

      $statement->bindParam(18, $enfermedades, PDO::PARAM_STR, 100);
      $statement->bindParam(19, $alergias, PDO::PARAM_STR, 75);
      $statement->bindParam(20, $tipoSangre, PDO::PARAM_STR, 5);

      $statement->bindParam(21, $nombrePareja, PDO::PARAM_STR, 75);
      $statement->bindParam(22, $nombreCredencial, PDO::PARAM_STR, 45);
      $statement->bindParam(23, $fechaNacimientoPareja, PDO::PARAM_STR, 15);
      $statement->bindParam(24, $relacionPareja, PDO::PARAM_STR, 45);
      $statement->bindParam(25, $hijos, PDO::PARAM_STR, 100);
      $statement->bindParam(26, $activo, PDO::PARAM_INT);

      $statement->bindParam(27, $nombre, PDO::PARAM_STR, 75);
      $statement->bindParam(28, $apellido, PDO::PARAM_STR, 45);
      $statement->bindParam(29, $fechaNacimiento, PDO::PARAM_STR, 15);
      $statement->bindParam(30, $telefono, PDO::PARAM_STR, 10);
      $statement->bindParam(31, $curp, PDO::PARAM_STR,18);

      $exito = $statement->execute();

      $this->close();

      return $exito;
    }

    function consultarMiembros(){
      $this->open();
      $statement = $this->conexion->prepare("SELECT * FROM miembros");
      $statement->execute();

      $resultado = $statement->fetchAll(PDO::FETCH_CLASS);
      $this->close();

      return $resultado;

    }

    function consultarMiembro($idMiembro) {
      $this->open();
      $statement = $this->conexion->prepare("select * from miembros where idMiembro = ?");
      $statement->bindParam(1,$idMiembro, PDO::PARAM_INT);
      $statement->execute();

      $resultado = $statement->fetch(PDO::FETCH_OBJ);
      $this->close();

      return $resultado;

    }

    function consultarDatosDomicilio($idDomicilio  = "") {
      $this->open();
      if($idDomicilio != "") { 
        $statement = $this->conexion->prepare("select * from datos_domicilio where iddomicilio = ?");
        $statement->bindParam(1,$idDomicilio, PDO::PARAM_INT);
      } else { 
        $statement = $this->conexion->prepare("select * from datos_domicilio");
      }

      $statement->execute();

      $resultado = $idDomicilio != "" ? $statement->fetch(PDO::FETCH_OBJ) : $statement->fetchAll(PDO::FETCH_CLASS);

      $this->close();

      return $resultado;

    }

    function consultarDatosEstudios($idEstudios = "") {
      $this->open();
      if($idEstudios != "") {
        $statement = $this->conexion->prepare("select * from datos_estudios where idestudios = ?");
        $statement->bindParam(1,$idEstudios, PDO::PARAM_INT);
      }else {
        $statement = $this->conexion->prepare("select * from datos_estudios");
      }

      $statement->execute();

      $resultado = $idEstudios != "" ? $statement->fetch(PDO::FETCH_OBJ) : $statement->fetchAll(PDO::FETCH_CLASS);

      $this->close();

      return $resultado;

    }

    function consultarDatosSalud($idSalud = "") {
      $this->open();
      if($idSalud != ""){
        $statement = $this->conexion->prepare("select * from datos_salud where idinfomedica = ?");
        $statement->bindParam(1,$idSalud, PDO::PARAM_INT);
      }else {
        $statement = $this->conexion->prepare("select * from datos_salud");
      }
      $statement->execute();

      $resultado = $idSalud != "" ? $statement->fetch(PDO::FETCH_OBJ) : $statement->fetchAll(PDO::FETCH_CLASS);

      $this->close();

      return $resultado;

    }

    function consultarDatosEmergencia($idEmergencia = "") {
      $this->open();
      if($idEmergencia != ""){
        $statement = $this->conexion->prepare("select * from datos_contacto_emergencia where idcontactoemergencia = ?");
        $statement->bindParam(1,$idEmergencia, PDO::PARAM_INT);
      }else {
        $statement = $this->conexion->prepare("select * from datos_contacto_emergencia");
      }
      $statement->execute();

      $resultado = $idEmergencia != "" ? $statement->fetch(PDO::FETCH_OBJ) : $statement->fetchAll(PDO::FETCH_CLASS);

      $this->close();

      return $resultado;

    }

    function consultarDatosPareja($idPareja = "") {
      $this->open();
      if($idPareja != ""){
        $statement = $this->conexion->prepare("select * from datos_pareja where idpareja = ?");
        $statement->bindParam(1,$idPareja, PDO::PARAM_INT);
      }else {
        $statement = $this->conexion->prepare("select * from datos_pareja");
      }

      $statement->execute();

      $resultado = $idPareja != "" ? $statement->fetch(PDO::FETCH_OBJ) : $statement->fetchAll(PDO::FETCH_CLASS);

      $this->close();

      return $resultado;

    }

    function consultarDatosSesion($idSesion = "") {
      $this->open();
      if($idSesion != ""){
        $statement = $this->conexion->prepare("select * from datos_sesion where idSesion = ?");
        $statement->bindParam(1,$idSesion, PDO::PARAM_INT);
      }else {
        $statement = $this->conexion->prepare("select idSesion,nombre_usuario,email from datos_sesion");
      }

      $statement->execute();

      $resultado = $idSesion != "" ? $statement->fetch(PDO::FETCH_OBJ) : $statement->fetchAll(PDO::FETCH_CLASS);

      $this->close();

      return $resultado;
    }

    function consultarCorreoLogin($correo){
      $this->open();
      $statement = $this->conexion->prepare("select * from datos_sesion where email = ?");
      $statement->bindParam(1, $correo, PDO::PARAM_STR, 50);
      $statement->execute();

      $resultado = $statement->fetch();

      $this->close();

      return $resultado;
    }


    function actualizarMiembro($arrayMiembro) {
      $this->open();

      $idSesion = $arrayMiembro["datosSesionUsuario"]["idSesion"];
      $idDomicilio = $arrayMiembro["datosDomicilio"]["idDomicilio"];
      $idEstudios = $arrayMiembro["datosEstudios"]["idEstudios"];
      $idSalud = $arrayMiembro["datosSalud"]["idSalud"];
      $idEmergencia = $arrayMiembro["datosContactoEmergencia"]["idEmergencia"];
      $idPareja = $arrayMiembro["datosPareja"]["idPareja"];
      $idMiembro = $arrayMiembro["datosPersonales"]["idMiembro"];

      $usuario = $arrayMiembro["datosSesionUsuario"]["nombreUsuario"];
      $email = $arrayMiembro["datosSesionUsuario"]["email"];
      $pass = $arrayMiembro["datosSesionUsuario"]["contrasena"];

      $passEnc = hash_hmac("sha256", $pass, getenv("KEY_PASS"));
      $passHash = password_hash($passEnc, PASSWORD_ARGON2ID);

      $direccion = $arrayMiembro["datosDomicilio"]["direccion"];
      $ciudad = $arrayMiembro["datosDomicilio"]["ciudad"];
      $estado = $arrayMiembro["datosDomicilio"]["estado"];
      $pais = $arrayMiembro["datosDomicilio"]["pais"];
      $codigopostal = $arrayMiembro["datosDomicilio"]["codigoPostal"];

      $universidad = $arrayMiembro["datosEstudios"]["universidad"];
      $licenciatura = $arrayMiembro["datosEstudios"]["licenciatura"];
      $ultimogradoestudio = $arrayMiembro["datosEstudios"]["gradoEstudio"];
      $fechaultimogradoestudio = $arrayMiembro["datosEstudios"]["fechaGradoEstudio"];
      $directivo = $arrayMiembro["datosEstudios"]["directivo"];

      $nombreEmergencia = $arrayMiembro["datosContactoEmergencia"]["nombre"];
      $relacionEmergencia = $arrayMiembro["datosContactoEmergencia"]["relacion"];
      $telefonoEmergencia = $arrayMiembro["datosContactoEmergencia"]["telefono"];
      $emailEmergencia = $arrayMiembro["datosContactoEmergencia"]["email"];

      $enfermedades = $arrayMiembro["datosSalud"]["enfermedades"];
      $alergias = $arrayMiembro["datosSalud"]["alergias"];
      $tipoSangre = $arrayMiembro["datosSalud"]["tipoSangre"];

      $nombrePareja = $arrayMiembro["datosPareja"]["nombre"];
      $nombreCredencial = $arrayMiembro["datosPareja"]["nombreCredencial"];
      $fechaNacimientoPareja = $arrayMiembro["datosPareja"]["fechaNacimiento"] != "" ? $arrayMiembro["datosPareja"]["fechaNacimiento"] : "1900-01-01";
      $relacionPareja = $arrayMiembro["datosPareja"]  ["tipoRelacion"];
      $hijos = $arrayMiembro["datosPareja"]["hijos"];
      $activo = isset($arrayMiembro["datosPareja"]["activo"]) ? $arrayMiembro["datosPareja"]["activo"] : "";

      $nombre = $arrayMiembro["datosPersonales"]["nombre"];
      $apellido = $arrayMiembro["datosPersonales"]["apellido"];
      $fechaNacimiento = $arrayMiembro["datosPersonales"]["fechaNacimiento"];
      $telefono = $arrayMiembro["datosPersonales"]["telefono"];
      $curp = $arrayMiembro["datosPersonales"]["curp"];

      $statement = $this->conexion->prepare("CALL actualizarMiembro(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

      $statement->bindParam(1, $usuario, PDO::PARAM_STR, 45);
      $statement->bindParam(2, $passHash, PDO::PARAM_STR, 100);
      $statement->bindParam(3, $email, PDO::PARAM_STR, 50);

      $statement->bindParam(4, $direccion, PDO::PARAM_STR, 75);
      $statement->bindParam(5, $ciudad, PDO::PARAM_STR, 45);
      $statement->bindParam(6, $estado, PDO::PARAM_STR, 45);
      $statement->bindParam(7, $pais, PDO::PARAM_STR, 45);
      $statement->bindParam(8, $codigopostal, PDO::PARAM_STR, 8);

      $statement->bindParam(9, $universidad, PDO::PARAM_STR, 50);
      $statement->bindParam(10, $licenciatura, PDO::PARAM_STR, 75);
      $statement->bindParam(11, $ultimogradoestudio, PDO::PARAM_STR, 30);
      $statement->bindParam(12, $fechaultimogradoestudio, PDO::PARAM_STR, 5);
      $statement->bindParam(13, $directivo, PDO::PARAM_INT);

      $statement->bindParam(14, $nombreEmergencia, PDO::PARAM_STR, 100);
      $statement->bindParam(15, $relacionEmergencia, PDO::PARAM_STR, 25);
      $statement->bindParam(16, $telefonoEmergencia, PDO::PARAM_STR, 10);
      $statement->bindParam(17, $emailEmergencia, PDO::PARAM_STR, 45);

      $statement->bindParam(18, $enfermedades, PDO::PARAM_STR, 100);
      $statement->bindParam(19, $alergias, PDO::PARAM_STR, 75);
      $statement->bindParam(20, $tipoSangre, PDO::PARAM_STR, 5);

      $statement->bindParam(21, $nombrePareja, PDO::PARAM_STR, 75);
      $statement->bindParam(22, $nombreCredencial, PDO::PARAM_STR, 45);
      $statement->bindParam(23, $fechaNacimientoPareja, PDO::PARAM_STR, 15);
      $statement->bindParam(24, $relacionPareja, PDO::PARAM_STR, 45);
      $statement->bindParam(25, $hijos, PDO::PARAM_STR, 100);
      $statement->bindParam(26, $activo, PDO::PARAM_INT);

      $statement->bindParam(27, $nombre, PDO::PARAM_STR, 75);
      $statement->bindParam(28, $apellido, PDO::PARAM_STR, 45);
      $statement->bindParam(29, $fechaNacimiento, PDO::PARAM_STR, 15);
      $statement->bindParam(30, $telefono, PDO::PARAM_STR, 10);
      $statement->bindParam(31, $curp, PDO::PARAM_STR,18);

      $statement->bindParam(32, $idSesion, PDO::PARAM_INT);
      $statement->bindParam(33, $idDomicilio, PDO::PARAM_INT);
      $statement->bindParam(34, $idEstudios, PDO::PARAM_INT);
      $statement->bindParam(35, $idSalud, PDO::PARAM_INT);
      $statement->bindParam(36, $idEmergencia, PDO::PARAM_INT);
      $statement->bindParam(37, $idPareja, PDO::PARAM_INT);
      $statement->bindParam(38, $idMiembro, PDO::PARAM_INT);

      $exito = $statement->execute();

      $this->close();

      return $exito;
    }


    function eliminarMiembro($idMiembro) {
      $this->open();
      $statement = $this->conexion->prepare("CALL eliminarMiembro(?)");
      $statement->bindParam(1, $idMiembro, PDO::PARAM_INT);
      $exito = $statement->execute();
      $this->close();
      return $exito;
    }


  }

?>
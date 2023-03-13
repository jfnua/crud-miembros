<?php

	session_start(); //Trabajamos con sesiones
	if(!empty($_POST["captcha_code"])){ //Si el usuario ingreso el captcha
		
		if($_POST["captcha_code"] != $_SESSION['captcha_code']) {
			//Captcha introducido incorrecto
			header("Location: index.php?nocaptcha=1"); //index login
			die();
		}

    	//Incluimos las funciones de las consultas hacia a la API
    	include_once("../miembros/ConsultasAPI/APIMiembros.php");
		// Ejecutamos la consulta hacia la API para obtener los datos de login que corresponden al email ingresado por el usuario
		$usuario = APIMiembros::getLoginUsuario($_POST["email"]);
		//$passEnc = hash_hmac("sha256", $_POST["password"], getenv("KEY_PASS"));
		//Valida que la contraseña sea correcta y corresponda al correo ingresado
		if($_POST["password"] == $usuario->contrasena) {
			//crea un cookie de inicio de session que expira en 24 horas
			setcookie("autenticacion", 1, time() + 3600 * 24, "/");
			header("Location: ../index.php"); //index pagina inicio
		} else {
			//Si la contraseña es incorrecta 
			header("Location: index.php?nopassword=1"); //index login
		}

	} else { // Si el usuario no ingresa el captcha
		header("Location: index.php?nocaptcha=1"); //index login
	}
	
?>
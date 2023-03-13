<?php  
	if(!isset($_COOKIE['autenticacion'])){ // Si no esta autenticado, mostrar login
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inicar Sesión</title>
	<meta charset="UTF-8">
	<meta name="author" content="Jose Flaviano Nuñez Avila">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../recursos/bootstrap/signin.css" rel="stylesheet">

</head>
<body class="text-center bg-light">
	
	<main class="form-signin rounded bg-dark border border-1 border-danger">
    <?php
	  include_once("formLogin.php");
    ?>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5dd5137838.js" crossorigin="anonymous"></script>
  
</body>
</html>
<?php } else { // Si esta autenticado con cookie, mandar a la pagina principal
	header("Location: ../index.php"); //index pagina inicio
} ?>

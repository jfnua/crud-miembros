<?php
if(isset($_COOKIE["autenticacion"])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Evaluacion Bloque IV</title>  

    <!-- Bootstrap styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="../recursos/bootstrap/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 text-center shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-light lead fw-bold" href="../index.php"><i class="fa-sharp fa-solid fa-database"></i>&nbsp;&nbsp;CRUD de Miembros</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="w-100"></div>
      <div class="navbar-nav shadow">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3 fs-6 mx-2" href="../login/cerrarSesion.php"><i class="fa-solid fa-circle-user fs-3"></i>&nbsp;&nbsp;CERRAR SESI&Oacute;N</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link btn-dark text-light" aria-current="page" href="../index.php">
                  <i class="fa-sharp fa-solid fa-house"></i>
                  &nbsp;INICIO
                </a>
              </li>
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-muted">
              <span>Miembros</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
              </a>
              </h6>
              <li class="nav-item">
                <a class="nav-link btn-dark text-light" href="agregar.php">
                  <i class="fa-solid fa-user-plus"></i>
                  &nbsp;AGREGAR
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-dark text-light" href="consultar.php">
                  <i class="fa-solid fa-users"></i>
                  &nbsp;CONSULTAR
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link btn-dark text-light" href="consultar.php">
                  <i class="fa-solid fa-user-gear"></i>
                  &nbsp;MODIFICAR
                </a>
              </li> -->
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="mt-2 fw-bold fs-2 text-dark"><i class="fa-solid fa-users"></i>&nbsp;<font face="helvetica">MIEMBROS</font><a class="mx-4 btn btn-primary" href="agregar.php"><i class="fa-solid fa-plus"></i>&nbsp;AGREGAR</a></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <a href="generarReporteMiembros.php" class="btn btn-md btn-outline-secondary"><i class="fa-solid fa-file-pdf"></i>&nbsp;Exportar</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-success table-hover table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">NOMBRE</th>
                  <th scope="col">APELLIDO</th>
                  <th scope="col">FECHA DE NACIMIENTO</th>
                  <th scope="col">TELEFONO</th>
                  <th scope="col">CURP</th>
                  <th scope="col" colspan="3"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                include_once("./ConsultasAPI/APIMiembros.php");
                $resultado = APIMiembros::getDatosPersonales();
                foreach($resultado as $fila){?>
                <tr>
                  <td><?= $fila->idMiembro ?></td>
                  <td><?= $fila->nombre ?></td>
                  <td><?= $fila->apellido ?></td>
                  <td><?= $fila->fechaNacimiento ?></td>
                  <td><?= $fila->telefono ?></td>
                  <td><?= $fila->curp ?></td>
                  <td><abbr title="Ver detalles"><a href="consultar.php?idinfo=<?= $fila->idMiembro ?>" class="btn btn-info text-light" id="btnInfo"><i class="fa-solid fa-eye"></i></a></abbr></td>
                  <td><abbr title="Modificar"><a class="btn btn-warning text-light" href="consultaMod.php?idmod=<?= $fila->idMiembro ?>"><i class="fa-solid fa-user-pen"></i></a></abbr></td>
                  <td><abbr title="Eliminar"><a class="btn btn-danger" href="eliminar.php?iddel=<?= $fila->idMiembro ?>"><i class="fa-solid fa-trash"></i></a></abbr></td>
                </tr>
                <?php };?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Moda info -->
    <?php if(isset($_GET["idinfo"])) {?>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="titulo" id="infoMiembro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-xs">
			<div class="modal-content mt-4">
				<div class="modal-header">
					<h1 class="modal-title lead fs-2 text-center text-primary" id="titulo"><i class="fa-solid fa-circle-info"></i>&nbsp;INFO MIEMBRO&nbsp;&nbsp;&nbsp;&nbsp;ID:  <?=$_GET["idinfo"]?></h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
          <?php
            $datosPersonales = APIMiembros::getDatosPersonales($_GET["idinfo"]);
          ?> 
					<table class="table table-success table-sm">
            <thead>
              <tr>
                <th colspan="2">INFORMACI&Oacute;N PERSONAL</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td class="col-sm-6">NOMBRE:</td>
              <td class="col-sm-6"><?=$datosPersonales->nombre;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">APELLIDO:</td>
              <td class="col-sm-6"><?=$datosPersonales->apellido;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">FECHA NACIMIENTO:</td>
              <td class="col-sm-6"><?=$datosPersonales->fechaNacimiento;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">TELEFONO:</td>
              <td class="col-sm-6"><?=$datosPersonales->telefono;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">CURP:</td>
              <td class="col-sm-6"><?=$datosPersonales->curp;?></td>
            </tr>
            </tbody>
          </table>
          <?php 
            $datosDomicilio = APIMiembros::getDatosDomicilio($datosPersonales->datosDomicilio);
          ?> 
					<table class="table table-success table-sm">
            <thead>
              <tr>
                <th colspan="2">DOMICILIO</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td class="col-sm-6">DIRECCI&Oacute;N:</td>
              <td class="col-sm-6"><?=$datosDomicilio->direccion;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">CIUDAD:</td>
              <td class="col-sm-6"><?=$datosDomicilio->ciudad;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">FECHA NACIMIENTO:</td>
              <td class="col-sm-6"><?=$datosDomicilio->estado;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">TELEFONO:</td>
              <td class="col-sm-6"><?=$datosDomicilio->pais;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">C&Oacute;DIGO POSTAL:</td>
              <td class="col-sm-6"><?=$datosDomicilio->codigopostal;?></td>
            </tr>
            
            </tbody>
          </table>
          <?php 
            $datosEstudios = APIMiembros::getDatosEstudios($datosPersonales->datosEstudios);
          ?> 
					<table class="table table-success table-sm">
            <thead>
              <tr>
                <th colspan="2">ESTUDIOS</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td class="col-sm-6">UNIVERSIDAD:</td>
              <td class="col-sm-6"><?=$datosEstudios->universidad;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">LICENCIATURA:</td>
              <td class="col-sm-6"><?=$datosEstudios->licenciatura;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">ULTIMO GRADO DE ESTUDIO:</td>
              <td class="col-sm-6"><?=$datosEstudios->ultimogradoestudio;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">AÑO DEL ULTIMO GRADO DE ESTUDIO:</td>
              <td class="col-sm-6"><?=$datosEstudios->fechaultimogradoestudio;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">DIRECTIVO:</td>
              <td class="col-sm-6"><?php if($datosEstudios->directivo=="1"){ echo "SI";}else{ echo "NO";}?></td>
            </tr>
            </tbody>
          </table>
          <?php 
            $datosSalud = APIMiembros::getDatosSalud($datosPersonales->datosSalud);
            
          ?> 
					<table class="table table-success table-sm">
            <thead>
              <tr>
                <th colspan="2">INFORMACI&Oacute;N M&Eacute;DICA</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td class="col-sm-6">ENFERMEDADES:</td>
              <td class="col-sm-6"><?=$datosSalud->enfermedades;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">ALERGIAS:</td>
              <td class="col-sm-6"><?=$datosSalud->alergias;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">TIPO DE SANGRE:</td>
              <td class="col-sm-6"><?=$datosSalud->tipoSangre;?></td>
            </tr>
            </tbody>
          </table>
          <?php 
            $datosEmergencia = APIMiembros::getDatosEmergencia($datosPersonales->datosEmergencia);
          ?> 
					<table class="table table-success table-sm">
            <thead>
              <tr>
                <th colspan="2">CONTACTO EMERGENCIA</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td class="col-sm-6">NOMBRE:</td>
              <td class="col-sm-6"><?=$datosEmergencia->nombre;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">RELACI&Oacute;N:</td>
              <td class="col-sm-6"><?=$datosEmergencia->relacion;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">TELEFONO:</td>
              <td class="col-sm-6"><?=$datosEmergencia->telefono;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">CORREO ELECTRONICO:</td>
              <td class="col-sm-6"><?=$datosEmergencia->correo;?></td>
            </tr>
            </tbody>
          </table>
          <?php 
            $datosPareja = APIMiembros::getDatosPareja($datosPersonales->datosPareja);
          ?> 
					<table class="table table-success table-sm">
            <thead>
              <tr>
                <th colspan="2">INFORMACI&Oacute;N DE PAREJA</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td class="col-sm-6">NOMBRE:</td>
              <td class="col-sm-6"><?=$datosPareja->nombre;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">NOMBRE PARA CREDENCIAL:</td>
              <td class="col-sm-6"><?=$datosPareja->nombrecredencial;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">FECHA DE NACIMIENTO:</td>
              <td class="col-sm-6"><?=$datosPareja->fechaNacimiento;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">RELACI&Oacute;N:</td>
              <td class="col-sm-6"><?=$datosPareja->relacion;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">HIJOS:</td>
              <td class="col-sm-6"><?=$datosPareja->hijos;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">ACTIVO:</td>
              <td class="col-sm-6"><?php if($datosPareja->activo=="1"){ echo "SI";}else{ echo "NO";}?></td>
            </tr>
            </tbody>
          </table>
          <?php 
            $datosSesion = APIMiembros::getDatosSesion($datosPersonales->datosSesion);
          ?> 
					<table class="table table-success table-sm">
            <thead>
              <tr>
                <th colspan="2">DATOS DE INICIO DE SESI&Oacute;N</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td class="col-sm-6">NOMBRE USUARIO:</td>
              <td class="col-sm-6"><?=$datosSesion->nombre_usuario;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">CORREO ELECTR&Oacute;NICO:</td>
              <td class="col-sm-6"><?=$datosSesion->email;?></td>
            </tr>
            <tr>
              <td class="col-sm-6">CONTRASE&Nacute;A:</td>
              <td class="col-sm-6"><?=str_repeat("*",strlen($datosSesion->contrasena))?></td>
            </tr>
            </tbody>
          </table>
				</div>
			</div>
		</div>
	</div>
  <?php } ?>

    <!-- JS bundle bootstrap Jquery bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5dd5137838.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
		  const valores = window.location.search; //obtiene los valores GET de la url 
		  if(valores.includes("idinfo")){ // verifica si en la url esta la variable registrado
        $(document).ready(function() {
            $('#infoMiembro').modal('toggle')
        });
		  }
	  </script>

  </body>
</html>
<?php 
  }else {
    header("Location: ../login/"); //index login
  }
?>

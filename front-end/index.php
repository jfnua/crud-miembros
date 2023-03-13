<?php
if(isset($_COOKIE["autenticacion"])){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Evaluacion Bloque IV</title>  

    <!-- Bootstrap styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="recursos/bootstrap/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-light lead fw-bold" href="index.php"><i class="fa-sharp fa-solid fa-database"></i>&nbsp;&nbsp;CRUD de Miembros</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="w-100"></div>
      <div class="navbar-nav shadow">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3 fs-6 mx-2" href="login/cerrarSesion.php"><i class="fa-solid fa-circle-user fs-3"></i>&nbsp;&nbsp;CERRAR SESI&Oacute;N</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link btn-dark text-light" aria-current="page" href="index.php">
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
                <a class="nav-link btn-dark text-light" href="miembros/agregar.php">
                  <i class="fa-solid fa-user-plus"></i>
                  &nbsp;AGREGAR
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-dark text-light" href="miembros/consultar.php">
                  <i class="fa-solid fa-users"></i>
                  &nbsp;CONSULTAR
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <h1 class="mt-4 fw-bold fs-2 text-dark"> <i class="fa-sharp fa-solid fa-house"></i>&nbsp;<font face="helvetica">INICIO</font></h1>
          <hr>
          <div class="row justify-content-center">
            <div class="card w-50 text-dark">
              <div class="card-body">
                <h5 class="card-title fw-bold"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;TABLA MIEMBROS</h5>
                <p class="card-text text-danger">Muestra todos los miembros registrados (modificar o eliminar miembros).</p>
                <a href="miembros/consultar.php" class="btn btn-danger">IR A MIEMBROS</a>
              </div>
            </div>
            <div class="card w-50 text-dark">
              <div class="card-body">
                <h5 class="card-title fw-bold"><i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;NUEVO MIEMBRO</h5>
                <p class="card-text text-danger">Agrega un nuevo miembro.</p>
                <a href="miembros/agregar.php" class="btn btn-danger">AGREGAR</a>
              </div>
            </div>
          </div>
          <div class="bg-light text-secondary px-4 py-5 text-center">
            <div class="py-5">
              <div class="col-lg-6 mx-auto">
                <p class="fs-5 mt-5">&copy; JOSE FLAVIANO NUÑEZ AVILA</p>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <!-- JS bundle bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5dd5137838.js" crossorigin="anonymous"></script>

  </body>
</html>
<?php 
  }else {
    header("Location: login/"); //index login
  }
?>
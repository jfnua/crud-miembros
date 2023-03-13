<form action="validacionLogin.php" method="POST">
  <div class="mt-1 fs-1 fw-bold text-light"><i class="fa-solid fa-user-lock fa-lg"></i></div>
  <h1 class="h3 mb-3 fw-normal text-light">CRUD MIEMBROS</h1>
  <div class="form-floating">
    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="">
    <label for="floatingInput">Correo Electrónico</label>
  </div>
  <div class="form-floating">
    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="">
    <label for="floatingPassword">Contraseña</label>
  </div>
  <br><br>
  <img class="mb-2" src="captcha/generar.php" width="75">
  <div class="form-floating mb-4">
    <input class="form-control" id="floatingCaptcha" type="text" name="captcha_code" placeholder="Ingresa el captcha">
    <label for="floatingCaptcha">Ingresa el Captcha</label>
  </div>
  <?php 
    if(isset($_GET["nocaptcha"]) || isset($_GET["nopassword"])){
  ?>
  <div class="mb-2">
    <?php 
      if (isset($_GET["nocaptcha"])){
        echo "<font face='helvetica' color='red' size=4>Captcha Incorrecto</font>";
      } else{
        echo "<font face='helvetica' color='red' size=4>Correo y contraseña no son válidos</font>";
      }
    ?>
  </div>
  <?php } ?>
  <button class="w-100 btn btn-lg btn-danger text-light" type="submit"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;INICAR SESIÓN</button>
  <p class="mt-5 mb-3 text-light">&copy; Jose Flaviano Nuñez Avila</p>
</form>
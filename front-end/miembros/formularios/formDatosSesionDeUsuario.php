<?php if(isset($_SESSION["modMiembro"]["datosSesionUsuario"])){ ?>
<form class="row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=2&mod=2" method="POST">
  <h4 class="text-primary"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;Datos para sesión de usuario</h4>
  <?php  
    if(isset($_SESSION["modMiembro"]["datosSesionUsuario"])){ ?>
  <div class="form-group col-md-10">
    <label for="usuario" class="form-label">Nombre de usuario:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
      <input type="text" class="form-control" name="nombreUsuario" id="usuario" minlength="6" maxlength="9" value="<?= $_SESSION["modMiembro"]["datosSesionUsuario"]["nombreUsuario"] ?>" placeholder="Ingresa un nombre de usuario" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa un nombre de usuario valido (6-9 caracteres)</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="email" class="form-label">Correo electr&oacute;nico:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span><input type="email" step="any" name="correo" minlength="8" class="form-control" id="email" placeholder="ej. username@domain.com" value="<?= $_SESSION["modMiembro"]["datosSesionUsuario"]["email"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa un correo electronico valido</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="password" class="form-label">Contraseña:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-key"></i></span><input type="password" step="any" name="contrasena" minlength="8" class="form-control" id="password" value="<?= $_SESSION["modMiembro"]["datosSesionUsuario"]["contrasena"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa una contraseña valida (minimo 8 caracteres)</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="conPassword" class="form-label">Confirmar contraseña:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-key"></i></span><input type="password" step="any" name="confContrasena" minlength="8" class="form-control" id="conPassword" placeholder="Ingresar de nuevo la contraseña para confirmar" value="<?= $_SESSION["modMiembro"]["datosSesionUsuario"]["contrasena"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa una contraseña valida (minimo 8 caracteres)</div>
    </div>
  </div>
  <?php } ?>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosUsuario" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
  </div>
</form>

<?php } else {?>

<form class="row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=2&mod=1" method="POST">
  <h4 class="text-primary"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;Datos para sesión de usuario</h4>
  <?php  
    if(isset($_SESSION["nuevoMiembro"]["datosSesionUsuario"])){ ?>
  <div class="form-group col-md-10">
    <label for="usuario" class="form-label">Nombre de usuario:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
      <input type="text" class="form-control" name="nombreUsuario" id="usuario" minlength="6" maxlength="9" value="<?= $_SESSION["nuevoMiembro"]["datosSesionUsuario"]["nombreUsuario"] ?>" placeholder="Ingresa un nombre de usuario" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa un nombre de usuario valido (6-9 caracteres)</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="email" class="form-label">Correo electr&oacute;nico:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span><input type="email" step="any" name="correo" minlength="8" class="form-control" id="email" placeholder="ej. username@domain.com" value="<?= $_SESSION["nuevoMiembro"]["datosSesionUsuario"]["email"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa un correo electronico valido</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="password" class="form-label">Contraseña:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-key"></i></span><input type="password" step="any" name="contrasena" minlength="8" class="form-control" id="password" value="<?= $_SESSION["nuevoMiembro"]["datosSesionUsuario"]["contrasena"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa una contraseña valida (minimo 8 caracteres)</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="conPassword" class="form-label">Confirmar contraseña:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-key"></i></span><input type="password" step="any" name="confContrasena" minlength="8" class="form-control" id="conPassword" placeholder="Ingresar de nuevo la contraseña para confirmar" value="<?= $_SESSION["nuevoMiembro"]["datosSesionUsuario"]["contrasena"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa una contraseña valida (minimo 8 caracteres)</div>
    </div>
  </div>
  <?php } else { ?>
  <div class="form-group col-md-10">
    <label for="usuario" class="form-label">Nombre de usuario:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
      <input type="text" class="form-control" name="nombreUsuario" id="usuario" minlength="6" maxlength="9" placeholder="Ingresa un nombre de usuario" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa un nombre de usuario valido (6-9 caracteres)</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="email" class="form-label">Correo electr&oacute;nico:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span><input type="email" step="any" name="correo" minlength="8" class="form-control" id="email" placeholder="ej. username@domain.com" required>
      <div class="invalid-feedback">[-] Ingresa un correo electronico valido</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="password" class="form-label">Contraseña:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-key"></i></span><input type="password" step="any" name="contrasena" minlength="8" class="form-control" id="password" required>
      <div class="invalid-feedback">[-] Ingresa una contraseña valida (minimo 8 caracteres)</div>
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="conPassword" class="form-label">Confirmar contraseña:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-key"></i></span><input type="password" step="any" name="confContrasena" minlength="8" class="form-control" id="conPassword" placeholder="Ingresar de nuevo la contraseña para confirmar" required>
      <div class="invalid-feedback">[-] Ingresa una contraseña valida (minimo 8 caracteres)</div>
    </div>
  </div>
  <?php } ?>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosUsuario" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
  </div>
</form>
<?php } ?>
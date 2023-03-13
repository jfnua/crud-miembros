<?php if(isset($_SESSION["modMiembro"]["datosPersonales"])){ ?>
<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=3&mod=2" method="POST">
  <h4  class="text-primary"><i class="fa-solid fa-circle-info"></i>&nbsp;Información personal</h4>
  <div class="form-group col-md-5">
    <label for="nombre" class="form-label">Nombre(s):</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre" value="<?= $_SESSION["modMiembro"]["datosPersonales"]["nombre"] ?>" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre</div>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="apellido" class="form-label">Apellido(s):</label>
    <div class="input-group">
      <input type="text" step="any" name="apellido" class="form-control" id="apellido" placeholder="Ingresa tus apellidos" value="<?= $_SESSION["modMiembro"]["datosPersonales"]["apellido"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa apellidos</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span><input type="date" step="any" name="fechaNacimiento" class="form-control" id="fechaNacimiento" value="<?= $_SESSION["modMiembro"]["datosPersonales"]["fechaNacimiento"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa fecha de nacimiento</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="telefono" class="form-label">Tel&eacute;fono:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-mobile-screen-button"></i></span><input type="tel" step="any" name="telefono" minlength="10" maxlength="10" class="form-control" id="telefono" placeholder="ej. 6691285284" value="<?= $_SESSION["modMiembro"]["datosPersonales"]["telefono"] ?>" required>
      <div class="invalid-feedback">[-] Ingresar un numero de telefono valido (10 digitos)</div>
    </div>
  </div>
  <div class="form-group col-md-4 mb-4">
    <label for="curp" class="form-label">CURP:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span><input type="text" step="any" name="curp" minlength="18" maxlength="18" class="form-control" id="curp" placeholder="Ingresa CURP con homoclave" value="<?= $_SESSION["modMiembro"]["datosPersonales"]["curp"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa una CURP valida</div>
    </div>
  </div>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosPersonales" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="modificar.php?page=1"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="modificar.php?cancelMod=1">CANCELAR</a>
  </div>
</form>
  <?php } else { ?>
<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=3&mod=1" method="POST">
  <h4  class="text-primary"><i class="fa-solid fa-circle-info"></i>&nbsp;Información personal</h4>
  <?php 
  if(isset($_SESSION["nuevoMiembro"]["datosPersonales"])){ ?>
  <div class="form-group col-md-5">
    <label for="nombre" class="form-label">Nombre(s):</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre" value="<?= $_SESSION["nuevoMiembro"]["datosPersonales"]["nombre"] ?>" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre</div>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="apellido" class="form-label">Apellido(s):</label>
    <div class="input-group">
      <input type="text" step="any" name="apellido" class="form-control" id="apellido" placeholder="Ingresa tus apellidos" value="<?= $_SESSION["nuevoMiembro"]["datosPersonales"]["apellido"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa apellidos</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span><input type="date" step="any" name="fechaNacimiento" class="form-control" id="fechaNacimiento" value="<?= $_SESSION["nuevoMiembro"]["datosPersonales"]["fechaNacimiento"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa fecha de nacimiento</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="telefono" class="form-label">Tel&eacute;fono:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-mobile-screen-button"></i></span><input type="tel" step="any" name="telefono" minlength="10" maxlength="10" class="form-control" id="telefono" placeholder="ej. 6691285284" value="<?= $_SESSION["nuevoMiembro"]["datosPersonales"]["telefono"] ?>" required>
      <div class="invalid-feedback">[-] Ingresar un numero de telefono valido (10 digitos)</div>
    </div>
  </div>
  <div class="form-group col-md-4 mb-4">
    <label for="curp" class="form-label">CURP:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span><input type="text" step="any" name="curp" minlength="18" maxlength="18" class="form-control" id="curp" placeholder="Ingresa CURP con homoclave" value="<?= $_SESSION["nuevoMiembro"]["datosPersonales"]["curp"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa una CURP valida</div>
    </div>
  </div>
  <?php } else { ?>
  <div class="form-group col-md-5">
    <label for="nombre" class="form-label">Nombre(s):</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre</div>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="apellido" class="form-label">Apellido(s):</label>
    <div class="input-group">
      <input type="text" step="any" name="apellido" class="form-control" id="apellido" placeholder="Ingresa tus apellidos" required>
      <div class="invalid-feedback">[-] Ingresa apellidos</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span><input type="date" step="any" name="fechaNacimiento" class="form-control" id="fechaNacimiento"  required>
      <div class="invalid-feedback">[-] Ingresa fecha de nacimiento</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="telefono" class="form-label">Tel&eacute;fono:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-mobile-screen-button"></i></span><input type="tel" step="any" name="telefono" minlength="10" maxlength="10" class="form-control" id="telefono" placeholder="ej. 6691285284" required>
      <div class="invalid-feedback">[-] Ingresar un numero de telefono valido (10 digitos)</div>
    </div>
  </div>
  <div class="form-group col-md-4 mb-4">
    <label for="curp" class="form-label">CURP:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span><input type="text" step="any" name="curp" minlength="18" maxlength="18" class="form-control" id="curp" placeholder="Ingresa CURP con homoclave" required>
      <div class="invalid-feedback">[-] Ingresa una CURP valida</div>
    </div>
  </div>
  <?php } 
  if(isset($_GET["nocurp"])){ ?>
  <div class="text-center">
    <p class="lead fw-bold fs-5 text-danger">[-] La CURP que ingresaste no es válida.</p>
  </div>
  <?php } ?>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosPersonales" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="agregar.php?page=1"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="agregar.php?cancelReg=1">CANCELAR</a>
  </div>
</form>
<?php } ?>
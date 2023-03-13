<?php if(isset($_SESSION["modMiembro"]["datosContactoEmergencia"])){ ?>
<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=7&mod=2" method="POST">
  <h4 class="text-primary" ><i class="fa-solid fa-id-card-clip"></i>&nbsp;Contacto de emergencia</h4>
  <div class="form-group col-md-10">
    <label for="nombre" class="form-label">Nombre completo:</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa nombre(s) y apellido(s)" value="<?= $_SESSION["modMiembro"]["datosContactoEmergencia"]["nombre"] ?>" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre completo del contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="relacionContactoEmergencia" class="form-label">Relación:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-hands-praying"></i></span>
      <select name="relacionContactoEmergencia" class="form-select" id="relacionContactoEmergencia" required>
        <!-- <option selected disabled></option> -->
        <option value="madre" <?php if($_SESSION["modMiembro"]["datosContactoEmergencia"]["relacion"] == "madre") { echo "selected";} ?> >Madre</option>
        <option value="padre" <?php if($_SESSION["modMiembro"]["datosContactoEmergencia"]["relacion"] == "padre") { echo "selected";} ?>  >Padre</option>
        <option value="hij@" <?php if($_SESSION["modMiembro"]["datosContactoEmergencia"]["relacion"] == "hij@") { echo "selected";} ?>  >Hijo(a)</option>
        <option value="herman@" <?php if($_SESSION["modMiembro"]["datosContactoEmergencia"]["relacion"] == "herman@") { echo "selected";} ?>  >Hermano(a)</option>
        <option value="espos@" <?php if($_SESSION["modMiembro"]["datosContactoEmergencia"]["relacion"] == "espos@") { echo "selected";} ?>  >Espos(a)</option>
        <option value="otro" <?php if($_SESSION["modMiembro"]["datosContactoEmergencia"]["relacion"] == "otro") { echo "selected";} ?>  >Otro</option>
      </select>
      <div class="invalid-feedback">[-] Seleccione la relaci&oacute;n que tiene con el contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="telefono" class="form-label">Tel&eacute;fono:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-mobile-screen-button"></i></span><input type="tel" name="telefono" minlength="10" maxlength="10" class="form-control" id="telefono" placeholder="ej. 6691285284" value="<?= $_SESSION["modMiembro"]["datosContactoEmergencia"]["telefono"] ?>" required>
      <div class="invalid-feedback">[-] Ingresar un numero de telefono valido (10 digitos) del contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="email" class="form-label">Correo electr&oacute;nico:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span><input type="email" name="correo" minlength="8" class="form-control" id="email" placeholder="ej. username@domain.com" value="<?= $_SESSION["modMiembro"]["datosContactoEmergencia"]["email"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa un correo electronico valido del contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosEmergencia" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="modificar.php?page=5"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="modificar.php?cancelMod=1">CANCELAR</a>
  </div>
</form>
<?php }else { ?>

  <form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=7&mod=1" method="POST">
  <h4 class="text-primary" ><i class="fa-solid fa-id-card-clip"></i>&nbsp;Contacto de emergencia</h4>
  <?php
  if(isset($_SESSION["nuevoMiembro"]["datosContactoEmergencia"])) {?>
  <div class="form-group col-md-10">
    <label for="nombre" class="form-label">Nombre completo:</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa nombre(s) y apellido(s)" value="<?= $_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["nombre"] ?>" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre completo del contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="relacionContactoEmergencia" class="form-label">Relación:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-hands-praying"></i></span>
      <select name="relacionContactoEmergencia" class="form-select" id="relacionContactoEmergencia" required>
        <!-- <option selected disabled></option> -->
        <option value="madre" <?php if($_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["relacion"] == "madre") { echo "selected";} ?> >Madre</option>
        <option value="padre" <?php if($_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["relacion"] == "padre") { echo "selected";} ?>  >Padre</option>
        <option value="hij@" <?php if($_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["relacion"] == "hij@") { echo "selected";} ?>  >Hijo(a)</option>
        <option value="herman@" <?php if($_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["relacion"] == "herman@") { echo "selected";} ?>  >Hermano(a)</option>
        <option value="espos@" <?php if($_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["relacion"] == "espos@") { echo "selected";} ?>  >Espos(a)</option>
        <option value="otro" <?php if($_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["relacion"] == "otro") { echo "selected";} ?>  >Otro</option>
      </select>
      <div class="invalid-feedback">[-] Seleccione la relaci&oacute;n que tiene con el contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="telefono" class="form-label">Tel&eacute;fono:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-mobile-screen-button"></i></span><input type="tel" name="telefono" minlength="10" maxlength="10" class="form-control" id="telefono" placeholder="ej. 6691285284" value="<?= $_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["telefono"] ?>" required>
      <div class="invalid-feedback">[-] Ingresar un numero de telefono valido (10 digitos) del contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="email" class="form-label">Correo electr&oacute;nico:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span><input type="email" name="correo" minlength="8" class="form-control" id="email" placeholder="ej. username@domain.com" value="<?= $_SESSION["nuevoMiembro"]["datosContactoEmergencia"]["email"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa un correo electronico valido del contacto de emergencia</div>
    </div>
  </div>
  <?php } else { ?>
  <div class="form-group col-md-10">
    <label for="nombre" class="form-label">Nombre completo:</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa nombre(s) y apellido(s)" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre completo del contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="relacionContactoEmergencia" class="form-label">Relación:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-hands-praying"></i></span>
      <select name="relacionContactoEmergencia" class="form-select" id="relacionContactoEmergencia" required>
        <option selected disabled></option>
        <option value="madre">Madre</option>
        <option value="padre">Padre</option>
        <option value="hijo">Hijo(a)</option>
        <option value="herman@">Hermano(a)</option>
        <option value="espos@">Espos(a)</option>
        <option value="otro">Otro</option>
      </select>
      <div class="invalid-feedback">[-] Seleccione la relaci&oacute;n que tiene con el contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="telefono" class="form-label">Tel&eacute;fono:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-mobile-screen-button"></i></span><input type="tel" name="telefono" minlength="10" maxlength="10" class="form-control" id="telefono" placeholder="ej. 6691285284" required>
      <div class="invalid-feedback">[-] Ingresar un numero de telefono valido (10 digitos) del contacto de emergencia</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="email" class="form-label">Correo electr&oacute;nico:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span><input type="email" name="correo" minlength="8" class="form-control" id="email" placeholder="ej. username@domain.com" required>
      <div class="invalid-feedback">[-] Ingresa un correo electronico valido del contacto de emergencia</div>
    </div>
  </div>
  <?php } ?>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosEmergencia" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="agregar.php?page=5"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="agregar.php?cancelReg=1">CANCELAR</a>
  </div>
</form>
<?php } ?>
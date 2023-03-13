<?php if(isset($_SESSION["modMiembro"]["datosDomicilio"])){ ?>
<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=4&mod=2" method="POST">
  <h4  class="text-primary"><i class="fa-solid fa-house-user"></i>&nbsp;Datos del Domicilio</h4>
  <div class="form-group col-md-10">
    <label for="direccion" class="form-label">Direcci&oacute;n:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-map-location-dot"></i></span><input type="text" class="form-control" name="direccion" id="direccion" placeholder="ej. Avenida del mar 345" value="<?= $_SESSION["modMiembro"]["datosDomicilio"]["direccion"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa la direccion del domicilio</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="ciudad" class="form-label">Ciudad:</label>
    <div class="input-group">
      <input type="text" name="ciudad" class="form-control" id="ciudad" value="<?= $_SESSION["modMiembro"]["datosDomicilio"]["ciudad"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa la ciudad</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="estado" class="form-label">Estado:</label>
    <div class="input-group">
      <input type="text" name="estado" class="form-control" id="estado" value="<?= $_SESSION["modMiembro"]["datosDomicilio"]["estado"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa el estado</div>
    </div>
  </div>
  <div class="form-group col-md-2">
    <label for="pais" class="form-label">Pais:</label>
    <div class="input-group">
      <input type="text" name="pais" class="form-control" id="pais" value="<?= $_SESSION["modMiembro"]["datosDomicilio"]["pais"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa el pais</div>
    </div>
  </div>
  <div class="form-group col-md-2 mb-4">
    <label for="codigoPostal" class="form-label">C&oacute;digo Postal:</label>
    <div class="input-group">
      <input type="text" name="codigoPostal" class="form-control" id="codigoPostal" placeholder="ej. 82120" value="<?= $_SESSION["modMiembro"]["datosDomicilio"]["codigoPostal"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa el c&oacute;digo postal</div>
    </div>
  </div>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosDomicilio" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="modificar.php?page=2"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="modificar.php?cancelMod=1">CANCELAR</a>
  </div>
</form>
  <?php } else { ?>

<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=4&mod=1" method="POST">
  <h4  class="text-primary"><i class="fa-solid fa-house-user"></i>&nbsp;Datos del Domicilio</h4>
  <?php
  if(isset($_SESSION["nuevoMiembro"]["datosDomicilio"])) {?>
  <div class="form-group col-md-10">
    <label for="direccion" class="form-label">Direcci&oacute;n:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-map-location-dot"></i></span><input type="text" class="form-control" name="direccion" id="direccion" placeholder="ej. Avenida del mar 345" value="<?= $_SESSION["nuevoMiembro"]["datosDomicilio"]["direccion"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa la direccion del domicilio</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="ciudad" class="form-label">Ciudad:</label>
    <div class="input-group">
      <input type="text" name="ciudad" class="form-control" id="ciudad" value="<?= $_SESSION["nuevoMiembro"]["datosDomicilio"]["ciudad"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa la ciudad</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="estado" class="form-label">Estado:</label>
    <div class="input-group">
      <input type="text" name="estado" class="form-control" id="estado" value="<?= $_SESSION["nuevoMiembro"]["datosDomicilio"]["estado"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa el estado</div>
    </div>
  </div>
  <div class="form-group col-md-2">
    <label for="pais" class="form-label">Pais:</label>
    <div class="input-group">
      <input type="text" name="pais" class="form-control" id="pais" value="<?= $_SESSION["nuevoMiembro"]["datosDomicilio"]["pais"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa el pais</div>
    </div>
  </div>
  <div class="form-group col-md-2 mb-4">
    <label for="codigoPostal" class="form-label">C&oacute;digo Postal:</label>
    <div class="input-group">
      <input type="text" name="codigoPostal" class="form-control" id="codigoPostal" placeholder="ej. 82120" value="<?= $_SESSION["nuevoMiembro"]["datosDomicilio"]["codigoPostal"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa el c&oacute;digo postal</div>
    </div>
  </div>
  <?php }else { ?>
  <div class="form-group col-md-10">
    <label for="direccion" class="form-label">Direcci&oacute;n:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-map-location-dot"></i></span><input type="text" class="form-control" name="direccion" id="direccion" placeholder="ej. Avenida del mar 345" required>
      <div class="invalid-feedback">[-] Ingresa la direccion del domicilio</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="ciudad" class="form-label">Ciudad:</label>
    <div class="input-group">
      <input type="text" name="ciudad" class="form-control" id="ciudad" required>
      <div class="invalid-feedback">[-] Ingresa la ciudad</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="estado" class="form-label">Estado:</label>
    <div class="input-group">
      <input type="text" name="estado" class="form-control" id="estado" required>
      <div class="invalid-feedback">[-] Ingresa el estado</div>
    </div>
  </div>
  <div class="form-group col-md-2">
    <label for="pais" class="form-label">Pais:</label>
    <div class="input-group">
      <input type="text" name="pais" class="form-control" id="pais" required>
      <div class="invalid-feedback">[-] Ingresa el pais</div>
    </div>
  </div>
  <div class="form-group col-md-2 mb-4">
    <label for="codigoPostal" class="form-label">C&oacute;digo Postal:</label>
    <div class="input-group">
      <input type="text" name="codigoPostal" class="form-control" id="codigoPostal" placeholder="ej. 82120" required>
      <div class="invalid-feedback">[-] Ingresa el c&oacute;digo postal</div>
    </div>
  </div>
  <?php } ?>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosDomicilio" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="agregar.php?page=2"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="agregar.php?cancelReg=1">CANCELAR</a>
  </div>
</form>
<?php } ?>
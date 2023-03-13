<?php if(isset($_SESSION["modMiembro"]["datosPareja"])){ ?>
<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?mod=2" method="POST">
  <h4 class="text-primary"><i class="fa-solid fa-heart"></i>&nbsp;Información de pareja (opcional)</h4>
  <div class="form-group col-md-10">
    <label for="nombre" class="form-label">Nombre completo:</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa nombre(s) y apellido(s)" value="<?= $_SESSION["modMiembro"]["datosPareja"]["nombre"] ?>" >
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre completo de tu pareja</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="nombreCredencial" class="form-label">Nombre para credencial:</label>
    <div class="input-group">
      <input type="text"  name="nombreCredencial" class="form-control" id="nombreCredencial" placeholder="Primer nombre y apellido" value="<?= $_SESSION["modMiembro"]["datosPareja"]["nombreCredencial"] ?>" >
      <div class="invalid-feedback">[-] Ingresa nombre para credencial de pareja</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span><input type="date" name="fechaNacimiento" class="form-control" id="fechaNacimiento" value="<?= $_SESSION["modMiembro"]["datosPareja"]["fechaNacimiento"] ?>">
      <div class="invalid-feedback">[-] Ingresa fecha de nacimiento de tu pareja</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="tipoRelacion" class="form-label">Relación:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-hands-praying"></i></span>
      <select name="tipoRelacion" class="form-select" id="tipoRelacion">
        <!-- <option selected disabled></option> -->
        <option value="divorciado(a)" <?php if($_SESSION["modMiembro"]["datosPareja"]["tipoRelacion"] == "divorciado(a)") { echo "selected";} ?> >Divorciado(a)</option>
        <option value="matrimonio" <?php if($_SESSION["modMiembro"]["datosPareja"]["tipoRelacion"] == "matrimonio") { echo "selected";} ?> >Matrimonio</option>
        <option value="viudo(a)" <?php if($_SESSION["modMiembro"]["datosPareja"]["tipoRelacion"] == "viudo(a)") { echo "selected";} ?> >Viudo(a)</option>
        <option value="otro" <?php if($_SESSION["modMiembro"]["datosPareja"]["tipoRelacion"] == "otro") { echo "selected";} ?> >Otro</option>
      </select>
      <div class="invalid-feedback">[-] Seleccione el tipo de relaci&oacute;n que tiene con su pareja</div>
    </div>
  </div>
  <div class="form-group col-md-7">
    <label for="hijos" class="form-label">¿Usted tiene hijos menores de 21 a&nacute;os?</label>
    <div class="input-group">
      <textarea name="hijos" rows="2" class="form-control" id="hijos" placeholder="Escriba aquí los nombres (separados por coma) en caso de tener..."><?= $_SESSION["modMiembro"]["datosPareja"]["hijos"] ?></textarea>
    </div>
  </div>
  <div class="form-group col-md-2 mx-5 mb-3">
    <label for="activo" class="form-label">Activo:</label>
    <div class="input-group">
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="activo" id="inlineRadio1" value="1" <?php if($_SESSION["modMiembro"]["datosPareja"]["activo"] == "1") { echo "checked";} ?> >
        <label class="form-check-label" for="inlineRadio1">SI</label>
      </div>
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="activo" id="inlineRadio2" value="2" <?php if($_SESSION["modMiembro"]["datosPareja"]["activo"] == "2") { echo "checked";} ?>>
        <label class="form-check-label" for="inlineRadio2">NO</label>
      </div>
    </div>
  </div>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosPareja" class="btn btn-success mx-2" value="1">FINALIZAR&nbsp;&nbsp;<i class="fa-solid fa-circle-check"></i></button>
    <a class="btn btn-secondary mx-2" href="modificar.php?page=6"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="modificar.php?cancelMod=1">CANCELAR</a>
  </div>
</form>
<?php } else {?>
<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?mod=1" method="POST">
  <h4 class="text-primary"><i class="fa-solid fa-heart"></i>&nbsp;Información de pareja (opcional)</h4>
  <?php
  if(isset($_SESSION["nuevoMiembro"]["datosPareja"])) {?>
  <div class="form-group col-md-10">
    <label for="nombre" class="form-label">Nombre completo:</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa nombre(s) y apellido(s)" value="<?= $_SESSION["nuevoMiembro"]["datosPareja"]["nombre"] ?>" >
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre completo de tu pareja</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="nombreCredencial" class="form-label">Nombre para credencial:</label>
    <div class="input-group">
      <input type="text"  name="nombreCredencial" class="form-control" id="nombreCredencial" placeholder="Primer nombre y apellido" value="<?= $_SESSION["nuevoMiembro"]["datosPareja"]["nombreCredencial"] ?>" >
      <div class="invalid-feedback">[-] Ingresa nombre para credencial de pareja</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span><input type="date" name="fechaNacimiento" class="form-control" id="fechaNacimiento" value="<?= $_SESSION["nuevoMiembro"]["datosPareja"]["fechaNacimiento"] ?>">
      <div class="invalid-feedback">[-] Ingresa fecha de nacimiento de tu pareja</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="tipoRelacion" class="form-label">Relación:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-hands-praying"></i></span>
      <select name="tipoRelacion" class="form-select" id="tipoRelacion">
        <!-- <option selected disabled></option> -->
        <option value="divorciad@" <?php if($_SESSION["nuevoMiembro"]["datosPareja"]["tipoRelacion"] == "divorciad@") { echo "selected";} ?> >Divorciado(a)</option>
        <option value="matrimonio" <?php if($_SESSION["nuevoMiembro"]["datosPareja"]["tipoRelacion"] == "matrimonio") { echo "selected";} ?> >Matrimonio</option>
        <option value="viud@" <?php if($_SESSION["nuevoMiembro"]["datosPareja"]["tipoRelacion"] == "viud@") { echo "selected";} ?> >Viudo</option>
        <option value="otro" <?php if($_SESSION["nuevoMiembro"]["datosPareja"]["tipoRelacion"] == "otro") { echo "selected";} ?> >Otro</option>
      </select>
      <div class="invalid-feedback">[-] Seleccione el tipo de relaci&oacute;n que tiene con su pareja</div>
    </div>
  </div>
  <div class="form-group col-md-7">
    <label for="hijos" class="form-label">¿Usted tiene hijos menores de 21 a&nacute;os?</label>
    <div class="input-group">
      <textarea name="hijos" rows="2" class="form-control" id="hijos" placeholder="Escriba aquí los nombres (separados por coma) en caso de tener..."><?= $_SESSION["nuevoMiembro"]["datosPareja"]["hijos"] ?></textarea>
    </div>
  </div>
  <div class="form-group col-md-2 mx-5 mb-3">
    <label for="activo" class="form-label">Activo:</label>
    <div class="input-group">
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="activo" id="inlineRadio1" value="1" <?php if($_SESSION["nuevoMiembro"]["datosPareja"]["activo"] == "1") { echo "checked";} ?> >
        <label class="form-check-label" for="inlineRadio1">SI</label>
      </div>
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="activo" id="inlineRadio2" value="2" <?php if($_SESSION["nuevoMiembro"]["datosPareja"]["activo"] == "2") { echo "checked";} ?>>
        <label class="form-check-label" for="inlineRadio2">NO</label>
      </div>
    </div>
  </div>
  <?php } else { ?>
  <div class="form-group col-md-10">
    <label for="nombre" class="form-label">Nombre completo:</label>
    <div class="input-group">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa nombre(s) y apellido(s)">
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">[-] Ingresa nombre completo de tu pareja</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="nombreCredencial" class="form-label">Nombre para credencial:</label>
    <div class="input-group">
      <input type="text"  name="nombreCredencial" class="form-control" id="nombreCredencial" placeholder="Primer nombre y apellido">
      <div class="invalid-feedback">[-] Ingresa nombre para credencial de pareja</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span><input type="date" step="any" name="fechaNacimiento" class="form-control" id="fechaNacimiento">
      <div class="invalid-feedback">[-] Ingresa fecha de nacimiento de tu pareja</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="tipoRelacion" class="form-label">Relación:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-hands-praying"></i></span>
      <select name="tipoRelacion" class="form-select" id="tipoRelacion">
        <option selected disabled></option>
        <option value="divorciad@">Divorciado(a)</option>
        <option value="matrimonio">Matrimonio</option>
        <option value="viud@">Viudo</option>
        <option value="otro">Otro</option>
      </select>
      <div class="invalid-feedback">[-] Seleccione el tipo de relaci&oacute;n que tiene con su pareja</div>
    </div>
  </div>
  <div class="form-group col-md-7">
    <label for="hijos" class="form-label">¿Usted tiene hijos menores de 21 a&nacute;os?</label>
    <div class="input-group">
      <textarea name="hijos" rows="2" class="form-control" id="hijos" placeholder="Escriba aquí los nombres (separados por coma) en caso de tener..."></textarea>
    </div>
  </div>
  <div class="form-group col-md-2 mx-5 mb-3">
    <label for="activo" class="form-label">Activo:</label>
    <div class="input-group">
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="activo" id="inlineRadio1" value="1">
        <label class="form-check-label" for="inlineRadio1">SI</label>
      </div>
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="activo" id="inlineRadio2" value="2">
        <label class="form-check-label" for="inlineRadio2">NO</label>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosPareja" class="btn btn-success mx-2" value="1">FINALIZAR&nbsp;&nbsp;<i class="fa-solid fa-circle-check"></i></button>
    <a class="btn btn-secondary mx-2" href="agregar.php?page=6"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="agregar.php?cancelReg=1">CANCELAR</a>
  </div>
</form>
<?php } ?>
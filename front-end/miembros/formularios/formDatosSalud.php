<?php if(isset($_SESSION["modMiembro"]["datosSalud"])){ ?>
  <form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=6&mod=2" method="POST">
  <h4 class="text-primary" ><i class="fa-solid fa-heart-pulse"></i>&nbsp;Salud m&eacute;dica</h4>
  <div class="form-group col-md-5">
    <label for="enfermedades" class="form-label">¿Usted tiene alguna enfermedad?</label>
    <div class="input-group">
      <textarea name="enfermedades" rows="5" class="form-control" id="enfermedades" placeholder="Escriba aquí la(s) enfermedad(es) en caso de tener alguna..."><?= $_SESSION["modMiembro"]["datosSalud"]["enfermedades"] ?></textarea>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="alergias" class="form-label">¿Usted tiene alguna alergia?</label>
    <div class="input-group">
      <textarea name="alergias" rows="5" class="form-control" id="alergias" placeholder="Escriba aquí la(s) alergia(s) en caso de tener alguna..."><?= $_SESSION["modMiembro"]["datosSalud"]["alergias"] ?></textarea>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="tipoSangre" class="form-label">¿Cu&aacute;l es tu tipo de sangre?</label>
    <div class="input-group">
      <span class="input-group-text text-danger"><i class="fa-solid fa-droplet"></i></span>
      <select name="tipoSangre" class="form-select" id="tipoSangre" required>
        <!-- <option selected disabled></option> -->
        <option value="A+" <?php if($_SESSION["modMiembro"]["datosSalud"]["tipoSangre"] == "A+") { echo "selected";} ?> >A+</option>
        <option value="A-" <?php if($_SESSION["modMiembro"]["datosSalud"]["tipoSangre"] == "A-") { echo "selected";} ?> >A-</option>
        <option value="B+" <?php if($_SESSION["modMiembro"]["datosSalud"]["tipoSangre"] == "B+") { echo "selected";} ?> >B+</option>
        <option value="B-" <?php if($_SESSION["modMiembro"]["datosSalud"]["tipoSangre"] == "B-") { echo "selected";} ?> >B-</option>
        <option value="O+" <?php if($_SESSION["modMiembro"]["datosSalud"]["tipoSangre"] == "O+") { echo "selected";} ?> >O+</option>
        <option value="O-" <?php if($_SESSION["modMiembro"]["datosSalud"]["tipoSangre"] == "O-") { echo "selected";} ?> >O-</option>
        <option value="AB+" <?php if($_SESSION["modMiembro"]["datosSalud"]["tipoSangre"] == "AB+") { echo "selected";} ?> >AB+</option>
        <option value="AB-" <?php if($_SESSION["modMiembro"]["datosSalud"]["tipoSangre"] == "AB-") { echo "selected";} ?> >AB-</option>
      </select>
      <div class="invalid-feedback">[-] Selecciona tu tipo de sangre</div>
    </div>
  </div>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosSalud" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="modificar.php?page=4"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="modificar.php?cancelMod=1">CANCELAR</a>
  </div>
</form>
<?php }else {?>
<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=6&mod=1" method="POST">
  <h4 class="text-primary" ><i class="fa-solid fa-heart-pulse"></i>&nbsp;Salud m&eacute;dica</h4>
  <?php
  if(isset($_SESSION["nuevoMiembro"]["datosSalud"])) {?>
  <div class="form-group col-md-5">
    <label for="enfermedades" class="form-label">¿Usted tiene alguna enfermedad?</label>
    <div class="input-group">
      <textarea name="enfermedades" rows="5" class="form-control" id="enfermedades" placeholder="Escriba aquí la(s) enfermedad(es) en caso de tener alguna..."><?= $_SESSION["nuevoMiembro"]["datosSalud"]["enfermedades"] ?></textarea>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="alergias" class="form-label">¿Usted tiene alguna alergia?</label>
    <div class="input-group">
      <textarea name="alergias" rows="5" class="form-control" id="alergias" placeholder="Escriba aquí la(s) alergia(s) en caso de tener alguna..."><?= $_SESSION["nuevoMiembro"]["datosSalud"]["alergias"] ?></textarea>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="tipoSangre" class="form-label">¿Cu&aacute;l es tu tipo de sangre?</label>
    <div class="input-group">
      <span class="input-group-text text-danger"><i class="fa-solid fa-droplet"></i></span>
      <select name="tipoSangre" class="form-select" id="tipoSangre" required>
        <!-- <option selected disabled></option> -->
        <option value="A+" <?php if($_SESSION["nuevoMiembro"]["datosSalud"]["tipoSangre"] == "A+") { echo "selected";} ?> >A+</option>
        <option value="A-" <?php if($_SESSION["nuevoMiembro"]["datosSalud"]["tipoSangre"] == "A-") { echo "selected";} ?> >A-</option>
        <option value="B+" <?php if($_SESSION["nuevoMiembro"]["datosSalud"]["tipoSangre"] == "B+") { echo "selected";} ?> >B+</option>
        <option value="B-" <?php if($_SESSION["nuevoMiembro"]["datosSalud"]["tipoSangre"] == "B-") { echo "selected";} ?> >B-</option>
        <option value="O+" <?php if($_SESSION["nuevoMiembro"]["datosSalud"]["tipoSangre"] == "O+") { echo "selected";} ?> >O+</option>
        <option value="O-" <?php if($_SESSION["nuevoMiembro"]["datosSalud"]["tipoSangre"] == "O-") { echo "selected";} ?> >O-</option>
        <option value="AB+" <?php if($_SESSION["nuevoMiembro"]["datosSalud"]["tipoSangre"] == "AB+") { echo "selected";} ?> >AB+</option>
        <option value="AB-" <?php if($_SESSION["nuevoMiembro"]["datosSalud"]["tipoSangre"] == "AB-") { echo "selected";} ?> >AB-</option>
      </select>
      <div class="invalid-feedback">[-] Selecciona tu tipo de sangre</div>
    </div>
  </div>
  <?php } else { ?>
  <div class="form-group col-md-5">
    <label for="enfermedades" class="form-label">¿Usted tiene alguna enfermedad?</label>
    <div class="input-group">
      <textarea name="enfermedades" rows="5" class="form-control" id="enfermedades" placeholder="Escriba aquí la(s) enfermedad(es) en caso de tener alguna..."></textarea>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="alergias" class="form-label">¿Usted tiene alguna alergia?</label>
    <div class="input-group">
      <textarea name="alergias" rows="5" class="form-control" id="alergias" placeholder="Escriba aquí la(s) alergia(s) en caso de tener alguna..."></textarea>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="tipoSangre" class="form-label">¿Cu&aacute;l es tu tipo de sangre?</label>
    <div class="input-group">
      <span class="input-group-text text-danger"><i class="fa-solid fa-droplet"></i></span>
      <select name="tipoSangre" class="form-select" id="tipoSangre" required>
        <option selected disabled></option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
      </select>
      <div class="invalid-feedback">[-] Selecciona tu tipo de sangre</div>
    </div>
  </div>
  <?php } ?>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosSalud" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="agregar.php?page=4"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="agregar.php?cancelReg=1">CANCELAR</a>
  </div>
</form>
<?php } ?>
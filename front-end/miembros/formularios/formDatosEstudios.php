<?php if(isset($_SESSION["modMiembro"]["datosEstudios"])){ ?>
  <form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=5&mod=2" method="POST">
  <h4 class="text-primary" ><i class="fa-solid fa-user-graduate"></i>&nbsp;Estudios acad&eacute;micos</h4>
  <div class="form-group col-md-5">
    <label for="universidad" class="form-label">Universidad:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
      <input type="text" name="universidad" class="form-control" id="universidad" placeholder="Nombre de la universidad" value="<?= $_SESSION["modMiembro"]["datosEstudios"]["universidad"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa nombre de la universidad</div>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="licenciatura" class="form-label">Licenciatura:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-book-bookmark"></i></span>
      <input type="text" name="licenciatura" class="form-control" id="licenciatura" placeholder="Nombre de la licenciatura" value="<?= $_SESSION["modMiembro"]["datosEstudios"]["licenciatura"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa una licenciatura</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="gradoEstudio" class="form-label">Ultimo grado de estudio:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
      <select name="gradoEstudio" class="form-select" id="gradoEstudio" required>
        <!-- <option selected disabled></option> -->
        <option value="1" <?php if($_SESSION["modMiembro"]["datosEstudios"]["gradoEstudio"] == "1") { echo "selected";} ?> >Primer grado</option>
        <option value="2" <?php if($_SESSION["modMiembro"]["datosEstudios"]["gradoEstudio"] == "2") { echo "selected";} ?>>Segundo grado</option>
        <option value="3" <?php if($_SESSION["modMiembro"]["datosEstudios"]["gradoEstudio"] == "3") { echo "selected";} ?> >Tercer grado</option>
        <option value="4" <?php if($_SESSION["modMiembro"]["datosEstudios"]["gradoEstudio"] == "4") { echo "selected";} ?> >Cuarto grado</option>
        <option value="5" <?php if($_SESSION["modMiembro"]["datosEstudios"]["gradoEstudio"] == "5") { echo "selected";} ?> >Quinto Grado</option>
      </select>
      <div class="invalid-feedback">[-] Selecciona tu ultimo grado de estudio</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaGradoEstudio" class="form-label">Año de ultimo grado de estudios:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
      <input type="number" min="1900" max="2030"  name="fechaGradoEstudio" class="form-control" id="fechaGradoEstudio" placeholder="ej. 1998" value="<?= $_SESSION["modMiembro"]["datosEstudios"]["fechaGradoEstudio"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa el año de tu ultimo grado de estudio</div>
    </div>
  </div>
  <div class="form-group col-md-2 mx-5 mb-4">
    <label for="directivo" class="form-label">Directivo:</label>
    <div class="input-group">
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="directivo" id="inlineRadio1" value="1" <?php if($_SESSION["modMiembro"]["datosEstudios"]["directivo"] == "1") { echo "checked";} ?>  >
        <label class="form-check-label" for="inlineRadio1">SI</label>
      </div>
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="directivo" id="inlineRadio2" value="2" <?php if($_SESSION["modMiembro"]["datosEstudios"]["directivo"] == "2") { echo "checked";} ?> >
        <label class="form-check-label" for="inlineRadio2">NO</label>
      </div>
    </div>
  </div>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosEstudios" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="modificar.php?page=3"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="modificar.php?cancelMod=1">CANCELAR</a>
  </div>
</form>
<?php }else { ?>
<form class="mt-4 row g-3 justify-content-center was-validated" action="formularios/validar/formMiembro.php?page=5&mod=1" method="POST">
  <h4 class="text-primary" ><i class="fa-solid fa-user-graduate"></i>&nbsp;Estudios acad&eacute;micos</h4>
   <?php
  if(isset($_SESSION["nuevoMiembro"]["datosEstudios"])) {?>
  <div class="form-group col-md-5">
    <label for="universidad" class="form-label">Universidad:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
      <input type="text" name="universidad" class="form-control" id="universidad" placeholder="Nombre de la universidad" value="<?= $_SESSION["nuevoMiembro"]["datosEstudios"]["universidad"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa nombre de la universidad</div>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="licenciatura" class="form-label">Licenciatura:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-book-bookmark"></i></span>
      <input type="text" name="licenciatura" class="form-control" id="licenciatura" placeholder="Nombre de la licenciatura" value="<?= $_SESSION["nuevoMiembro"]["datosEstudios"]["licenciatura"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa una licenciatura</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="gradoEstudio" class="form-label">Ultimo grado de estudio:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
      <select name="gradoEstudio" class="form-select" id="gradoEstudio" required>
        <!-- <option selected disabled></option> -->
        <option value="1" <?php if($_SESSION["nuevoMiembro"]["datosEstudios"]["gradoEstudio"] == "1") { echo "selected";} ?> >Primer grado</option>
        <option value="2" <?php if($_SESSION["nuevoMiembro"]["datosEstudios"]["gradoEstudio"] == "2") { echo "selected";} ?>>Segundo grado</option>
        <option value="3" <?php if($_SESSION["nuevoMiembro"]["datosEstudios"]["gradoEstudio"] == "3") { echo "selected";} ?> >Tercer grado</option>
        <option value="4" <?php if($_SESSION["nuevoMiembro"]["datosEstudios"]["gradoEstudio"] == "4") { echo "selected";} ?> >Cuarto grado</option>
        <option value="5" <?php if($_SESSION["nuevoMiembro"]["datosEstudios"]["gradoEstudio"] == "5") { echo "selected";} ?> >Quinto Grado</option>
      </select>
      <div class="invalid-feedback">[-] Selecciona tu ultimo grado de estudio</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaGradoEstudio" class="form-label">Año de ultimo grado de estudios:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
      <input type="number" min="1900" max="2030"  name="fechaGradoEstudio" class="form-control" id="fechaGradoEstudio" placeholder="ej. 1998" value="<?= $_SESSION["nuevoMiembro"]["datosEstudios"]["fechaGradoEstudio"] ?>" required>
      <div class="invalid-feedback">[-] Ingresa el año de tu ultimo grado de estudio</div>
    </div>
  </div>
  <div class="form-group col-md-2 mx-5 mb-4">
    <label for="directivo" class="form-label">Directivo:</label>
    <div class="input-group">
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="directivo" id="inlineRadio1" value="1" <?php if($_SESSION["nuevoMiembro"]["datosEstudios"]["directivo"] == "1") { echo "checked";} ?>  >
        <label class="form-check-label" for="inlineRadio1">SI</label>
      </div>
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="directivo" id="inlineRadio2" value="2" <?php if($_SESSION["nuevoMiembro"]["datosEstudios"]["directivo"] == "2") { echo "checked";} ?> >
        <label class="form-check-label" for="inlineRadio2">NO</label>
      </div>
    </div>
  </div>
  <?php } else {?>
  <div class="form-group col-md-5">
    <label for="universidad" class="form-label">Universidad:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
      <input type="text" name="universidad" class="form-control" id="universidad" placeholder="Nombre de la universidad" required>
      <div class="invalid-feedback">[-] Ingresa nombre de la universidad</div>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label for="licenciatura" class="form-label">Licenciatura:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-book-bookmark"></i></span>
      <input type="text" name="licenciatura" class="form-control" id="licenciatura" placeholder="Nombre de la licenciatura" required>
      <div class="invalid-feedback">[-] Ingresa una licenciatura</div>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="gradoEstudio" class="form-label">Ultimo grado de estudio:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
      <select name="gradoEstudio" class="form-select" id="gradoEstudio" required>
        <option selected disabled></option>
        <option value="1">Primer grado</option>
        <option value="2">Segundo grado</option>
        <option value="3">Tercer grado</option>
        <option value="4">Cuarto grado</option>
        <option value="5">Quinto Grado</option>
      </select>
      <div class="invalid-feedback">[-] Selecciona tu ultimo grado de estudio</div>
    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="fechaGradoEstudio" class="form-label">Año de ultimo grado de estudios:</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
      <input type="number" min="1900" max="2030"  name="fechaGradoEstudio" class="form-control" id="fechaGradoEstudio" placeholder="ej. 1998" required>
      <div class="invalid-feedback">[-] Ingresa el año de tu ultimo grado de estudio</div>
    </div>
  </div>
  <div class="form-group col-md-2 mx-5 mb-4">
    <label for="directivo" class="form-label">Directivo:</label>
    <div class="input-group">
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="directivo" id="inlineRadio1" value="1">
        <label class="form-check-label" for="inlineRadio1">SI</label>
      </div>
      <div class="form-check form-check-inline lead">
        <input class="form-check-input" type="radio" name="directivo" id="inlineRadio2" value="2">
        <label class="form-check-label" for="inlineRadio2">NO</label>
      </div>
      <div class="invalid-feedback">[-] Ingresa el c&oacute;digo postal</div>
    </div>
  </div>
  <?php } ?>
  <div class="form-group col-10 d-flex justify-content-end">
    <button type="submit" name="enviarDatosEstudios" class="btn btn-primary mx-2" value="1">CONTINUAR&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    <a class="btn btn-secondary mx-2" href="agregar.php?page=3"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;IR ATRAS</a>
    <a class="btn btn-danger mx-2" href="agregar.php?cancelReg=1">CANCELAR</a>
  </div>
</form>
<?php } ?>
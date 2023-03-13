<form class="mt-4 row g-3 justify-content-center was-validated" action="eliminar.php?confirmDelete=1&idMiembro=<?= $_GET['iddel'] ?>" method="POST">
  <h2 class="mt-5 fw-bold fs-2 text-dark text-center"><i class="fa-solid fa-rectangle-xmark"></i>&nbsp;<font face="helvetica">¿Deseas eliminar el registro?</font><br><font size="3" color="red">SE PERDERÁN TODOS LO DATOS.</font></h2>
  <div class="form-group col-md-4 d-flex justify-content-center">
    <button type="submit" name="siConfirmaEliminacion" class="btn btn-primary px-4 mx-5">CONFIRMAR</button>
    <a href="consultar.php" name="noConfirma" class="btn btn-danger px-4 mx-5">REGRESAR</a>
  </div>
</form>
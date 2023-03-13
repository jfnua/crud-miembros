<?php
  setcookie("autenticacion", 0, time()-60, "/"); //Borramos cookie de autenticacion
  header("Location: index.php"); //index login
?>
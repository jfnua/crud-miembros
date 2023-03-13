<?php
require('../libs/fpdf185/fpdf.php');

class PDF extends FPDF
{
  // Load data
  function LoadData($str)
  {
      // Read file lines
      $data = explode(">", trim($str));
      $filas= array();
      foreach($data as $line){
        if($line != ""){
            array_push($filas, explode(';',trim($line)));
        }
      }
      return $filas;

  }

  function establecerTitulo($title){
    $this->SetTextColor(0,0,240);
    $this->SetFont('Arial', 'B', 10);
    $this->Cell(strlen($title),10,$title);
    $this->Ln();
  }

  // Simple table
  function setDatosMiembro($header, $data)
  {
      // Header
      $this->SetTextColor(232,54,16);
      foreach($header as $col){
        if($col == "ID")
          $this->Cell(5,7,$col,1);
        else if($col == "CURP")
          $this->Cell(25,7,$col,1);
        else
          $this->Cell(17,7,$col,1);
      }
      $this->Ln();
      // Data
      $this->SetTextColor(0);
      foreach($data as $row)
      {
          $count = 0;
          foreach($row as $col){
            if(!$count)
              $this->Cell(5,6,$col,1);
            else if($count == 5)
              $this->Cell(25,6,$col,1);
            else
              $this->Cell(17,6,$col,1);
            $count++;
          }
          $this->Ln();
          $count = 0;
      }
  }

  function setDatosSesion($header, $data)
  {
      // Header
      $this->SetTextColor(232,54,16);
      foreach($header as $col){
        if($col == "ID")
          $this->Cell(5,7,$col,1);
        else if($col == "EMAIL")
          $this->Cell(50,7,$col,1);
        else
          $this->Cell(25,7,$col,1);
      }
      $this->Ln();
      // Data
      $this->SetTextColor(0);
      foreach($data as $row)
      {
          $count = 0;
          foreach($row as $col){
            if(!$count)
              $this->Cell(5,6,$col,1);
            else if($count == 2)
              $this->Cell(50,6,$col,1);
            else
              $this->Cell(25,6,$col,1);
            $count++;
          }
          $this->Ln();
          $count = 0;
      }
  }

  function setDatosDomicilio($header, $data)
  {
      // Header
      $this->SetTextColor(232,54,16);
      foreach($header as $col){
        if($col == "ID")
          $this->Cell(5,7,$col,1);
        else if($col == "DIRECCION")
          $this->Cell(50,7,$col,1);
        else
          $this->Cell(25,7,$col,1);
      }
      $this->Ln();
      // Data
      $this->SetTextColor(0);
      foreach($data as $row)
      {
          $count = 0;
          foreach($row as $col){
            if(!$count)
              $this->Cell(5,6,$col,1);
            else if($count == 1)
              $this->Cell(50,6,$col,1);
            else
              $this->Cell(25,6,$col,1);
            $count++;
          }
          $this->Ln();
          $count = 0;
      }
  }

  function setDatosEstudios($header, $data)
  {
      // Header
      $this->SetTextColor(232,54,16);
      foreach($header as $col){
        if($col == "ID")
          $this->Cell(5,7,$col,1);
        else if($col == "UNIVERSIDAD" || $col == "LICENCIATURA")
          $this->Cell(50,7,$col,1);
        else
          $this->Cell(25,7,$col,1);
      }
      $this->Ln();
      // Data
      $this->SetTextColor(0);
      foreach($data as $row)
      {
          $count = 0;
          foreach($row as $col){
            if(!$count)
              $this->Cell(5,6,$col,1);
            else if($count == 1 || $count == 2)
              $this->Cell(50,6,$col,1);
            else
              $this->Cell(25,6,$col,1);
            $count++;
          }
          $this->Ln();
          $count = 0;
      }
  }

  function setDatosSalud($header, $data)
  {
      // Header
      $this->SetTextColor(232,54,16);
      foreach($header as $col){
        if($col == "ID")
          $this->Cell(5,7,$col,1);
        else if($col == "ENFERMEDADES" || $col == "ALERGIAS")
          $this->Cell(60,7,$col,1);
        else
          $this->Cell(25,7,$col,1);
      }
      $this->Ln();
      // Data
      $this->SetTextColor(0);
      foreach($data as $row)
      {
          $count = 0;
          foreach($row as $col){
            if(!$count)
              $this->Cell(5,6,$col,1);
            else if($count == 1 || $count == 2)
              $this->Cell(60,6,$col,1);
            else
              $this->Cell(25,6,$col,1);
            $count++;
          }
          $this->Ln();
          $count = 0;
      }
  }

  function setDatosEmergencia($header, $data)
  {
      // Header
      $this->SetTextColor(232,54,16);
      foreach($header as $col){
        if($col == "ID")
          $this->Cell(5,7,$col,1);
        else if($col == "NOMBRE" || $col == "EMAIL")
          $this->Cell(50,7,$col,1);
        else
          $this->Cell(25,7,$col,1);
      }
      $this->Ln();
      // Data
      $this->SetTextColor(0);
      foreach($data as $row)
      {
          $count = 0;
          foreach($row as $col){
            if(!$count)
              $this->Cell(5,6,$col,1);
            else if($count == 1 || $count == 4)
              $this->Cell(50,6,$col,1);
            else
              $this->Cell(25,6,$col,1);
            $count++;
          }
          $this->Ln();
          $count = 0;
      }
  }

  function setDatosPareja($header, $data)
  {
      // Header
      $this->SetTextColor(232,54,16);
      foreach($header as $col){
        if($col == "ID")
          $this->Cell(5,7,$col,1);
        else if($col == "NOMBRE" || $col == "HIJOS")
          $this->Cell(40,7,$col,1);
        else
          $this->Cell(25,7,$col,1);
      }
      $this->Ln();
      // Data
      $this->SetTextColor(0);
      foreach($data as $row)
      {
          $count = 0;
          foreach($row as $col){
            if(!$count)
              $this->Cell(5,6,$col,1);
            else if($count == 1 || $count == 5)
              $this->Cell(40,6,$col,1);
            else
              $this->Cell(25,6,$col,1);
            $count++;
          }
          $this->Ln();
          $count = 0;
      }
  }

}

//Incluimos funciones de las consultas hacia la API
include_once("ConsultasAPI/APIMiembros.php");

//"cachamos el objeto que devuelve el API REST en $productos
$miembros = APIMiembros::getDatosPersonales();
$datosSesionMiembros = APIMiembros::getDatosSesion();
$datosDomicilio = APIMiembros::getDatosDomicilio();
$datosEstudios = APIMiembros::getDatosEstudios();
$datosSalud = APIMiembros::getDatosSalud();
$datosEmergencia = APIMiembros::getDatosEmergencia();
$datosPareja = APIMiembros::getDatosPareja();

$dataMiembros = '';
$dataSesion = '';
$dataDomicilio = '';
$dataEstudios = '';
$dataSalud = '';
$dataEmergencia = '';
$dataPareja = '';

//Recorremos $productos como un objeto mediante un foreach
if($miembros) {
  for($i = 0; $i < count($miembros); $i++){
      //Formatear datos personales
      $dataMiembros .= $miembros[$i]->idMiembro.';'.$miembros[$i]->nombre.';'.$miembros[$i]->apellido.';'.$miembros[$i]->fechaNacimiento.';'.$miembros[$i]->telefono.';'.$miembros[$i]->curp.';'.$miembros[$i]->datosSesion.';'.$miembros[$i]->datosDomicilio.';'.$miembros[$i]->datosEstudios.';'.$miembros[$i]->datosSalud.';'.$miembros[$i]->datosEmergencia.';'.$miembros[$i]->datosPareja.'>';
      
      //Formatear datos de inicio de sesion
      $dataSesion .= $datosSesionMiembros[$i]->idSesion.";".$datosSesionMiembros[$i]->nombre_usuario.";".$datosSesionMiembros[$i]->email.">";

      //Formatear datos de domicilio
      $dataDomicilio .= $datosDomicilio[$i]->iddomicilio.";".$datosDomicilio[$i]->direccion.";".$datosDomicilio[$i]->ciudad.";".$datosDomicilio[$i]->estado.";".$datosDomicilio[$i]->pais.";".$datosDomicilio[$i]->codigopostal.">";
      
      //Formatear datos de Estudios academicos
      $directivo = $datosEstudios[$i]->directivo == 2 ? "No" : "Si";
      $dataEstudios .= $datosEstudios[$i]->idestudios.";".$datosEstudios[$i]->universidad.";".$datosEstudios[$i]->licenciatura.";".$datosEstudios[$i]->ultimogradoestudio.";".$datosEstudios[$i]->fechaultimogradoestudio.";".$directivo.">";

      //Formatear datos de salud medica
      $dataSalud .= $datosSalud[$i]->idinfomedica.";".$datosSalud[$i]->enfermedades.";".$datosSalud[$i]->alergias.";".$datosSalud[$i]->tipoSangre.">";

      //Formatear datos de contacto de emergencia
      $dataEmergencia .= $datosEmergencia[$i]->idcontactoemergencia.";".$datosEmergencia[$i]->nombre.";".$datosEmergencia[$i]->relacion.";".$datosEmergencia[$i]->telefono.";".$datosEmergencia[$i]->correo.">";

      //Formatear datos de pareja
      $activo = $datosPareja[$i]->activo == 1 ? "Si" : "No";
      $dataPareja .= $datosPareja[$i]->idpareja.";".$datosPareja[$i]->nombre.";".$datosPareja[$i]->nombrecredencial.";".$datosPareja[$i]->fechaNacimiento.";".$datosPareja[$i]->relacion.";".$datosPareja[$i]->hijos.";".$activo.">";
  }
}

$pdf = new PDF();

date_default_timezone_set('America/Chihuahua');
$fechaActual = date("d-m-Y H:i:s");

//Titulos para hoja de tablas
$tituloDatosMiembro = "Reporte tabla Miembros                     ".$fechaActual."";
$tituloDatosSesion = "Tabla de los Datos de Inicio de Sesion";
$tituloDatosDomicilio = "Tabla de los Datos de Domiclio";
$tituloDatosEstudios = "Tabla de los Datos de Estudios Academicos";
$tituloDatosSalud = "Tabla de los Datos de Salud Medica";
$tituloDatosEmergencia = "Tabla de los Datos de Contacto Emergencia";
$tituloDatosPareja = "Tabla de los Datos de Pareja";

// Column headings
$headerDatosMiembro = array('ID', 'NOMBRE', 'APELLIDOS', 'F.NACIMIENTO', 'TELEFONO', 'CURP', 'D.SESION', 'D.DOMICILIO', 'D ESTUDIOS', 'D.SALUD', 'D.C.EMER', 'D.PAREJA');
$headerDatosSesion = array("ID", "NOMBRE USUARIO", "EMAIL");
$headerDatosDomicilio = array("ID", "DIRECCION", "CIUDAD", "ESTADO", "PAIS", "CODIGO POSTAL");
$headerDatosEstudios = array("ID", "UNIVERSIDAD", "LICENCIATURA", "U.GRADO DE ESTUDIO", "FECHA U.ANO ESTUDIO", "DIRECTIVO");
$headerDatosSalud = array("ID", "ENFERMEDADES", "ALERGIAS", "TIPO DE SANGRE");
$headerDatosEmergencia = array("ID", "NOMBRE", "RELACION", "TELEFONO", "EMAIL");
$headerDatosPareja = array("ID", "NOMBRE", "NOMBRE CREDENCIAL", "F. NACIMIENTO", "RELACION", "HIJOS", "VIVE");


// Data loading
$dataMiembros = $pdf->LoadData($dataMiembros);
$dataSesion = $pdf->LoadData($dataSesion);
$dataDomicilio = $pdf->LoadData($dataDomicilio);
$dataEstudios = $pdf->LoadData($dataEstudios);
$dataSalud = $pdf->LoadData($dataSalud);
$dataEmergencia = $pdf->LoadData($dataEmergencia);
$dataPareja = $pdf->LoadData($dataPareja);

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 10);
$pdf->AddPage();

$pdf->establecerTitulo($tituloDatosMiembro);
$pdf->SetFont('Arial','B',6);
$pdf->setDatosMiembro($headerDatosMiembro,$dataMiembros);

$pdf->establecerTitulo($tituloDatosDomicilio);
$pdf->SetFont('Arial','B',6);
$pdf->setDatosDomicilio($headerDatosDomicilio,$dataDomicilio);

$pdf->establecerTitulo($tituloDatosEstudios);
$pdf->SetFont('Arial','B',6);
$pdf->setDatosEstudios($headerDatosEstudios,$dataEstudios);

$pdf->establecerTitulo($tituloDatosSalud);
$pdf->SetFont('Arial','B',6);
$pdf->setDatosSalud($headerDatosSalud,$dataSalud);

$pdf->establecerTitulo($tituloDatosEmergencia);
$pdf->SetFont('Arial','B',6);
$pdf->setDatosEmergencia($headerDatosEmergencia,$dataEmergencia);

$pdf->establecerTitulo($tituloDatosPareja);
$pdf->SetFont('Arial','B',6);
$pdf->setDatosPareja($headerDatosPareja,$dataPareja);

$pdf->establecerTitulo($tituloDatosSesion);
$pdf->SetFont('Arial','B',6);
$pdf->setDatosSesion($headerDatosSesion,$dataSesion);

$pdf->Output();
?>
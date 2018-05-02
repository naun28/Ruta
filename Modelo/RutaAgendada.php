<?php
#include("../Conect/conexion.php");

$Clave     = $_POST['Clave'];
$Escuela   = $_POST['Escuela'];
$Domicilio  = $_POST['Domicilio'];
$Localidad22     = $_POST['Localidad22'];
$Municipio      = $_POST['Municipio'];
$Zona      = $_POST['zonat'];
$Nequipos      = $_POST['Nequipos'];
$Aequipos     = $_POST['Aequipos'];
$Reequip   = $_POST['Reequip'];
$Conectividad = $_POST['Conectividad'];
$Reporte     = $_POST['Reporte'];
$Nreporte      = $_POST['NReporte'];
$FechaReporte      = $_POST['FechaReporte'];
$LevantReporte     = $_POST['LevantReporte'];
$FechaMant     = $_POST['FechaMant'];
$Visitas   = $_POST['Visitas'];
$UltimaVisita  = $_POST['UltimaVisita'];
$TipoEscuela     = $_POST['TipoEscuela'];
$ProbSolicitado      = $_POST['ProbSolicitado'];
$FechaIni    = $_POST['FechaIni'];
$FechaFin      = $_POST['FechaFin'];
$Comentarios     = $_POST['Comentarios'];
$Lider     = $_POST['Lider'];
$nBrigada      = $_POST['nBrigada'];
$Brigadistas      = $_POST['Brigadistas'];


$conexion   = mysqli_connect("localhost", "root", "", "rutas");
//insertando en agendadas
$q = ("INSERT INTO agendadas VALUES ('','$Clave','$Escuela','$Domicilio','$Localidad22','$Municipio','$Zona','$Nequipos','$Aequipos','$Reequip','$Conectividad','$Reporte','$Nreporte','$FechaReporte','$LevantReporte','$FechaMant','$Visitas','$UltimaVisita','$TipoEscuela','$ProbSolicitado','$FechaIni','$FechaFin','$Comentarios','$Lider','$nBrigada','$Brigadistas')");
$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");

//eliminando de escuelasrevisadas
//$borrar  = "DELETE  FROM crucebd WHERE Clave = '" . $Clave . "' ";
//$ejecutar_q = mysqli_query($conexion, $borrar) or die("error al insertar");


header("location: ../Vista/agendar.php");
echo "<br> Registro Insertado Correctamente! <br>";
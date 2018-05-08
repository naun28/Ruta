<?php
#include("../Conect/conexion.php");

$Clave     = $_POST['Clave'];
$clavecct     = $_POST['clavecct'];
$Escuela   = $_POST['Escuela'];
$Domicilio  = $_POST['Domicilio'];
$Localidad     = $_POST['Localidad'];
$Municipio      = $_POST['Municipio'];
$Zona      = $_POST['Zona'];
$Nequipos      = $_POST['Nequipos'];
$Aequipos     = $_POST['Aequipos'];
$Reequip   = $_POST['Reequip'];
$Conectividad = $_POST['Conectividad'];
$Reporte     = $_POST['Reporte'];
$Nreporte      = $_POST['Nreporte'];
$FechaReporte      = $_POST['FechaReporte'];
$LevantReporte     = $_POST['LevantReporte'];
$FechaMant     = $_POST['FechaMant'];
$Visitas   = $_POST['Visitas'];
$UltimaVisita  = $_POST['UltimaVisita'];
$TipoEscuela     = $_POST['TipoEscuela'];
$ProbSolicitado      = $_POST['ProbSolicitado'];
$Status = $_POST['Status_Esc'];


$conexion   = mysqli_connect("localhost", "root", "", "rutas");
//insertando
$q = ("INSERT INTO escuelasrevisadas VALUES ('','$Clave','$Escuela','$Domicilio','$Localidad','$Municipio','$Zona','$Nequipos','$Aequipos','$Reequip','$Conectividad','$Reporte','$Nreporte','$FechaReporte','$LevantReporte','$FechaMant','$Visitas','$UltimaVisita','$TipoEscuela','$ProbSolicitado')");
$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");

//Modificar status de crucebd
$Actualizar  = "UPDATE crucebd Set Status_Esc = 1 WHERE Clave = '" . $Clave . "' ";
$ejecutar_q = mysqli_query($conexion, $Actualizar) or die("error al insertar");
//eliminando reportes
/*$borra  = "DELETE  FROM reportes WHERE clavecct = '" . $clavecct . "' ";
$ejecutar_q = mysqli_query($conexion, $borra) or die("error al insertar");*/

header("location: ../Vista/escuelas.php");
echo "<br> Registro Insertado Correctamente! <br>";
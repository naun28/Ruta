<?php

$ClaveM  = $_POST['ClaveM'];
$Status_Esc = $_POST['Status_Esc'];

$conexion   = mysqli_connect("localhost", "root", "", "rutas");

if (!empty($ClaveM)) {
	


$q = ("UPDATE crucebd set Status_Esc ='$Status_Esc' where Clave ='" . $ClaveM . "'");
$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");

$b = ("DELETE FROM escuelasrevisadas where Clave ='" . $ClaveM . "'");
$ejecutar_q = mysqli_query($conexion, $b) or die("error al insertar");
}
header("location: ../Vista/agendar.php");
echo "<br> Registro Insertado Correctamente! <br>";
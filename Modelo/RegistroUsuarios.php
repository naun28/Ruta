<?php
#include("../Conect/conexion.php");

$nombres     = $_POST['nombres'];
$apellidos   = $_POST['apellidos'];
$telefono   = $_POST['telefono'];
$correo     = $_POST['correo'];
$pass      = $_POST['pass'];
$tipouser      = $_POST['tipouser'];
$nbrigad      = $_POST['nbrigada'];
$nbrig      = $_POST['nbrig'];
$zonaBri=$_POST['zonaBrig'];
$zonaLider=$_POST['zonaLider'];
if (!empty($nbrigad)) {
	$nbrigada = $nbrigad;
}else{
	$nbrigada = $nbrig;
}
if ($tipouser=="Mesa" || $tipouser=="Director" || $tipouser=="Administrador") {
	$nbrigada =" ";
}


if (!empty($zonaBri)) {
	$zonaBrig = $zonaBri;
}else{
	$zonaBrig = $zonaLider;
}
if ($tipouser=="Mesa" || $tipouser=="Director" || $tipouser=="Administrador") {
	
	$zonaBrig =" ";
}

$conexion   = mysqli_connect("localhost", "root", "", "rutas");

$q = ("INSERT INTO usuarios VALUES ('','$nombres','$apellidos','$telefono','$correo','$pass','$tipouser','$nbrigada','$zonaBrig')");

$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");
header("location: ../Vista/agregarusuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";

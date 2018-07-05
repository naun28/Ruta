<?php
$id_usuario  = $_POST['id_usuario'];
$nombres     = $_POST['nombres'];
$apellidos   = $_POST['apellidos'];
$telefono   = $_POST['telefono'];
$correo     = $_POST['correo'];
$pass      = $_POST['pass'];
$tipouser      = $_POST['tipouser'];
$nbrigad      = $_POST['nbrigada'];
$nbrig      = $_POST['nbrig'];

$zona=$_POST['zona'];
if (!empty($nbrigad)) {
	$nbrigada = $nbrigad;
}else{
	$nbrigada = $nbrig;
}
if ($tipouser=="Mesa" || $tipouser=="Director" || $tipouser=="Administrador") {
	$nbrigada =" ";
}


if (!empty($zona)) {
	$zonaBrig = $zona;
}
if ($tipouser=="Mesa" || $tipouser=="Director" || $tipouser=="Administrador") {
	
	$zonaBrig =" ";
}

$conexion   = mysqli_connect("localhost", "root", "", "rutas");

if (!empty($id_usuario)) {
	
$q = ("UPDATE usuarios set nombres='$nombres',apellidos='$apellidos',telefono='$telefono',correo='$correo',pass='$pass',tipouser='$tipouser',nbrigada='$nbrigada',zonaBrig='$zonaBrig' where id_usuario='" . $id_usuario . "'");

$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");
}
header("location: ../Vista/perfilesusuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";
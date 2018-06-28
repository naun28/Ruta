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
if (!empty($nbrigad)) {
	$nbrigada = $nbrigad;
}else{
	$nbrigada = $nbrig;
}
if ($tipouser=="Mesa" || $tipouser=="Director" || $tipouser=="Administrador") {
	$nbrigada =" ";
}

$zona=$_POST['zonaBrig'];
foreach ($zona as $zonaBrig) {
$var .= $zonaBrig;
}
$conexion   = mysqli_connect("localhost", "root", "", "rutas");

if (!empty($id_usuario)) {
	
$q = ("UPDATE usuarios set nombres='$nombres',apellidos='$apellidos',telefono='$telefono',correo='$correo',pass='$pass',tipouser='$tipouser',nbrigada='$nbrigada',zonaBrig='$zonaBrig' where id_usuario='" . $id_usuario . "'");

$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");
}
header("location: ../Vista/perfilesusuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";
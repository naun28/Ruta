<?php
#include("../Conect/conexion.php");

$nombres     = $_POST['nombres'];
$apellidos   = $_POST['apellidos'];
$telefono   = $_POST['telefono'];
$correo     = $_POST['correo'];
$pass      = $_POST['pass'];
$tipouser      = $_POST['tipouser'];
$nbrigada      = $_POST['nbrigada'].$_POST['nbrig'];
$zonaBrig = $_POST['zonaBrig'];
$conexion   = mysqli_connect("localhost", "root", "", "rutas");

$q = ("INSERT INTO usuarios VALUES ('','$nombres','$apellidos','$telefono','$correo','$pass','$tipouser','$nbrigada','$zonaBrig')");

$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");
header("location: ../Vista/agregarusuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";

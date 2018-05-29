<?php

$id_usuario = $_POST['id_usuario'];

$conexion   = mysqli_connect("localhost", "root", "", "rutas");

if (!empty($id_usuario)) {

$q = ("DELETE FROM usuarios where id_usuario ='" . $id_usuario . "'");
$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");
}
header("location: ../Vista/perfilesusuarios.php");

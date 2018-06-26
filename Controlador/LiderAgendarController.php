<?php 
session_start();
include '../Conect/conexion.php';
$zonaBrig= $_SESSION["zonaBrig"];
$q = "SELECT * FROM escuelasrevisadas where Zona = '$zonaBrig'";
$resultado = mysqli_query($conexion, $q);
if (!$resultado) {
    die("ERROR");
}else{
    while ($data = mysqli_fetch_assoc($resultado)) {
    	//$arreglo["data"][] = $data;  Tenia esta linia
        $arreglo["data"][] = array_map("utf8_encode", $data); //Solucion
    }
    echo json_encode($arreglo);
}
mysqli_free_result($resultado);
mysqli_close($conexion);


<?php 
include '../Conect/conexion.php';
$cn    = Conectarse();
$fecha = $_GET['fecha'];

$q = "SELECT * FROM agendadas WHERE DATE(FechaIni) = '".DATE($fecha)."'";
$resultado = mysql_query($q, $cn);
if (!$resultado) {
    die("ERROR");
}else{
    while ($data = mysql_fetch_assoc($resultado)) {
    	//$arreglo["data"][] = $data;  Tenia esta linia
        $arreglo["data"][] = array_map("utf8_encode", $data); //Solucion
    }
    echo json_encode($arreglo);
}
mysqli_free_result($resultado);
mysqli_close($cn);


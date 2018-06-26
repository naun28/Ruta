<?php 
//ESCUELAS POR ZONA DEL LIDER
 session_start();
include '../Conect/conexionEsc.php';
$zonaBrig= $_SESSION["zonaBrig"];

$q = "SELECT *, reportes.fecha, reportes.concepto, reportes.levanto, reportes.clavecct FROM crucebd left join reportes on crucebd.Clave = reportes.clavecct WHERE reportes.concepto IS NOT Null AND crucebd.Status_Esc = 0 AND crucebd.Ruta33 = '$zonaBrig' order by reportes.fecha Desc";
$resultado = mysqli_query($conEsc, $q);
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
mysqli_close($conEsc);

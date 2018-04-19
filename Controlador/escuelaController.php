<?php 
include '../Conect/conexionEsc.php';
$q = "SELECT *, reportes.concepto FROM crucebd left join reportes on crucebd.Escuela = reportes.nombrect ORDER BY Num desc";
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



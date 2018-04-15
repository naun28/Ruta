<?php 
include "../Conect/conexionEsc.php";
Conectarse();
$q = "SELECT * FROM crucebd ORDER BY Num Desc";
$ejecutar_q = mysqli_query($conEsc, $q);
if (!$ejecutar_q) {
    die("ERROR");
}else{
    while ($data = mysqli_fetch_assoc($ejecutar_q)) {
        $arreglo["data"][] = $data;
    }
    echo json_encode($arreglo);
}
mysqli_free_result($ejecutar_q);
mysqli_close($conEsc);

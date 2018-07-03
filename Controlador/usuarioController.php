<?php 
include '../Conect/conexion.php';
$q = "SELECT * FROM usuarios ORDER BY id_usuario Desc";
$ejecutar_q = mysqli_query($conexion, $q);
if (!$ejecutar_q) {
    die("ERROR");
}else{
    while ($data = mysqli_fetch_assoc($ejecutar_q)) {
        $arreglo["data"][] = array_map("utf8_encode", $data);
    }
    echo json_encode($arreglo);
}
mysqli_free_result($ejecutar_q);
mysqli_close($conexion);

    
  
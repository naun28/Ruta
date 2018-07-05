<?php 
include '../Conect/conecviatik.php';
//$semana=$_POST['semana'];
$q = "SELECT * FROM viatiks";
$resultado = mysqli_query($conecviatiks, $q);
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
mysqli_close($conecviatiks);



<?PHP
include "../Conect/conlista.php";
$cn    = Conectarse();
$fecha = $_GET['fecha'];



$select = "SELECT * FROM agendadas WHERE DATE(FechaIni)  =  '" . DATE($fecha) . "' OR  DATE(FechaFin)  =  '" . DATE($fecha) . "' OR '" . DATE($fecha) . "' BETWEEN DATE(FechaIni) AND DATE(FechaFin) " ;
$result = mysqli_query($cn , $select);

if (!$result) {

    die(mysql_error());

} else {
    $arreglo["data"] = [];
    while ($data = mysqli_fetch_assoc($result)) {

        $arreglo["data"][] = array_map("utf8_encode", $data);;

    }
    echo json_encode($arreglo);

}

mysqli_free_result($result);
mysqli_close($cn);

<?php
	//Import database conection
	require('../Conect/conecviatik.php');
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  $semana  = $_POST['semana'];


  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "Viaticos_Semana_".$semana.".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  $result = mysqli_query($conecviatiks, "SELECT liderbrig,lugares,fechaini,fechafin,semana,dias,brigacompanante,vehiculo,placas,rendimiento,escuelasvisit,recorrido,excedente,presugasolina,presucasetas,viaticoslider,viaticosbrig,totalreal,totalchilo from viatiks where semana='$semana' ") or die('Query failed!');
  while(false != ($row = mysqli_fetch_assoc($result))) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\r\n";
  }
?>
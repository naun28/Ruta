<?php 
session_start();
require('../Conect/conecviatik.php');

$varreportado=$_POST['reportado'];
$varconcepto=$_POST['concepto'];
$vardiagnostico=$_POST['diagnostico'];
$varseguimiento=$_POST['seguimiento'];
$varferes=$_POST['feres'];
$varresponsable=$_POST['responsable'];
$varvisito=$_POST['visito'];
$varrecpor=$_POST['recpor'];
$varrecibioec=$_POST['recibio'];
$varcapturo=$_POST['capturo'];
$varradioInline=$_POST['radioInline'];




$q= "INSERT INTO reporte (
							id,recib_reporte,concepto_reporte,diagnostico,seguimiento,fecha,responsable,
							visito_escuela,levanto_reporte,recibe_nescuela,capturo_reporte,finalizo) 
				  values (  '','$varreportado','$varconcepto','$vardiagnostico','$varseguimiento',
				  			'$varferes','$varresponsable','$varvisito','$varrecpor','$varrecibioec','$varcapturo',
				  			'$varradioInline')";
$ejecuta_q= mysqli_query($conecviatiks,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../Vista/brigadistas.php');


?>
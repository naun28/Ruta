<?php 
session_start();
require('../Conect/conecviatik.php');

$varlibrigada=$_POST['librigada'];
$varnuvehiculo=$_POST['nuvehiculo'];
$varplavehiculo=$_POST['plavehiculo'];
$varrendvehiculo=$_POST['rendvehiculo'];
$varlugs=$_POST['lugs'];
$varfeini=$_POST['feini'];
$varfefin=$_POST['fefin'];
$vardia=$_POST['dia'];
$varscuelas=$_POST['scuelas'];
$varrecor=$_POST['recor'];
$varrecorexe=$_POST['recorexe'];
$varprelitro=$_POST['prelitro'];
$varpregasolina=$_POST['pregasolina'];
$varprecasetas=$_POST['precasetas'];
$varpreviatico=$_POST['previatico'];
$varaddbrig=$_POST['addbrig'];
$varprebriadd=$_POST['prebriadd'];
$vartotreal=$_POST['totreal'];
$vartotfinal=$_POST['totfinal'];


$q= "INSERT INTO viatiks (
							id,liderbrig,vehiculo,placas,rendimiento,lugares,fechaini,fechafin,
							dias,escuelasvisit,recorrido,excedente,prelitrogas,presugasolina,
							presucasetas,viaticoslider,brigacompanante,viaticosbrig,totalreal,totalchilo) 
				  values (  '','$varlibrigada','$varnuvehiculo','$varplavehiculo','$varrendvehiculo',
				  			'$varlugs','$varfeini','$varfefin','$vardia','$varscuelas','$varrecor',
				  			'$varrecorexe','$varprelitro','$varpregasolina','$varprecasetas',
				  			'$varpreviatico','$varaddbrig','$varprebriadd','$vartotreal','$vartotfinal')";
$ejecuta_q= mysqli_query($conecviatiks,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../Vista/viaticos.php');


?>
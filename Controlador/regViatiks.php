<?php 
session_start();
require('../Conect/conecviatik.php');

$varlibrigada=$_POST['librigada'];
$varnuvehiculo=$_POST['nuvehiculo'];
// arreglo para destinos
$varlugs=$_POST['lugs'];
foreach ($varlugs as $valor) {
$var .= $valor;
$var .= ',';
}
//----------------------
$varfeini=$_POST['feini'];
$varfefin=$_POST['fefin'];
$vardia=$_POST['dia'];
// arreglo para escuelas
$varscuelas=$_POST['scuelas'];
foreach ($varscuelas as $valoresc) {
$varesc .= $valoresc;
$varesc .= ',';
}
//----------------------
$varrecor=$_POST['recor'];
$varrecorexe=$_POST['recorexe'];
$varprelitro=$_POST['prelitro'];
$varpregasolina=$_POST['pregasolina'];
$varprecasetas=$_POST['precasetas'];
$varpreviatico=$_POST['previatico'];
// arreglo para brigadistas extras
$varaddbrig=$_POST['addbrig'];
foreach ($varaddbrig as $valorbrig) {
$varbrig .= $valorbrig;
$varbrig .= ',';
$contbrig++;
}
//----------------------
$varprebriadd=$_POST['prebriadd'];
$vartotreal=$_POST['totreal'];
$vartotfinal=$_POST['totfinal'];

$sql="SELECT * FROM vehiculos WHERE num_vehiculo = '".$varnuvehiculo."'";
$result = mysqli_query($conecviatiks,$sql);

while($row = mysqli_fetch_array($result)) {

    
    $varplavehiculo=$row['placas'];
    $varrendvehiculo=$row['rendimiento'];
   
}

// $varplavehiculo=$_POST['plavehiculo'];//$varrendvehiculo=$_POST['rendvehiculo'];

$q= "INSERT INTO viatiks (
							id,liderbrig,vehiculo,placas,rendimiento,lugares,fechaini,fechafin,
							dias,escuelasvisit,recorrido,excedente,prelitrogas,presugasolina,
							presucasetas,viaticoslider,brigacompanante,viaticosbrig,totalreal,totalchilo) 
				  values (  '','$varlibrigada','$varnuvehiculo','$varplavehiculo','$varrendvehiculo',
				  			'$var','$varfeini','$varfefin','$vardia','$varesc','$varrecor',
				  			'$varrecorexe','$varprelitro','$varpregasolina','$varprecasetas',
				  			'$varpreviatico','$varbrig','$varprebriadd','$vartotreal','$vartotfinal')";
$ejecuta_q= mysqli_query($conecviatiks,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../Vista/viaticos.php');


?>
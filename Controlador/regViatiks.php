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


//----------------------
$varprelitro=$_POST['prelitro'];

$varprecasetas=$_POST['precasetas'];

// arreglo para brigadistas extras
$varaddbrig=$_POST['addbrig'];
foreach ($varaddbrig as $valorbrig) {
$varbrig .= $valorbrig;
$varbrig .= ',';
$varcont++;
}
//----------------------
/*$vartotreal=$_POST['totreal'];
$vartotfinal=$_POST['totfinal'];*/

$sql="SELECT * FROM vehiculos WHERE num_vehiculo = '".$varnuvehiculo."'";
$result = mysqli_query($conecviatiks,$sql);

while($row = mysqli_fetch_array($result)) {

    
    $varplavehiculo=$row['placas'];
    $varrendvehiculo=$row['rendimiento'];
   
}
$vartotkm= $varrecor+$varrecorexe; // calcula total de kilometros
$litrosnecesarios=$vartotkm/$varrendvehiculo; // divide total de kilometros entre rendimiento y el resultado es igual a los litro que ocupa
$presupuestoparagasolina=$varprelitro * $litrosnecesarios;// calcula el costo total de la gasolina a ocupar

$viaticosdiaporpersona= $vardia * 700;//calcula viaticos por persona
$varviaticoacompanantes= $viaticosdiaporpersona * $varcont;//calcula viaticos de brigadistas extras

$toreal= $presupuestoparagasolina+$varviaticoacompanantes+$varprecasetas+$viaticosdiaporpersona;
//$totaltotales=round($toreal, 0, PHP_ROUND_HALF_UP);



// $varplavehiculo=$_POST['plavehiculo'];//$varrendvehiculo=$_POST['rendvehiculo'];

$q= "INSERT INTO viatiks (
							id,liderbrig,vehiculo,placas,rendimiento,lugares,fechaini,fechafin,
							dias,escuelasvisit,recorrido,excedente,prelitrogas,presugasolina,
							presucasetas,viaticoslider,brigacompanante,viaticosbrig,totalreal,totalchilo) 
				  values (  '','$varlibrigada','$varnuvehiculo','$varplavehiculo','$varrendvehiculo',
				  			'$var','$varfeini','$varfefin','$vardia','$varesc','$varrecor',
				  			'$varrecorexe','$varprelitro','$presupuestoparagasolina','$varprecasetas',
				  			'$viaticosdiaporpersona','$varbrig','$varviaticoacompanantes','$toreal','$toreal')";
$ejecuta_q= mysqli_query($conecviatiks,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../Vista/viaticos.php');


?>
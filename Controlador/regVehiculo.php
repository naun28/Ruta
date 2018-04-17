
<?php 
session_start();

$db="rutas";
$host="localhost";
$pw="";
$user="root";

$conecviatik = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());

$numvehiculo=$_POST['numve'];
$nomvehiculo=$_POST['nomve'];
$placavehiculo=$_POST['plave'];
$rendimiento=$_POST['renve'];

$q= "INSERT INTO vehiculos (id,num_vehiculo,vehiculo,placas,rendimiento) values ('','$numvehiculo','$nomvehiculo',
							'$placavehiculo','$rendimiento')";
$ejecuta_q= mysqli_query($conecviatik,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../Vista/viaticos.php');

?>
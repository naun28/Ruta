<?php 
	
require('../Conect/conecviatik.php');

$id=$_GET['id'];


mysqli_query($conecviatiks, "DELETE FROM vehiculos WHERE num_vehiculo = $id");

mysqli_close($conecviatiks);
header('Location: ../Vista/viaticos.php');


?>
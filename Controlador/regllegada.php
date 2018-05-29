<?php 
$ida=$_POST['ida'];
$idu=$_POST['idu'];
$fechausu=$_POST['fechausu'];
$horausu=$_POST['horausu'];
$fechaser=$_POST['fechaser'];
$horaser=$_POST['horaser'];

/*echo $fechausu;
echo $horausu;
echo $fechaser;
echo $horaser;*/
require '../Conect/conecviatik.php';
$q= "INSERT INTO cheker (
							idcheker,idusuario,idagendada,fechaser,horaser,fechausu,horausu,status) 
				  values (  '','$idu','$ida','$fechaser','$horaser','$fechausu','$horausu',1)";
$ejecuta_q= mysqli_query($conecviatiks,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../Vista/brigadistas.php');



 ?>
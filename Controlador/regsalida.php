<?php 
$ida=$_POST['ida'];
$idu=$_POST['idu'];
$fechausu=$_POST['fechausu2'];
$horausu=$_POST['horausu2'];
$fechaser=$_POST['fechaser2'];
$horaser=$_POST['horaser2'];
$Mantenimiento=$_POST['Mantenimiento'];
$Soporte=$_POST['Soporte'];
$Aula_de_medios=$_POST['Aula_de_medios'];
$observaciones=$_POST['observaciones'];

/*echo $fechausu;
echo $horausu;
echo $fechaser;
echo $horaser;*/
require '../Conect/conecviatik.php';


$q= "INSERT INTO cheker (
							idcheker,idusuario,idagendada,fechaser,horaser,fechausu,horausu,status) 
				  values (  '','$idu','$ida','$fechaser','$horaser','$fechausu','$horausu',0)";
$ejecuta_q= mysqli_query($conecviatiks,$q) or die("error al insertar");


$qs= "UPDATE agendadas 
	 SET statusvisita = 2
	 WHERE id_agendada='$ida'";
$ejecuta_qs= mysqli_query($conecviatiks,$qs) or die("error al insertar");


mysqli_close($con);
header('Location: ../Vista/brigadistas.php');

?>
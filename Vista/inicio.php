<?php 
session_start();

if (!isset($_SESSION["correo"])) {
    header("location:../Vista/login.php");
    exit();

}
include("../Conect/conexion.php");
$sql = "SELECT * FROM agendadas ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
   <title>Inicio</title>
   <?PHP include "../Section/css.php";?>
   <style>
    
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

</head>

<body>
  <div id="wrapper" >
  <?PHP include "../Section/menu.php";?>
</div>
<?PHP include "../Section/js.php";?>
</body>

</html>
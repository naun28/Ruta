 <?php 
session_start();

if (!isset($_SESSION["correo"])) {
    header("location:../Vista/login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
   <title>Agendar Rutas</title>
   <?PHP include "../Section/css.php";?>

</head>

<body>
  <div id="wrapper">
  <?PHP include "../Section/agenda.php";?>
</div>
<?PHP include "../Section/js_Agendar.php";?>
</body>

</html>
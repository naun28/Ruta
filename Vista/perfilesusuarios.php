 <?php 
session_start();

if (!isset($_SESSION["correo"])) {
    header("location:../Vista/login.php");
    exit();

}
?>
<!DOCTYPE html>
<html>
<head>
	
   <title>Perfiles de Usuarios</title>
   <?PHP include "../Section/css.php";?>

</head>

<body>
  <div id="wrapper">
  <?PHP include "../Section/perfiles.php";?>

</div>

<?PHP include "../Section/js_Perfiles.php";?>
</body>
</html>
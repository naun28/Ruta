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
   <title>Agendar Rutas</title>
   <?PHP include "../Section/css.php";?>

</head>

<body>
  <div id="wrapper">
  <?PHP include "../Section/agenda_lider.php";?>
</div>
<?PHP include "../Section/js_AgendarLider.php";?>
</body>

</html>
<!--<?php 
/*session_start();

if (!isset($_SESSION["nombre"])) {
    header("location:../Vista/login.php");
    exit();

}*/
?>-->
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

<?PHP include "../Section/js.php";?>
</body>
</html>
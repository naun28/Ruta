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
   <title>Inicio</title>
   <?PHP include "../Section/css.php";?>

</head>

<body>
  <div id="wrapper" >
  <?PHP include "../Section/menu.php";?>
</div>
<?PHP include "../Section/js.php";?>
</body>

</html>
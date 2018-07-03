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
   <title>Viaticos</title>
   
   <?PHP include "../Section/css.php";?>
	 
</head>

<body>
  <div id="wrapper">
  <?PHP include "../Section/costos.php";?>
</div>
<?PHP include "../Section/js_Viatiks.php";?>
</body>

</html>
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
	
   <title>Lista de Escuelas</title>
   <?PHP include "../Section/css.php";?>

</head>

<body>
  <div id="wrapper">
  	
  <?PHP include "../Section/listaesclider.php";?>
</div>
<?PHP include "../Section/js_lider.php";?>
</body>

</html>
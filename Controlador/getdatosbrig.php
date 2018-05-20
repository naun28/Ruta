


<?php
$q =$_GET['q'];

$db="rutas";
$host="localhost";
$pw="";
$user="root";

$conecviatiks = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());
$sql="SELECT nbrigada, zonaBrig FROM usuarios where id_usuario = '".$q."'";
$result = mysqli_query($conecviatiks,$sql);



echo "<table class='footable table table-stripped toggle-arrow-tiny'>
<tr>
<th>Numero de Brigada</th>
<th>Zona</th>
</tr>";
while($row = mysqli_fetch_array($result)) {

    echo "<td>" . $row['nbrigada'] . "</td>";
    echo "<td>" . $row['zonaBrig'] . "</td>";
   
}
echo "</table>";

mysqli_close($conecviatiks);
?>

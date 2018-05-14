


<?php
$q =$_GET['q'];

$db="rutas";
$host="localhost";
$pw="";
$user="root";

$conecviatiks = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());
$sql="SELECT * FROM vehiculos WHERE num_vehiculo = '".$q."'";
$result = mysqli_query($conecviatiks,$sql);



echo "<table class='footable table table-stripped toggle-arrow-tiny'>
<tr>

<th>Modelo</th>
<th>Placas</th>
<th>Rendimiento</th>

</tr>";
while($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    //echo "<td>" . $row['id'] . "</td>";
    //echo "<td>" . $row['num_vehiculo'] . "</td>";
    echo "<td>" . $row['vehiculo'] . "</td>";
    echo "<td>" . $row['placas'] . "</td>";
    echo "<td>" . $row['rendimiento'] . "</td>";
    echo "<td>";
	echo "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conecviatiks);
?>

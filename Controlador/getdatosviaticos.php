

<?php
$q =$_GET['q'];

require('../Conect/conecviatik.php');
$sql="SELECT * FROM viatiks WHERE semana = '".$q."'";
$result = mysqli_query($conecviatiks,$sql);



echo "<div class='table-responsive'>
        <table id='viat'  class='table table-stripped toggle-arrow-tiny dataTables-example data-sort-order='desc''  data-page-size='50' style='width: 100%;'>
          <thead>
            <tr>
              
              <th >Lider de brigada</th>
              <th >Destino(s)</th>
              <th >Fecha de salida</th>
              <th >Fecha de llegada</th>
              <th >Semana</th>
              <th >Brigadista acompañante</th>
              
              <th >Vehiculo</th>
              <th >Placas</th>
              <th >Rendimiento</th>
              <th >Días</th>
              <th >Escuelas</th>
              <th >Recorrido(km)</th>
              <th >Excedente(km)</th>
              <th >Presupuesto gasolina</th>
              <th >Presupuesto casetas</th>
              <th >Viaticos del lider</th>
              <th >Viaticos acompañante</th>
              <th >Total real</th>
              <th >Total</th>
              
            </tr>
          </thead>
          <tbody>";
while($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    //echo "<td>" . $row['id'] . "</td>";
    //echo "<td>" . $row['num_vehiculo'] . "</td>";
     echo "<td>".$row['liderbrig']."</td>";
     echo "<td>".$row['lugares']."</td>";
     echo "<td>".$row['fechaini']."</td>";
     echo "<td>".$row['fechafin']."</td>";
     echo "<td>".$row['semana']."</td>";
     echo "<td>".$row['brigacompanante']."</td>";
     echo "<td>".$row['vehiculo']."</td>";
     echo "<td>".$row['placas']."</td>";
     echo "<td>".$row['rendimiento']."</td>";
     echo "<td>".$row['dias']."</td>";
     echo "<td>".$row['escuelasvisit']."</td>";
     echo "<td>".$row['recorrido']."</td>";
     echo "<td>".$row['excedente']."</td>";
     echo "<td>".$row['presugasolina']."</td>";
     echo "<td>".$row['presucasetas']."</td>";
     echo "<td>".$row['viaticoslider']."</td>";
     echo "<td>".$row['viaticosbrig']."</td>";
     echo "<td>".$row['totalreal']."</td>";
     echo "<td>".$row['totalchilo']."</td>";
    echo "</tr>";
}
            
         echo "</tbody>
          <tfoot>
            
              
                      <td colspan='5'>
                        <ul class='pagination pull-right'></ul>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>

              ";

mysqli_close($conecviatiks);
?>

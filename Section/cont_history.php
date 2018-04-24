<br>
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
     <div class="ibox-title">
      Historial de viaticos 
    </div>
    <div class="ibox-content">
      <div class="form-group " id="data_5">
        <center><b><label class="font-normal">Selecciona el rango de fechas que desea buscar</label></b>
          
          <form method="POST" action="#" class="form-horizontal">
          <div class="form-group" id="data_5">
            <label>Fecha</label>
            <div class="input-daterange input-group" id="datepicker">
              <input type="text" class="input-sm form-control" name="start" value="05/14/2014"/>
              <span class="input-group-addon">Al</span>
              <input type="text" class="input-sm form-control" name="end" value="05/22/2014" />
            </div><br>
              <input type="submit" class="btn btn-danger btn-lg " name="buscar" value="Buscar" />
          </div>
         </form>
        </center>     
      </div> 

      <div class="table-responsive">
        <table class="footable table table-stripped table-stripped toggle-arrow-tiny" >
          <thead>
            <tr>
              <th data-toggle="true">Lider de brigada</th>
              <th >Destino(s)</th>
              <th >Fecha de salida</th>
              <th >Fecha de llegada</th>
              <th >Brigadista acompañante</th>
              <th >Vehiculo</th>
              <th data-hide="all" >Placas</th>
              <th data-hide="all" >Rendimiento</th>
              <th data-hide="all" >Días</th>
              <th data-hide="all" >Escuelas</th>
              <th data-hide="all" >Recorrido(km)</th>
              <th data-hide="all" >Excedente(km)</th>
              <th data-hide="all" >Precio gasolina/L</th>
              <th data-hide="all" >Presupuesto gasolina</th>
              <th data-hide="all" >Presupuesto casetas</th>
              <th data-hide="all" >Viaticos del lider</th>
              <th data-hide="all" >Viaticos acompañante</th>
              <th data-hide="all" >Total real</th>
              <th data-hide="all" >Total</th>
              <th >Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require('../Conect/conecviatik.php');
            $rs = mysqli_query($conecviatiks, "SELECT * FROM viatiks");
            while($row=mysqli_fetch_array($rs))
            {
              echo "<tr class='gradeX'>";
              echo "<td>".$row['liderbrig']."</td>";
              echo "<td>".$row['lugares']."</td>";
              echo "<td>".$row['fechaini']."</td>";
              echo "<td>".$row['fechafin']."</td>";
              echo "<td>".$row['brigacompanante']."</td>";
              echo "<td>".$row['vehiculo']."</td>";
              echo "<td>".$row['placas']."</td>";
              echo "<td>".$row['rendimiento']."</td>";
              echo "<td>".$row['dias']."</td>";
              echo "<td>".$row['escuelasvisit']."</td>";
              echo "<td>".$row['recorrido']."</td>";
              echo "<td>".$row['excedente']."</td>";
              echo "<td>".$row['prelitrogas']."</td>";
              echo "<td>".$row['presugasolina']."</td>";
              echo "<td>".$row['presucasetas']."</td>";
              echo "<td>".$row['viaticoslider']."</td>";
              echo "<td>".$row['viaticosbrig']."</td>";
              echo "<td>".$row['totalreal']."</td>";
              echo "<td>".$row['totalchilo']."</td>";
              echo "<td> <a href='../Controlador/hisPdf.php' target='_blank' class='btn btn-danger'>Imprimir</a></td>";
                          // echo "<td class='center'> <a href='../Controlador/eliVehiculo.php?id=".$row['num_vehiculo']."' class='btn btn-danger'>Eliminar</a>
                          // </td>";
              echo "</tr>";
            }
            mysqli_close($conecviatiks);
            ?>
          </tbody>
          <tfoot>
            <tr>
                      <!-- <th>Lider de brigada</th>
                      <th >Vehiculo</th>
                      <th >Placas</th>
                      <th >Rendimiento</th>
                      <th >Destino(s)</th>
                      <th >Fecha de salida</th>
                      <th >Fecha de llegada</th>
                      <th >Días</th>
                      <th >Escuelas</th>
                      <th >Recorrido(km)</th>
                      <th >Excedente(km)</th>
                      <th >Precio gasolina/L</th>
                      <th >Presupuesto gasolina</th>
                      <th >Presupuesto casetas</th>
                      <th >Viaticos</th>
                      <th >Brigadista acompañante</th>
                      <th >Viaticos</th>
                      <th >Total real</th>
                      <th >Total</th>
                      <th >Accion</th> -->
                      <td colspan="5">
                        <ul class="pagination pull-right"></ul>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>

            </div></div></div></div>
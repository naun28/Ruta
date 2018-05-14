<br>
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
     <div class="ibox-title">
      Historial de viaticos 
    </div>
    <div class="ibox-content">
      <div class="form-group " id="data_5">
   <!--      <center><b><label class="font-normal">Selecciona el rango de fechas que desea buscar</label></b>
          
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
        </center>  -->    
      </div> 

      <div class="table-responsive">
        <table id="viat"  class="table table-stripped toggle-arrow-tiny dataTables-example data-sort-order='desc'"  data-page-size="50" style="width: 100%;">
          <thead>
            <tr>
              
              <th >Lider de brigada</th>
              <th >Destino(s)</th>
              <th >Fecha de salida</th>
              <th >Fecha de llegada</th>
              <th >Brigadista acompañante</th>
              <th >Detalles</th>
              <th style="display: none;">Id</th>
              <th style="display: none;">Vehiculo</th>
              <th style="display: none;">Placas</th>
              <th style="display: none;">Rendimiento</th>
              <th style="display: none;">Días</th>
              <th style="display: none;">Escuelas</th>
              <th style="display: none;">Recorrido(km)</th>
              <th style="display: none;">Excedente(km)</th>
              <th style="display: none;">Precio gasolina/L</th>
              <th style="display: none;">Presupuesto gasolina</th>
              <th style="display: none;">Presupuesto casetas</th>
              <th style="display: none;">Viaticos del lider</th>
              <th style="display: none;">Viaticos acompañante</th>
              <th style="display: none;">Total real</th>
              <th style="display: none;">Total</th>
              
            </tr>
          </thead>
          <tbody>
            <!-- <?php
            // require('../Conect/conecviatik.php');
            // $rs = mysqli_query($conecviatiks, "SELECT * FROM viatiks");
            // while($row=mysqli_fetch_array($rs))
            // {
            //   echo "<tr class='gradeX'>";
            //   echo "<td>".$row['liderbrig']."</td>";
            //   echo "<td>".$row['lugares']."</td>";
            //   echo "<td>".$row['fechaini']."</td>";
            //   echo "<td>".$row['fechafin']."</td>";
            //   echo "<td>".$row['brigacompanante']."</td>";
            //   echo "<td>".$row['vehiculo']."</td>";
            //   echo "<td>".$row['placas']."</td>";
            //   echo "<td>".$row['rendimiento']."</td>";
            //   echo "<td>".$row['dias']."</td>";
            //   echo "<td>".$row['escuelasvisit']."</td>";
            //   echo "<td>".$row['recorrido']."</td>";
            //   echo "<td>".$row['excedente']."</td>";
            //   echo "<td>".$row['prelitrogas']."</td>";
            //   echo "<td>".$row['presugasolina']."</td>";
            //   echo "<td>".$row['presucasetas']."</td>";
            //   echo "<td>".$row['viaticoslider']."</td>";
            //   echo "<td>".$row['viaticosbrig']."</td>";
            //   echo "<td>".$row['totalreal']."</td>";
            //   echo "<td>".$row['totalchilo']."</td>";
            //   echo "<td> <a href='../Controlador/hisPdf.php' target='_blank' class='btn btn-danger'>Imprimir</a></td>";
            //               // echo "<td class='center'> <a href='../Controlador/eliVehiculo.php?id=".$row['num_vehiculo']."' class='btn btn-danger'>Eliminar</a>
            //               // </td>";
            //   echo "</tr>";
            // }
            // mysqli_close($conecviatiks);
            ?> -->
          </tbody>
          <tfoot>
            <tr>
              <th >Lider de brigada</th>
              <th >Destino(s)</th>
              <th >Fecha de salida</th>
              <th >Fecha de llegada</th>
              <th >Brigadista acompañante</th>
              <th >Detalles</th>
             
              
                      <td colspan="5">
                        <ul class="pagination pull-right"></ul>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>

            </div></div></div></div>
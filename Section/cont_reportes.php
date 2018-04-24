<br>

    <!-- <div class="col 12 ">
        <div class="ibox float-e-margins">
            <div class="ibox-title"><h5>Reportes</h5></div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Generar reportes</h5>
                         <!--<div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div> -->
                    </div>
                    <div class="ibox-content">

                     <div class="form-group " id="data_5">
                      <center><b><label class="font-normal">Selecciona el rango de fechas que desea buscar</label></b>
                       <div class="form-group" id="data_5">
                        <label>Fecha</label>
                        <div class="input-daterange input-group" id="datepicker">
                         <input type="text" class="input-sm form-control" name="start" value="05/14/2014"/>
                         <span class="input-group-addon">Al</span>
                         <input type="text" class="input-sm form-control" name="end" value="05/22/2014" />
                     </div>
                 </div>
             </center>
             <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                        <tr>
                            <th>Reportado por:</th>
                            <th>Concepto</th>
                            <th>Diagnostico</th>
                            <th>Seguimiento</th>
                            <th>Fecha de Respuesta</th>
                            <th>Responsable</th>
                            <th>Visitó</th>
                            <th>Reporte recibido por:</th>
                            <th>Quien recibio en la escuela</th>
                            <th>Capturó</th>
                            <th>Finalizó</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                     <?php
                     require('../Conect/conecviatik.php');
                     $rs = mysqli_query($conecviatiks, "SELECT * FROM reporte");
                     while($row=mysqli_fetch_array($rs))
                     {
                      echo "<tr class='gradeX'>";
                      echo "<td>".$row['recib_reporte']."</td>";
                      echo "<td>".$row['concepto_reporte']."</td>";
                      echo "<td>".$row['diagnostico']."</td>";
                      echo "<td>".$row['seguimiento']."</td>";
                      echo "<td>".$row['fecha']."</td>";
                      echo "<td>".$row['responsable']."</td>";
                      echo "<td>".$row['visito_escuela']."</td>";
                      echo "<td>".$row['levanto_reporte']."</td>";
                      echo "<td>".$row['recibe_nescuela']."</td>";
                      echo "<td>".$row['capturo_reporte']."</td>";
                      echo "<td>".$row['finalizo']."</td>";
                      
                                  // echo "<td> <a href='../Controlador/hisPdf.php' target='_blank' class='btn btn-danger'>Imprimir</a></td>";
                          // echo "<td class='center'> <a href='../Controlador/eliVehiculo.php?id=".$row['num_vehiculo']."' class='btn btn-danger'>Eliminar</a>
                          // </td>";
                      echo "</tr>";
                  }
                  mysqli_close($conecviatiks);
                  ?>
              </tbody>
              <tfoot>
                <tr>
                    <th>Reportado por:</th>
                    <th>Concepto</th>
                    <th>Diagnostico</th>
                    <th>Seguimiento</th>
                    <th>Fecha de Respuesta</th>
                    <th>Responsable</th>
                    <th>Visitó</th>
                    <th>Reporte recibido por:</th>
                    <th>Quien recibio en la escuela</th>
                    <th>Capturó</th>
                    <th>Finalizó</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
</div>
</div>
</div>
</div>

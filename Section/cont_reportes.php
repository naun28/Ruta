<br>

<!-- <div class="col 12 ">
    <div class="ibox float-e-margins">
        <div class="ibox-title"><h5>Brigadista</h5>
        </div>
    </div>
</div> -->

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Listado de tarea terminadas</h5>
                           <!--  <h6 class="float-right">Semana del {{ date('d-m-Y') }} al {{ date('d-m-Y') </h6>

                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div> -->
                        </div>
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny">
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Nombre de escuela</th>
                                        <th>Clave</th>
                                        <th>Zona</th>
                                        <th data-hide="all">Tipo de escuela</th>
                                        
                                        <th data-hide="all">Domicilio</th>
                                        <th data-hide="all">Localidad</th>
                                        <th >Municipio</th>
                                        <th data-hide="all">Fecha ultima visita</th>
                                        <th data-hide="all">Semana</th>
                                        <th data-hide="all">Comentarios</th>
                                        <th data-hide="all">Fecha y hora de llegada (Servidor)</th>                                        
                                        <th data-hide="all">Fecha y hora de llegada (Lider)</th>
                                        <th data-hide="all">Fecha y hora de salida (Servidor)</th>                                        
                                        <th data-hide="all">Fecha y hora de salida (Lider)</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require('../Conect/conecviatik.php');
                                    $rs = mysqli_query($conecviatiks, "SELECT * FROM agendadas where statusvisita=2");
                                    while($row=mysqli_fetch_array($rs))
                                    {
                                      //Consulta hora y fecha de llegada 
                                      $ida=$row['id_agendada'];
                                      $rss2 = mysqli_query($conecviatiks, "SELECT * FROM cheker where idagendada='$ida' and status=1");
                                      $rowcheker2=mysqli_fetch_array($rss2);//){
                                      $observaciones2=$rowcheker2['observaciones'];
                                      $horauser2=$rowcheker2['horausu'];
                                      $fechauser2=$rowcheker2['fechausu'];
                                      $horaser2=$rowcheker2['horaser'];
                                      $fechaser2=$rowcheker2['fechaser'];
                                      //}Consulta hora y fecha de salida 
                                      $rss = mysqli_query($conecviatiks, "SELECT * FROM cheker where idagendada='$ida' and status=0");
                                      $rowcheker=mysqli_fetch_array($rss);//){
                                      $observaciones=$rowcheker['observaciones'];
                                      $horauser=$rowcheker['horausu'];
                                      $fechauser=$rowcheker['fechausu'];
                                      $horaser=$rowcheker['horaser'];
                                      $fechaser=$rowcheker['fechaser'];

                                        $llegada=$row['statusvisita'];
                                        echo "<tr class='gradeX'>";
                                        echo "<td>".$row['Escuela']."</td>";
                                        echo "<td>".$row['Clave']."</td>";
                                        echo "<td>".$row['zonat']."</td>";
                                        echo "<td>".$row['TipoEscuela']."</td>";
                                        
                                        echo "<td>".$row['Domicilio']."</td>";
                                        echo "<td>".$row['Localidad22']."</td>";
                                        echo "<td>".$row['Municipio']."</td>";
                                        echo "<td>".$row['UltimaVisita']."</td>";
                                        echo "<td>".$row['Semana']."</td>";
                                        echo "<td>".$observaciones."</td>";
                                        echo "<td>".$horaser2." ~ ".$fechaser2."</td>";
                                        echo "<td>".$horauser2." ~ ".$fechauser2."</td>";
                                        echo "<td>".$horaser." ~ ".$fechaser."</td>";
                                        echo "<td>".$horauser." ~ ".$fechauser."</td>";
                                            echo "<td class='center'> Terminada </td>";
                                       
                                        //echo "<td class='center'> <a href='../Vista/Captura.php?idagen=".$row["id_agendada"]."&idu=".$_SESSION['id_usuario']."' class='btn btn-danger'>Registrar llegada</a>
                                        //</td>";
                                        echo "</tr>";

                                    }

                                    mysqli_close($conecviatiks);
                                    ?>
                                    
                                    
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>


                        </div>
                    </div>
                </div>


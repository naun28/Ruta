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
                <h5>Escuelas terminadas</h5>
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
                                        <th data-hide="all">Observaciones de la visita</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require('../Conect/conecviatik.php');
                                    $rs = mysqli_query($conecviatiks, "SELECT * FROM agendadas where statusvisita=2");
                                    while($row=mysqli_fetch_array($rs))
                                    {
                                      //query para consulta de hora y fecha si lo piden

                                      $ida=$row['id_agendada'];
                                      $rss = mysqli_query($conecviatiks, "SELECT * FROM cheker where idagendada='$ida'");
                                      while($rowcheker=mysqli_fetch_array($rss)){
                                      $observaciones=$rowcheker['observaciones'];
                                      }
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


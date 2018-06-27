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
                <h5>Listado de tarea asignadas</h5>
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
                                        <th>Tipo de escuela</th>
                                        
                                        <th data-hide="all">Domicilio</th>
                                        <th data-hide="all">Localidad</th>
                                        <th data-hide="all">Municipio</th>
                                        <th data-hide="all">Fecha ultima visita</th>
                                        <th data-hide="all">Semana</th>
                                        <th data-hide="all">Comentarios</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require('../Conect/conecviatik.php');
                                    $brigadistas = $_SESSION["nombres"]." ".$_SESSION["apellidos"];
                                    $rs = mysqli_query($conecviatiks, "SELECT * FROM agendadas where Brigadistas like '%$brigadistas%' AND (statusvisita=0 || statusvisita=1) ORDER BY statusvisita=0");
                                    while($row=mysqli_fetch_array($rs))
                                    {
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
                                        echo "<td>".$row['Comentarios']."</td>";
                                        
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


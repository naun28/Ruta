 <!--Estructura del Modal-->
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:60%;"><!-- style="width: 80%;" -->
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-file-text-o modal-icon fa-sm"></i>
                    <h5 class="modal-title">Agendar Ruta</h5>
                </div>
                <div class="modal-body">
                    <form id="formLimpiar" method="post" action="../Modelo/RutaAgendada.php">
                        
                        <input type="hidden" id="Localidad" name="Localidad22">
                        <input type="hidden" id="Nequipos" name="Nequipos">
                        <input type="hidden" id="Aequipos" name="Aequipos">
                        <input type="hidden" id="Reequip" name="Reequip">
                        <input type="hidden" id="Conectividad" name="Conectividad">
                        <input type="hidden" id="ProbSolicitado" name="ProbSolicitado">
                        <input type="hidden" id="LevantReporte" name="LevantReporte">
                        <input type="hidden" id="Reporte" name="Reporte">
                        <input type="hidden" id="NReporte" name="NReporte">
                        <input type="hidden" id="FechaReporte" name="FechaReporte">
                        <input type="hidden" id="Visitas" name="Visitas">
                        <input type="hidden" id="UltimaVisita" name="UltimaVisita">
                        <input type="hidden" id="FechaMant" name="FechaMant">
                        <input type="hidden" id="TipoEscuela" name="TipoEscuela">
                       <div class="form-group col-md-12">
                            <label>Escuela</label><input type="text" id="Escuela" name="Escuela" placeholder="Escuela" class="form-control" readonly="Escuela">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Clave</label><input type="text"  id="Clave" name="Clave" placeholder="Clave" class="form-control" readonly="clave">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label>Municipio</label><input type="text" id="Municipio" name="Municipio" placeholder="Municipio" class="form-control" readonly="municipio">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Zona</label><input type="text" id="Zona" name="zonat" placeholder="Zona" class="form-control" readonly="Ruta33">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Domicilio</label><input type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio" class="form-control" readonly="Domicilio">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Semana</label><input type="number" id="Semana" name="Semana" min="1" placeholder="Semana" class="form-control" required="Semana">
                        </div>
                        <div class="form-group col-md-6" id="data_5">
                            <label>Fecha</label>
                           <div class="input-date input-group">
                                <input type="date" class="input-sm form-control" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> placeholder="Inicio" name="FechaIni" id="FechaIni" required="Inicio" />
                                <span class="input-group-addon">Al</span>
                                <input type="date"  class="input-sm form-control" placeholder="Final" name="FechaFin" id="FechaFin" required="final" />
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                          <label>Actividad</label><br>
                          <div class=" form-group col-sm-10">

                            <label class="checkbox-inline i-checks"> <input type="checkbox" value="Soporte" name="Soporte" class="form-control"> Soporte </label>
                            <label class="checkbox-inline i-checks"> <input type="checkbox" value="Mantenimiento" name="Mantenimiento" class="form-control"> Mantenimiento </label>
                            <label class="checkbox-inline i-checks"> <input type="checkbox" value="Conectividad" name="Conectiv" class="form-control"> Conectividad </label>
                            <label class="checkbox-inline i-checks"> <input type="checkbox" value="AulaDeMedios" name="AulaDeMedios" class="form-control"> Aula de Medios </label>
                          </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Lider de brigada</label>
                              <select data-placeholder="Seleccionar Lider" id="Lider" name="Lider" onchange="calix(this.value)"  class="chosen-select form-control" style="width:350px;" >
                                <option value="0" disabled selected>Seleccionar lider</option>
                                <?php
                                require('../Conect/conexion.php');

                                $rs = mysqli_query($conexion, "SELECT * FROM usuarios where tipouser = 'Lider'");
                                while($row=mysqli_fetch_array($rs))
                                {
                                  echo "<option value='".$row['id_usuario']."'>";
                                  echo $row['nombres']. " " .$row['apellidos'];
                                  echo "</option>";
                               }
                              mysqli_close($conexion);
                              ?>
                          </select>
                          <script>
                            function calix(str) {
                                if (str == "") {
                                    document.getElementById("datosbrig").innerHTML = "";
                                    return;
                                } else { 
                                    if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                    } else {
                                        // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            document.getElementById("datosbrig").innerHTML = this.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET","../Controlador/getdatosbrig.php?q="+str,true);
                                    xmlhttp.send();
                                }
                            }
                          </script>
                          
                          <div id="datosbrig"></div>
                     </div>
                        <div class="form-group col-md-12">
                            <label>Brigadistas</label>
                              <select data-placeholder="Brigadistas" class="chosen-select col-sm-10"  name="Brigadistas[]"  multiple style="width:350px;" tabindex="4">
                            
                            <?php
                            require('../Conect/conecviatik.php');
                            $rs = mysqli_query($conecviatiks, "SELECT id_usuario,nombres,apellidos FROM usuarios where tipouser = 'Brigadista'");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['nombres']. " " .$row['apellidos']."'>";
                              echo $row['nombres']. " " .$row['apellidos'];
                              echo "</option>";                     
                            }
                            mysqli_close($conecviatiks);
                            ?>
                          </select>
                     </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <div class="form-group">
                           <label>Comentarios</label>
                            <textarea type="text" placeholder="Comentario" name="Comentarios" maxlength="255" class="form-control" style="min-height: 50px; max-height: 50px; min-width: 100%; max-width: 100%;">

                            </textarea>
                            
                        </div>
                        
                        <div class="modal-footer">
                            <button id="btnLimpiar" type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-danger">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
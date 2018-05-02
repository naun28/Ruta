 <!--Estructura del Modal-->
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:60%;"><!-- style="width: 80%;" -->
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-laptop modal-icon"></i>
                    <h4 class="modal-title">Agregar Ruta</h4>
                </div>
                <div class="modal-body">
                    <form id="formLimpiar" method="post" action="../Modelo/RutaAgendada.php">
                       
                        <input type="hidden" id="Localidad22" name="Localidad22">
                        <input type="hidden" id="zonat" name="zonat">
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
                       
                        <div class="form-group col-md-6">
                            <label>Clave</label><input type="text"  id="Clave" name="Clave" placeholder="Clave" class="form-control" readonly="clave">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Escuela</label><input type="text" id="Escuela" name="Escuela" placeholder="Escuela" class="form-control" readonly="Escuela">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Municipio</label><input type="text" id="Municipio" name="Municipio" placeholder="Municipio" class="form-control" readonly="municipio">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Domicilio</label><input type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio" class="form-control" readonly="Domicilio">
                        </div>
                        <div class="form-group col-md-6" id="data_5">
                            <label>Fecha</label>
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="FechaIni" id="FechaIni" />
                                <span class="input-group-addon">Al</span>
                                <input type="text" class="input-sm form-control" name="FechaFin" id="FechaFin"  />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Lider de Brigada</label>
                            <div class="col-sm-12">
                              <select data-placeholder="Seleccionar Lider" id="Lider" name="Lider"  class="chosen-select form-control" style="width:350px;" onchange="cambio(this);">
                                <option value="0" disabled selected>Seleccionar Lider</option>
                                <?php
                                require('../Conect/conexion.php');

                                $rs = mysqli_query($conexion, "SELECT * FROM usuarios where tipouser = 'Lider de Brigada'");
                                while($row=mysqli_fetch_array($rs))
                                {
                                  echo "<option value='".$row['nombres']. " " .$row['apellidos']."'>";
                                  echo $row['nombres']. " " .$row['apellidos'];
                                  echo "</option>";                 
                               }
                              mysqli_close($conexion);
                              ?>
                          </select>
                      </div>
                     </div>
                        <div class="form-group col-md-6">
                            <label>Brigada</label><input type="text"  id="nBrigada" name="nBrigada" placeholder="Brigada" class="form-control" >
                        </div>
                        <div class="form-group col-md-6">
                            <label>Integrantes</label>
                            <textarea type="text" placeholder="Integrantes" name="Brigadistas"   class="form-control" style="min-height: 45px; max-height: 45px; min-width: 100%; max-width: 100%;">

                            </textarea>
                            
                        </div>
                        <div class="form-group">
                           <label>Comentario</label>
                            <textarea type="text" placeholder="Comentario" name="Comentarios" class="form-control" style="min-height: 50px; max-height: 50px; min-width: 100%; max-width: 100%;">

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
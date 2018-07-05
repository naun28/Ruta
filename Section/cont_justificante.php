<br>
    <!-- <div class="col 12 ">
        <div class="ibox float-e-margins">
            <div class="ibox-title"><h5>Secretaria </h5>
              
            </div>

            
        </div>
    </div> -->

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Justificantes</h5>
                </div>
                <div class="ibox-content">
                    <h5></h5>
                    <form class="form-horizontal" action="../Controlador/juspdf.php" method="POST" target="_blank">
                        <div class="form-group"><label class="col-sm-2 control-label">Empleado</label>
                            <div class="col-sm-10">
                                <select required="selecciones un empleado" data-placeholder="Selecciona empleado"   name="empleado"  class="chosen-select col-sm-10" style="width:350px;" tabindex="4" >
                            <option value=""  >Selecciona empleado</option>
                            <?php
                            require('../Conect/conecviatik.php');

                            $rs = mysqli_query($conecviatiks, "SELECT id_usuario,nombres,apellidos FROM usuarios");
                            while($row=mysqli_fetch_assoc($rs))
                            {
                              echo "<option value='".utf8_encode($row['nombres']). " " .utf8_encode($row['apellidos'])."'>";
                              echo utf8_encode($row['nombres']). " " .utf8_encode($row['apellidos']);
                              echo "</option>";                     
                            }
                            mysqli_close($conecviatiks);
                            ?>
                          </select>
                            </div>
                        </div>
                        <div class="form-group" id="data_5"><label class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-10">
                          <center><div class="input-daterange input-group" id="datepicker">
                            <input type="text" class="input-sm form-control" id="fi" name="fi" placeholder="inicio" required="llenar campo" />
                            <span class="input-group-addon">Al</span>
                            <input type="text" class="input-sm form-control" id="ff" name="ff"  placeholder="final" required="llenar campo" />
                          </div></center>
                        </div>
                      </div> 
                        
                        <div class="form-group"><label class="col-sm-2 control-label">Observaciones</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" maxlength="200" name="obser"  cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <br>
                                <button type="submit" class="btn btn-danger pull-right" target="blank">Justificante</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

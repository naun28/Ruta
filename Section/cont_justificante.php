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
                    <form class="form-horizontal" action="../Controlador/juspdf.php" method="POST">
                        <div class="form-group"><label class="col-sm-2 control-label">Empleado</label>
                            <div class="col-sm-10">
                                <select data-placeholder="Selecciona el vehiculo" onchange="return showCustomer();"  name="empleado"  class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
                            <option value="0" disabled selected>Selecciona empleado</option>
                            <?php
                            require('../Conect/conecviatik.php');

                            $rs = mysqli_query($conecviatiks, "SELECT id_usuario,nombres,apellidos FROM usuarios");
                            while($row=mysqli_fetch_assoc($rs))
                            {
                              echo "<option value='".$row['nombres']. " " .$row['apellidos']."'>";
                              echo $row['nombres']. " " .$row['apellidos'];
                              echo "</option>";                     
                            }
                            mysqli_close($conecviatiks);
                            ?>
                          </select>
                            </div>
                        </div>
                        
                        <div class="form-group"><label class="col-sm-2 control-label">Fecha inicial</label>
                            <div class="col-sm-10">
                                <input type="date" name="fi" class="form-control">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Fecha final</label>
                            <div class="col-sm-10">
                                <input type="date" name="ff" class="form-control">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Observaciones</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" maxlength="200" name="obser"  cols="30" rows="5"></textarea>
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

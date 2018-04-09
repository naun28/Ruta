<div class="wrapper wrapper-content animated ">
            <div class="row">
                <div class="col-lg-60">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           <!--Boton Modal-->
                            <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agregar Usuario</button>
                             <!--Estructura del Modal-->
                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-user-circle modal-icon"></i>
                                            <h4 class="modal-title">Agregar Usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form  method="POST" action="../Modelo/RegistroUsuarios.php" id="formLimpiar" class="form-group">
                                               
                                            <div class="form-group col-md-4">
                                                <label>Nombre(s)</label><input type="text" name="nombres" placeholder="Nombre(s)" class="form-control
                                                " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label>Apellido(s)</label><input type="text" name="apellidos" placeholder="Apellido(s)" class="form-control" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label>Telefono</label><input type="text" name="telefono" placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 000-0000000" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Correo</label><input type="email" name="correo" placeholder="Correo" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label><input type="password" name="pass" placeholder="Contraseña" class="form-control" pattern="[A-Za-z0-9!?-]{6,12}" required="">
                                            </div>
                                            <div class="form-group ">
                                                <label>Tipo de Usuario</label> 
                                                <select name="tipouser" id="tipouser" class="form-control chosen-container chosen-container-single"  onkeyup="habilitar" required="">
                                                    <option value="Brigadista" >Brigadista</option>
                                                    <option value="Jefe de Brigada">Jefe de Brigada</option>
                                                    <option value="Mesa">Mesa de Apoyo</option>
                                                    <option value="Administrador">Administrador</option>
                                                </select>
                                            </div>
                                            <div id="ver" >
                                              <div id="Mesa"   class="form-group">
                                                <label>N° de brigada</label> <select name="nbrigada" class="form-control">
                                                    <option value="0" selected>Seleccione Brigada</option>
                                                    <option value="Brigada 1">Brigada 1</option>
                                                    <option value="Brigada 2">Brigada 2</option>
                                                    <option value="Brigada 3">Brigada 3</option>
                                                    <option value="Brigada 4">Brigada 4</option>
                                                    <option value="Brigada 5">Brigada 5</option>
                                                    <option value="Brigada 6">Brigada 6</option>
                                                    <option value="Brigada 7">Brigada 7</option>
                                                    <option value="Brigada 8">Brigada 8</option>
                                                    <option value="Brigada 9">Brigada 9</option>
                                                    <option value="Brigada 10">Brigada 10</option>
                                                    <option value="Brigada 11">Brigada 11</option>
                                                    <option value="Brigada 12">Brigada 12</option>
                                                    <option value="Brigada 13">Brigada13</option>
                                                    <option value="Brigada 14">Brigada 14</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                           <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-danger demo2">Aceptar</button>
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                             <!--Estructura de la tabla -->
                   
                            <div class="ibox-tools">
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
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre(s)</th>
                                            <th>Apellido(s)</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Tipo de Empleado</th>
                                            <th>N. Brigada</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        include '../Conect/conexion.php';
                                        $q = "SELECT * FROM usuarios ORDER BY id_usuario Desc";
                                        $ejecutar_q = mysqli_query($conexion, $q);
                                        while ($row = $ejecutar_q->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id_usuario']; ?></td>
                                                <td><?php echo $row['nombres']; ?></td>
                                                <td><?php echo $row['apellidos']; ?></td>
                                                <td><?php echo $row['telefono']; ?></td>
                                                <td><?php echo $row['correo']; ?></td>
                                                <td><?php echo $row['tipouser']; ?></td>
                                                <td><?php echo $row['nbrigada']; ?></td>

                                            </tr> 
                                            <?php
                                        } 
                                        ?> 
                                    </tbody>
                                       <tfoot>
                                         <tr>
                                            <th>ID</th>
                                            <th>Nombre(s)</th>
                                            <th>Apellido(s)</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Tipo de Empleado</th>
                                            <th>N. Brigada</th>
                                           
                                        </tr>
                                    </tfoot> 
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
  </div>
  
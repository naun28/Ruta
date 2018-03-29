<div class="ibox float-e-margins">
    <br><div class="ibox-title"><h5>Perfiles de Usuarios</h5>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">

                <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                    <thead>
                        <tr>

                            <th data-toggle="true">Nombre</th>
                            <th data-hide="phone">Apellido</th>
                            <th data-hide="all">Telefono</th>
                            <th data-hide="all">Correo</th>
                            <th data-hide="all">Datos</th>
                            <th data-hide="phone">Tipo de Usuario</th>
                            <th data-hide="phone,tablet" >Nº Brigada</th>
                            <th data-sort-ignore="true">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                             Jesus Maria
                         </td>
                         <td>
                            Sabori Valenzuela
                        </td>
                        <td>
                            6622116622
                        </td>
                        <td>
                            Jmaria@gmail.com
                        </td>
                        <td>
                            Administrador
                        </td>
                        <td>
                            Jefe de brigada
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <div>
                                <button class="btn-primary btn btn-xs"  data-toggle="modal" data-target="#myModal">Editar</button>
                                <button class="btn-danger btn btn-xs">Borrar</button>
                            </div>
                           <!---Estructura del Modal-->
                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Editar Usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form id="formLimpiar" method="post" action="#">
                                                <div class="form-group col-md-4">
                                                    <label>Nombre(s)</label><input type="text" placeholder="Nombre(s)" class="form-control
                                                    " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Apellido(s)</label><input type="text" placeholder="Apellido(s)" class="form-control" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Telefono</label><input type="text" placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 000-0000000" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Correo</label><input type="email" placeholder="Correo" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Contraseña</label><input type="password" placeholder="Contraseña" class="form-control" pattern="[A-Za-z0-9!?-]{6,12}">
                                                </div>
                                                <div class="form-group ">
                                                    <label>Tipo de Usuario</label> 
                                                    <select name="tipouser" id="tipouser" class="form-control" 
                                                    onkeyup="habilitar" required="">
                                                    <option value="1" selected>Brigadista</option>
                                                    <option value="2">Jefe de Brigada</option>
                                                    <option value="3">Mesa de Apoyo</option>
                                                    <option value="4">Administrador</option>
                                                </select>
                                            </div>
                                            <div id="ver" >
                                              <div id="1"   class="form-group">
                                                <label>N° de brigada</label> <select name="brigada" class="form-control">
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btnLimpiar" type="reset" value="Cerrar" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger">Aceptar</button>
                                    </div>
                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             Carlos
                         </td>
                         <td>
                           Lafarga
                        </td>
                        <td>
                            6623456789
                        </td>
                        <td>
                            CarlosL@gmail.com
                        </td>
                        <td>
                            Administrador
                        </td>
                        <td>
                            Jefe de brigada
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            <div>
                                <button class="btn-primary btn btn-xs" data-toggle="modal" data-target="#myModal">Editar</button>
                                <button class="btn-danger btn btn-xs">Borrar</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
              
            </table>

        </div>
    </div>
</div>
</div>
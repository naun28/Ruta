
    <nav class="navbar-danger navbar-static-side" role="navigation">
        <div class="sidebar-collapse" >
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../Include/img/perfil.jpg" />
                             </span>
                        
                            <span class="clear" style="color: white;"> <span class="block m-t-xs"> <strong class="font-bold">Naun Lara</strong>
                             </span> <span class="text-muted text-xs block">Residente </span> </span>
                    </div>
                    <div class="logo-element">
                        SEC
                    </div>
                </li>
                <li>
                    <a href="inicio.php"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Inicio</span></a>
                </li>
              
                <li>
                    <a href="agregarusuarios.php"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Agregar Usuarios</span></a>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-vcard-o"></i> <span class="nav-label">Perfil de Usuarios</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-list-alt"></i> <span class="nav-label">Lista de Escuelas</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-address-book"></i> <span class="nav-label">Agendar Rutas</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-usd"></i> <span class="nav-label">Viáticos</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-male"></i> <span class="nav-label">Brigadista</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-female"></i> <span class="nav-label">Secretarias</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Reportes</span></a>
                </li>
               
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-danger " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
               
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>
        </nav>
        </div>
        <!-- Aqui inicia el contenido-->

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
                                          <form  method="POST" action="" id="formLimpiar" class="form-group">
                                               
                                            <div class="form-group col-md-4">
                                                <label>Nombre(s)</label><input type="text" name="nombres" placeholder="Nombre(s)" class="form-control
                                                " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label>Apellido(s)</label><input type="text" name="apellidos" placeholder="Apellido(s)" class="form-control" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label>Telefono</label><input type="text" name="telefon" placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 000-0000000" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Correo</label><input type="email" name="correo" placeholder="Correo" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label><input type="password" name="password" placeholder="Contraseña" class="form-control" pattern="[A-Za-z0-9!?-]{6,12}" required="">
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
                                                    <option value="1">Brigada 1</option>
                                                    <option value="2">Brigada 2</option>
                                                    <option value="3">Brigada 3</option>
                                                    <option value="4">Brigada 4</option>
                                                    <option value="5">Brigada 5</option>
                                                    <option value="6">Brigada 6</option>
                                                    <option value="7">Brigada 7</option>
                                                    <option value="8">Brigada 8</option>
                                                    <option value="9">Brigada 9</option>
                                                    <option value="10">Brigada 10</option>
                                                    <option value="11">Brigada 11</option>
                                                    <option value="12">Brigada 12</option>
                                                    <option value="13">Brigada13</option>
                                                    <option value="14">Brigada 14</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                           <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-danger">Aceptar</button>
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
                                            <th>Nombre(s)</th>
                                            <th>Apellido(s)</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Tipo de Empleado</th>
                                            <th>N. Brigada</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Naun</td>
                                            <td>Lara Gutierrez</td>
                                            <td>6622112211</td>
                                            <td>naun@gmail.com</td>
                                            <td>Jefe de Brigada</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Naun</td>
                                            <td>Lara Gutierrez</td>
                                            <td>6622112211</td>
                                            <td>naun@gmail.com</td>
                                            <td>Jefe de Brigada</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Naun</td>
                                            <td>Lara Gutierrez</td>
                                            <td>6622112211</td>
                                            <td>naun@gmail.com</td>
                                            <td>Jefe de Brigada</td>
                                            <td>1</td>
                                        </tr>
                                        

                                    </tbody>
                                    <tfoot>
                                         <tr>
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
<!-- fin del contenido-->

    <?PHP include "../Section/footer.php";?>
  </div>
       
  
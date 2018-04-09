<br>

<div class="col 12 ">
    <div class="ibox float-e-margins">
        <div class="ibox-title"><h5>Brigadista</h5>
        </div>
    </div>
</div>

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
                                        <th>Telefono</th>
                                        <th data-hide="all">Director</th>
                                        <th data-hide="all">Otrocampo</th>
                                        <th data-hide="all">Otrocampo</th>
                                        <th data-hide="all">Fecha ultima visita</th>
                                        <th data-hide="all">Comentarios</th>

                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Project - This is example of project</td>
                                        <td>Patrick Smith</td>
                                        <td>0800 051213</td>
                                        <td>Inceptos Hymenaeos Ltd</td>
                                        <td><span class="pie">0.52/1.561</span></td>
                                        <td>20%</td>
                                        <td>Jul 14, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                        <td> <input type="button" value="Levantar reporte" class="btn btn-danger" data-toggle="modal" data-target="#myModal4"> </td>
                                    </tr>
                                    <tr>
                                        <td>Alpha project</td>
                                        <td>Alice Jackson</td>
                                        <td>0500 780909</td>
                                        <td>Nec Euismod In Company</td>
                                        <td><span class="pie">6,9</span></td>
                                        <td>40%</td>
                                        <td>Jul 16, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                        <td> <input type="button" value="Levantar reporte" class="btn btn-danger" data-toggle="modal" data-target="#myModal4"> </td>
                                    </tr>
                                    <tr>
                                        <td>Betha project</td>
                                        <td>John Smith</td>
                                        <td>0800 1111</td>
                                        <td>Erat Volutpat</td>
                                        <td><span class="pie">3,1</span></td>
                                        <td>75%</td>
                                        <td>Jul 18, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                        <td> <input type="button" value="Levantar reporte" class="btn btn-danger" data-toggle="modal" data-target="#myModal4"> </td>
                                    </tr>
                                    <tr>
                                        <td>Gamma project</td>
                                        <td>Anna Jordan</td>
                                        <td>(016977) 0648</td>
                                        <td>Tellus Ltd</td>
                                        <td><span class="pie">4,9</span></td>
                                        <td>18%</td>
                                        <td>Jul 22, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                        <td> <input type="button" value="Levantar reporte" class="btn btn-danger" data-toggle="modal" data-target="#myModal4"> </td>
                                    </tr>
                                    <tr>
                                        <td>Alpha project</td>
                                        <td>Alice Jackson</td>
                                        <td>0500 780909</td>
                                        <td>Nec Euismod In Company</td>
                                        <td><span class="pie">6,9</span></td>
                                        <td>40%</td>
                                        <td>Jul 16, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                        <td> <input type="button" value="Levantar reporte" class="btn btn-danger" data-toggle="modal" data-target="#myModal4"> </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="modal inmodal"  id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog" style="width: 50%">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                            <i class="fa fa-book modal-icon"></i>
                                            <h4 class="modal-title">Generar reporte <h4>
                                            </div>
                                            <div class="modal-body">

                                                <form  method="POST" action="#" id="formLimpiar" class="form-group">
                                                    <div class="form-group">
                                                        <label>Reportado por:</label><input type="text" name="correo" placeholder="" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Concepto</label>
                                                        <textarea name="" id="" cols="30" rows="10" class="form-control" readonly></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Diagnostico</label>
                                                        <textarea name="" id="" cols="30" rows="10" class="form-control" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Seguimiento</label>
                                                        <textarea name="" id="" cols="30" rows="10" class="form-control" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fecha de Respuesta</label><input type="text" name="correo" placeholder="" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Responsable</label><input type="text" name="correo" placeholder="" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Visitó</label><input type="text" name="correo" placeholder="" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Registro reporte:</label><input type="text" name="correo" placeholder="" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Capturó</label><input type="text" name="correo" placeholder="" class="form-control" required="">
                                                    </div>
                                                    




                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-danger">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


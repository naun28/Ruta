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
                                        <th>Telefono</th>
                                        <th>Tipo de escuela</th>
                                        <th data-hide="all">Director</th>
                                        <th data-hide="all">Domicilio</th>
                                        <th data-hide="all">Localidad</th>
                                        <th data-hide="all">Municipio</th>
                                        <th data-hide="all">Fecha ultima visita</th>
                                        <th data-hide="all">Comentarios</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CONSEJO TUTELAR PARA MENORES DEL ESTADO DE SONORA</td>
                                        <td>26CTM0001A</td>
                                        <td>0800 051213</td>
                                        <td>PRIMARIA</td>
                                        <td>NAUN LARA</td>
                                        <td>BLVRD DE LOS GANADEROS S/N COL. LAS LOMAS</td>
                                        <td>HERMOSILLO</td>
                                        <td>HERMOSILLO</td>
                                        <td>01/01/2018</td>
                                        <td>AQUI VAN LOS COMENTARIOS</td>
                                        <td> <a type="button" class="btn btn-danger dim" href="../Vista/Captura.php" >Captura de visita</a> </td>
                                    </tr>
                                    <tr>
                                        <td>RAFAEL MORALES NIEBLAS</td>
                                        <td>26DAI0001U</td>
                                        <td>1800 051214</td>
                                        <td>PRIMARIA</td>
                                        <td>RAMON RODRIGUEZ</td>
                                        <td>AV JUAREZ S/N COL. LOS PINOS</td>
                                        <td>LAS BOCAS</td>
                                        <td>HUATABAMPO</td>
                                        <td>02/01/2018</td>
                                        <td>AQUI VAN LOS COMENTARIOS</td>
                                        <td> <a type="button" class="btn btn-danger dim" href="../Vista/Captura.php" >Captura de visita</a> </td>
                                        <!-- data-toggle="modal" data-target="#myModal4" -->
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
                                            <h4 class="modal-title">Captura de visita<h4>
                                            </div>
                                            <div class="modal-body">
                                            <form  method="POST" action="../Controlador/regReporte.php" id="formLimpiar" class="form-group">

                                                <div class="form-group" id="data_1">
                                                    <label class="font-normal">Fecha de llegada</label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                                                    </div>
                                                </div>
                                               
7
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" class="form-control" value="09:30" >
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                        
                                                <br>
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo date('d-m-Y');  ?>" name="fechaserv" placeholder=""   class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo date('H:i:s',time());  ?>" name="horaserv" placeholder=""  class="form-control" required="">
                                                </div>
                                                <div class="form-group">


                                                    <label>Fecha de llegada</label><input value="" type="text" id="myWadtch" placeholder=""  class="form-control" required="">
                                                </div>
                                                    



                                                   <!--  <div class="form-group">
                                                        <label>Reportado por:</label><input type="text" name="reportado" placeholder="" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Concepto</label>
                                                        <textarea name="concepto" id="" cols="30" rows="5" style="min-width: 100%; max-width: 100%;min-height: 100px;max-height: 100px"  class="form-control" ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Diagnostico</label>
                                                        <textarea name="diagnostico" id="" cols="30" rows="5" style="min-width: 100%; max-width: 100%;min-height: 100px;max-height: 100px" class="form-control" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Seguimiento</label>
                                                        <textarea name="seguimiento" id="" cols="30" rows="5" style="min-width: 100%; max-width: 100%;min-height: 100px;max-height: 100px" class="form-control" required></textarea>
                                                    </div>
                                                    <div class="form-group">      
                                                        <label class="font-normal">Fecha de Respuesta</label>
                                                        <div class="form-group" id="data_1">
                                                            <div class="input-group }">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" class="form-control" name="feres" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Responsable</label><input type="text" name="responsable" placeholder=""  class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Visitó</label><input type="text" name="visito" placeholder=""  class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Reporte recibido por:</label><input type="text" name="recpor" placeholder=""  class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Quien recibio en la escuela</label><input type="text" name="recibio" placeholder="" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Capturó</label><input type="text" name="capturo" placeholder=""  class="form-control" required="">
                                                    </div>
                                                    
                                                    <center>
                                                        <div class="required">
                                                            <br>
                                                            <label > ¿Se completaron todas las tareas? </label> <br>
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="inlineRadio1" value="Si" name="radioInline">
                                                                <label for="inlineRadio1"> Si </label>
                                                            </div>
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="inlineRadio2" value="No" name="radioInline">
                                                                <label for="inlineRadio2"> No </label>
                                                            </div>
                                                        </div>
                                                    </center>




                                                </div> -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-danger">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


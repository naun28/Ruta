<!--Estructura del Modal-->
<div class="modal inmodal" id="myModalEscLid" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content animated fadeIn">
            <div class="modal-header" style="height: 160px;">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-info-circle modal-icon"></i>
                <h4 class="modal-title">INFORMACION DEL REPORTE</h4>
            </div>
            <div class="modal-body" >
              <form  method="POST" action="../Modelo/EscuelasRevisadasLider.php" id="formLimpiar" class="form-group">
                    
                    <input type="hidden" id="Clave" name="Clave">
                    <input type="hidden" id="clavecct" name="clavecct">
                    <input type="hidden" id="Escuela" name="Escuela">
                    <input type="hidden" id="Domicilio" name="Domicilio">
                    <input type="hidden" id="Localidad22" name="Localidad">
                    <input type="hidden" id="Municipio" name="Municipio">
                    <input type="hidden" id="Ruta33" name="Zona">
                    <input type="hidden" id="Status_Esc" name="Status_Esc">
                
                <div class="form-group col-md-4">
                    <label>Numero de equipos</label><input type="text" id="Eq" name="Nequipos" class="form-control
                    " readonly="">
                </div>
                 <div class="form-group col-md-4">
                    <label>Año de equipos</label><input type="text" id="Equip" name="Aequipos" placeholder="" class="form-control" " readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Reequipamiento</label><input type="text" id="Reequip" name="Reequip" placeholder="" class="form-control" " readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Conectividad</label><input type="text" id="Conectividad" name="Conectividad" placeholder="" class="form-control" " readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Reporte</label><input type="text" id="Reporte" name="Reporte" placeholder="" class="form-control" " readonly="">
                </div>
                 
                 <div class="form-group col-md-4">
                    <label>Numero de reporte</label><input type="text" id="NumRep" name="Nreporte" placeholder="" class="form-control" " readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Fecha de reporte</label><input type="text" id="fecha" name="FechaReporte" placeholder="" class="form-control" " readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Levanto reporte</label><input type="text" id="levanto" name="LevantReporte" placeholder="" class="form-control" " readonly="">
                </div>
                 <div class="form-group col-md-4">
                    <label>Fecha de mantenimiento</label><input type="text" id="FechaMant" name="FechaMant" placeholder="" class="form-control" " readonly="">
                </div>
                 <div class="form-group col-md-4">
                    <label>Visitas</label><input type="text" id="Visita" name="Visitas" placeholder="" class="form-control" " readonly="">
                </div>
                 
                 <div class="form-group col-md-4">
                    <label>Ultima visita</label><input type="text" id="UltVisita" name="UltimaVisita" placeholder="" class="form-control" " readonly="">
                </div>
                 <div class="form-group col-md-4">
                    <label>Tipo de escuela</label><input type="text" id="tipo_escuela" name="TipoEscuela" placeholder="" class="form-control" " readonly="">
                </div>
                <div class="form-group">
                    <label>Solicitud del reporte</label>
                    <textarea type="text" id="concepto" name="ProbSolicitado" class="form-control" style="min-height: 100px; max-height: 100px; min-width: 100%; max-width: 100%;" readonly="" >
                    </textarea>
                </div>
                <div class="form-group" >
                 <input type="hidden" name="">
                </div>
                 
            <div class="modal-footer">
               <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-white dim" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger dim demo1"><i class="fa fa-check"></i> Revisada</button>
            </div>
            </form>
        </div>
        
    </div>
</div>



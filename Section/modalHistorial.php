<!--Estructura del Modal-->
<div class="modal inmodal" id="myModa20" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content animated fadeIn">
            <div class="modal-header" style="height: 160px;">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-info-circle modal-icon"></i>
                <h4 class="modal-title">Detalles</h4>
            </div>
            <div class="modal-body" >
                <form  method="POST" action="#" id="formLimpiar" class="form-group">
                    <input type="hidden" class="form-control" readonly id="id">
 
                <div class="form-group col-md-4">
                    <b><label></b>Lider de Brigada</label>
                    <input type="text" class="form-control" readonly id="liderbrig">

                </div>
                 <div class="form-group col-md-4">
                    <b><label></b>Destino</label>
                    <input type="text" class="form-control" readonly id="vehiculo">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Fecha de salida</label>
                    <input type="text" class="form-control" readonly id="placas">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Fecha de llegada</label>
                    <input type="text" class="form-control" readonly id="rendimiento">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Brigadista(s)</label>
                    <input type="text" class="form-control" readonly id="lugares">

                </div>
                 
                 <div class="form-group col-md-4">
                    <b><label></b>vehiculo</label>
                    <input type="text" class="form-control" readonly id="fechaini">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Placas</label>
                    <input type="text" class="form-control" readonly id="fechafin">

                </div>
                 <div class="form-group col-md-4">
                    <b><label></b>Rendimiento</label>
                    <input type="text" class="form-control" readonly id="dias">

                </div>
                 <div class="form-group col-md-4">
                    <b><label></b>Días</label>
                    <input type="text" class="form-control" readonly id="escuelasvisit">

                </div>
                 
                 <div class="form-group col-md-4">
                    <b><label></b>Escuelas</label>
                    <input type="text" class="form-control" readonly id="recorrido">

                </div>
                 <div class="form-group col-md-4">
                    <b><label></b>Recorrido</label>
                    <input type="text" class="form-control" readonly id="excedente">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Excedente</label>
                    <input type="text" class="form-control" readonly id="prelitrogas">

                </div>
                <div class="form-group">
                    <b><label></b>Precio de gasolina por litro</label>
                    <input type="text" class="form-control" readonly id="presugasolina">

                </div>
                <div class="form-group">
                    <b><label></b>Presupuesto para gasolina</label>
                    <input type="text" class="form-control" readonly id="presucasetas">


                </div>
                <div class="form-group">
                    <b><label></b>Presupuesto para casetas</label>
                    <input type="text" class="form-control" readonly id="viaticoslider">

                </div>
                <div class="form-group">
                    <b><label></b>Viaticos para el lider</label>
                    <input type="text" class="form-control" readonly id="brigacompanante">

                </div>
                <div class="form-group">
                    <b><label></b>Viaticos para brigadistas</label>
                    <input type="text" class="form-control" readonly id="viaticosbrig">

                </div>
                <div class="form-group">
                    <b><label></b>Total real</label>
                    <input type="text" class="form-control" readonly id="totalreal">

                </div>
                <div class="form-group">
                    <b><label></b>Total</label>
                    <input type="text" class="form-control" readonly id="totalchilo">

                </div>
              
                 
            <div class="modal-footer">
               <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
            </form>
        </div>
        
    </div>
</div>



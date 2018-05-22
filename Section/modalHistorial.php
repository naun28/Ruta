<!--Estructura del Modal-->
<div class="modal inmodal" id="myModa20" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content animated fadeIn">
            <div class="modal-header" >
                <h4 class="modal-title">Detalles</h4>
            </div>
            <div class="modal-body" >
                <form  method="POST" action="#" id="formLimpiar" class="form-group">
                    <input type="hidden" class="form-control" readonly id="id">
                <fieldset>
                <legend>Brigadista</legend>
                <div class="form-group col-md-4">
                    <b><label></b>Lider de Brigada</label>
                    <input type="text" class="form-control" readonly id="liderbrig">
                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Brigadista(s)</label>
                    <input type="text" class="form-control" readonly id="brigacompanante">

                </div>
                </fieldset>
                <fieldset>
                <legend>Datos del vehiculo</legend>
                 <div class="form-group col-md-4">
                    <b><label></b>Vehiculo</label>
                    <input type="text" class="form-control" readonly id="vehiculo">
                </div>
            
                <div class="form-group col-md-4">
                    <b><label></b>Placas</label>
                    <input type="text" class="form-control" readonly id="placas">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Rendimiento</label>
                    <input type="text" class="form-control" readonly id="rendimiento">
                </div>
                </fieldset>
                <fieldset>
                <legend>Brigadista</legend>
                <div class="form-group col-md-4">
                    <b><label></b>Destinos</label>
                    <input type="text" class="form-control" readonly id="lugares">

                </div>
                 
                 <div class="form-group col-md-4">
                    <b><label></b>Fecha inicial</label>
                    <input type="text" class="form-control" readonly id="fechaini">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Fecha final</label>
                    <input type="text" class="form-control" readonly id="fechafin">

                </div>
                 <div class="form-group col-md-4">
                    <b><label></b>Días</label>
                    <input type="text" class="form-control" readonly id="dias">

                </div>
                 <div class="form-group col-md-4">
                    <b><label></b>Escuelas</label>
                    <input type="text" class="form-control" readonly id="escuelasvisit">

                </div>
                 
                 <div class="form-group col-md-4">
                    <b><label></b>Recorrido</label>
                    <input type="text" class="form-control" readonly id="recorrido">

                </div>
                 <div class="form-group col-md-4">
                    <b><label></b>Excedente</label>
                    <input type="text" class="form-control" readonly id="excedente">

                </div>
            </fieldset>
            <fieldset>
                <legend>Presupuesto</legend>
                <div class="form-group col-md-4">
                    <b><label></b>Precio de gasolina por litro</label>
                    <input type="text" class="form-control" readonly id="prelitrogas">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Presupuesto para gasolina</label>
                    <input type="text" class="form-control" readonly id="presugasolina">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Presupuesto para casetas</label>
                    <input type="text" class="form-control" readonly id="presucasetas">
                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Viaticos para el lider</label>
                    <input type="text" class="form-control" readonly id="viaticoslider">

                </div>
                
                <div class="form-group col-md-4">
                    <b><label></b>Viaticos para brigadistas</label>
                    <input type="text" class="form-control" readonly id="viaticosbrig">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Total real</label>
                    <input type="text" class="form-control" readonly id="totalreal">

                </div>
                <div class="form-group col-md-4">
                    <b><label></b>Total</label>
                    <input type="text" class="form-control" readonly id="totalchilo">

                </div>
              </fieldset>
                 
            <div class="modal-footer">
               <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-danger dim" data-dismiss="modal">Cerrar</button>
            </div>
            </form>
        </div>
        
    </div>
</div>



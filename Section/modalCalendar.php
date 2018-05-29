<!--Estructura del Modal-->
    <div class="modal inmodal fade" id="ModalCalendar" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h1 class="modal-title"><li class="fa fa-calendar modal-icon"></li></h1>
                    <h4 class="modal-title">INFORMACION DE BRIGADA</h4>
                </div>
                <div class="modal-body">
                        <form method="POST" action="" id="formLimpiar">
                            <input type="hidden"  id="id_agendada" name="id_agendada" placeholder="Clave" class="form-control" readonly="id_agendada">
                            <div class="form-group col-md-6">
                            <label>Lider</label><input type="text"  id="Lider" name="Lider" placeholder="Lider" class="form-control" readonly="lider">
                           </div>
                            <div class="form-group col-md-6">
                            <label>Brigada</label><input type="text"  id="nBrigada" name="nBrigada" placeholder="nBrigada" class="form-control" readonly="nbrigada">
                           </div>
                           <div class="form-group col-md-6">
                            <label>Brigadistas</label><input type="text"  id="Brigadistas" name="Brigadistas" placeholder="Brigadistas" class="form-control" readonly="brigadistas">
                           </div>
                           <div class="form-group col-md-6">
                            <label>Escuela</label><input type="text"  id="Escuela" name="Escuela" placeholder="Escuela" class="form-control" readonly="escuela">
                           </div>
                           <div class="form-group">
                            <label></label>
                           </div>
                </div>
                <div class="form-group modal-footer">
                    <button  id="btnLimpiar" type="button" class="btn btn-danger dim" data-dismiss="modal">Aceptar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
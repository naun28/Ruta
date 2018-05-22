
 <!--Estructura del Modal-->
    <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h1 class="modal-title"><li class="fa fa-exclamation-triangle modal-icon"></li></h1>
                </div>
                <div class="modal-body">
                    <CENTER><h4>¿DESEA QUITAR ESCUELA DE LA LISTA?</h4></CENTER>
                        <form method="POST" action="../Modelo/deshacer.php" id="formLimpiar">
                            <input type="hidden"  id="ClaveM" name="ClaveM" placeholder="Clave" class="form-control" readonly="clave">
                            <input type="hidden" id="Status_Esc" name="Status_Esc" value="0">
                       
                </div>
                <div class="modal-footer">
                    <button id="btnLimpiar" type="button" class="btn btn-white dim" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger dim">Aceptar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
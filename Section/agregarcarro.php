<fieldset>
              <legend>Agregar vehiculo</legend>
                <form id="frmajax" method="POST" class="form-horizontal" >
                  <div class="form-group"><label class="col-sm-2 control-label">Numero del vehiculo</label>
                    <div class="col-sm-10"><input type="text" name="numve" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Nombre del carro</label>
                    <div class="col-sm-10"><input type="text" name="nomve" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Placas</label>
                    <div class="col-sm-10"><input type="text" name="plave" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Rendimiento</label>
                    <div class="col-sm-10"><input type="text" name="renve" class="form-control"></div>
                  </div>
                  <button id="btnsave" class="btn btn-danger pull-right">Guardar</button>
                  
                </form>
              
      


              </fieldset>

              
<script type="text/javascript">
  $(document).ready(function(){
    $('#btnsave').click(function(){
      var datos =$('#frmajax').serialize();
      
      $.ajax({
        type:"POST",
        url:"../Controlador/regVehiculo.php",
        data:datos,
        success:function(r){
          if (r==1) 
          {
            alert('Agregado con exito');
          }else
          {
            alert('Problemas al guardar el registro');
          }
        }
      });
      return false;
    });
  });




</script>

<br>
<div class="row">
 <!--********************************************************************* -->
 <div class="col-lg-12">
    <div class="tabs-container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1">Rutas Por Dias</a></li>
        
    </ul>

    <div class="tab-content">
      <!-- RUTAS Actuales-->
    <div id="tab-1" class="tab-pane active">
      <div class="panel-body">
         <div class="ibox-content">
            <div class="row">
               <div class="col-lg-3">
                   <label>Fecha</label>
                   <div class="form-group" id="data_1">
                       <div class="input-group date">
                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                           <input type="text" onchange="corte(this);" name="fecha" id="fecha" value = "<?php echo date('m/d/Y'); ?>" class="form-control" >

                       </div>
                       
                   </div>
               </div><br><!-- <button class=' agenda btn btn-danger dim btn-xs pull-right' data-toggle='modal' data-target='#myModal99'>Generar viaticos</button> -->
           </div><br>
           <div class="table-responsive">
               <table  id="rutas" class="table table-striped table-bordered table-hover" style="width: 100%;">
                <thead>
                    <tr>
                      <th style="display: none;">id</th>
                       <th>Clave</th>
                       <th>Escuela</th>
                       <th>Localidad</th>
                       <th>Municipio</th>
                       <th>Lider de Brigada</th>
                       <th>Brigada</th>
                       <th>Brigadistas</th>
                       <th>Fecha de Salida</th>
                       <th>Fecha de Regreso</th>
                       <th>Semana</th>
                       <th style="display: none;">Comentarios</th>
                       <th>Actividad</th>

                   </tr>
               </thead>

           </table>
          </div>
          </div>
        </div>
       </div>
      
    </div>
   </div>
 </div>
</div>



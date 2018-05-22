<br>
<div class="row">
 <!--********************************************************************* -->
 <div class="col-lg-12">
    <div class="tabs-container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1"> Agendar Ruta</a></li>
        <li class=""><a data-toggle="tab" href="#tab-2">Rutas Actuales</a></li>
    </ul>
    <div class="tab-content">
     <div id="tab-1" class="tab-pane active">
        <div class="panel-body">
          <div class="ibox-content">
            <div class="table-responsive">
                <table id="poragendar" class="table table-striped table-bordered table-hover" style="width: 100%;" >
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Escuela</th>
                            <th style="width: 18%;">Domicilio</th>
                            <th>Localidad</th>
                            <th>Municipio</th>
                            <th>Conectividad</th>
                            <th style="width: 18%;">Solicitud</th>
                            <th>Levanto Reporte</th>
                            <th>Accion</th>
                            <th><li class="fa fa-window-close"></li></th>
                            <th style="display: none;">Zona</th>
                            <th style="display: none;">Nequipos</th>
                            <th style="display: none;">Aequipos</th>
                            <th style="display: none;">Reequip</th>
                            <th style="display: none;">Reporte</th>
                            <th style="display: none;">NReporte</th>
                            <th style="display: none;">FechaReporte</th>
                            <th style="display: none;">Visitas</th>
                            <th style="display: none;">UltimaVisita</th>
                            <th style="display: none;">FechaMant</th>
                            <th style="display: none;">TipoEscuela</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                     <tr>
                        <th>Clave</th>
                            <th>Escuela</th>
                            <th style="width: 18%;">Domicilio</th>
                            <th>Localidad</th>
                            <th>Municipio</th>
                            <th>Conectividad</th>
                            <th style="width: 18%;">Solicitud</th>
                            <th>Levanto Reporte</th>
                            <th>Accion</th>
                            <th><li class="fa fa-window-close"></li></th>
                            <th style="display: none;">Zona</th>
                            <th style="display: none;">Nequipos</th>
                            <th style="display: none;">Aequipos</th>
                            <th style="display: none;">Reequip</th>
                            <th style="display: none;">Reporte</th>
                            <th style="display: none;">NReporte</th>
                            <th style="display: none;">FechaReporte</th>
                            <th style="display: none;">Visitas</th>
                            <th style="display: none;">UltimaVisita</th>
                            <th style="display: none;">FechaMant</th>
                            <th style="display: none;">TipoEscuela</th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>
</div>
<!-- RUTAS Actuales-->
<div id="tab-2" class="tab-pane"><br>
    <div class="row">
     <div class="col-lg-3">
         <label>Fecha:</label>
         <div class="form-group" id="data_1">
             <div class="input-group date">
                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                 <input type="text" onchange="lista(this);" name="fecha" id="fecha" value = "<?php echo date('m/d/Y'); ?>" class="form-control" >
             </div>
         </div>
     </div>
 </div><br>
    <div class="panel-body">
        <div class="ibox-content">
            <div class="table-responsive">
                <table id="Rutas" class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                        <tr>
                            <th style="display: none;">Clave</th>
                            <th>Escuela</th>
                            <th>Localidad</th>
                            <th style="display: none;">Municipio</th>
                            <th>Lider de Brigada</th>
                            <th>Brigada</th>
                            <th>Brigadistas</th>
                            <th>Fecha de Salida</th>
                            <th>Fecha de Regreso</th>
                            <th>Semana</th>
                            <th>Comentarios</th>
                            <th style="width: 5%;">Actividad</th>

                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                    <tfoot>
                     <tr>
                        <th style="display: none;">Clave</th>
                            <th >Escuela</th>
                            <th>Localidad</th>
                            <th style="display: none;">Municipio</th>
                            <th>Lider de Brigada</th>
                            <th>Brigada</th>
                            <th>Brigadistas</th>
                            <th>Fecha de Salida</th>
                            <th>Fecha de Regreso</th>
                            <th>Semana</th>
                            <th>Comentarios</th>
                            <th style="width: 5%;">Actividad</th>

                    </tr>
                </tfoot>
            </table>
        </div>

    </div>

</div>
</div>

</div>
</div>
</div>
</div>



<br>
<div class="row">

 <!--- Estructura -->
  <div class="col-lg-12">
    <div class="tabs-container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1">Costos</a></li>
        <!-- <li class=""><a data-toggle="tab" href="#tab-2">Historial</a></li> -->
        <li class=""><a data-toggle="tab" href="#tab-2">Agregar vehiculo</a></li>
      </ul>
      <div class="tab-content">
        <!--- PESTAÑA 1 -->
        <div id="tab-1" class="tab-pane active">
          <div class="panel-body">
            <div class="ibox-content">
              <div class="row">
               <form method="POST" action="../Controlador/regViatiks.php" class="form-horizontal">
                <!-- NIVEL 1 -->
                <div class="col-lg-12">
                  <!-- LIDER DE BRIGADA -->
                  <div class="col-lg-6">
                    <fieldset>
                      <legend>Brigadista</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Lider de brigada</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Selecciona el vehiculo" id="selecar" name="librigada"  class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
                            <option value="0" disabled selected>Selecciona brigadista</option>
                            <?php
                            require('../Conect/conecviatik.php');

                            $rs = mysqli_query($conecviatiks, "SELECT id_usuario,nombres,apellidos FROM usuarios");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['nombres']. " " .$row['apellidos']."'>";
                              echo $row['nombres']. " " .$row['apellidos'];
                              echo "</option>";                     
                            }
                            mysqli_close($conecviatiks);
                            ?>
                          </select>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <!-- DATOS DEL VEHICULO -->
                  <div class="col-lg-6">
                    <fieldset>
                      <legend>Datos del vehiculo</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Vehiculo</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Selecciona el vehiculo" id="selecar" name="nuvehiculo" class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
                            <!-- se cargaran de una base de datos-->
                            <option value="0" disabled selected>Selecciones un vehiculo</option>
                            <?php
                            require('../Conect/conecviatik.php');

                            $rs = mysqli_query($conecviatiks, "SELECT * FROM vehiculos");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['num_vehiculo']."'>";
                              echo $row['num_vehiculo'];
                              echo "</option>";                     
                            }

                            mysqli_close($conecviatiks);
                            ?>

                          </select>
                        </div>
                      </div>

                      <div class="form-group"><label class="col-sm-2 control-label">Placas</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Selecciona el vehiculo" id="selecar" name="plavehiculo" class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
                            <option value="0" disabled selected>Selecciones las placas</option>
                            <?php
                            require('../Conect/conecviatik.php');

                            $rs = mysqli_query($conecviatiks, "SELECT placas FROM vehiculos");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['placas']."'>";
                              echo $row['placas'];
                              echo "</option>";                     
                            }
                            mysqli_close($conecviatiks);
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Rendimiento</label>

                        <div class="col-sm-10"><input type="text" placeholder="Rendimiento (Km/L)" name="rendvehiculo" class="form-control"></div>
                      </div>
                    </fieldset>
                  </div>       
                </div>
                <!-- NIVEL 2 --> 
                <div class="col-lg-12">
                  <!-- DATOS DEL VIAJE --> 
                  <div class="col-lg-6">
                    <fieldset>
                      <legend>Datos del viaje</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Lugar(es)</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Selecciona municipio(s)" name="lugs[]" class="chosen-select col-sm-10" multiple style="width:350px;" tabindex="4">
                            <option value="Aconchi">Aconchi</option>
                            <option value="Agua_Prieta">Agua_Prieta</option>
                            <option value="Alamos">Alamos</option>
                            <option value="Altar">Altar</option>
                            <option value="Arivechi">Arivechi</option>
                            <option value="Arizpe">Arizpe</option>
                            <option value="Atil">Atil</option>
                            <option value="Bacadehuachi">Bacadehuachi</option>
                            <option value="Bacanora">Bacanora</option>
                            <option value="Bacerac">Bacerac</option>
                            <option value="Bacoachi">Bacoachi</option>
                            <option value="Bacum">Bacum</option>
                            <option value="Banamichi">Banamichi</option>
                            <option value="Baviacora">Baviacora</option>
                            <option value="Bavispe">Bavispe</option>
                            <option value="Benjamin_Hill">Benjamin_Hill</option>
                            <option value="Caborca">Caborca</option>
                            <option value="Cajeme">Cajeme</option>
                            <option value="Cananea">Cananea</option>
                            <option value="Carbo">Carbo</option>
                            <option value="La_Colorada">La_Colorada</option>
                            <option value="Cucurpe">Cucurpe</option>
                            <option value="Cumpas">Cumpas</option>
                            <option value="Divisaderos">Divisaderos</option>
                            <option value="Empalme">Empalme</option>
                            <option value="Etchojoa">Etchojoa</option>
                            <option value="Fronteras">Fronteras</option>
                            <option value="Granados">Granados</option>
                            <option value="Guaymas">Guaymas</option>
                            <option value="Hermosillo">Hermosillo</option>
                            <option value="Huachinera">Huachinera</option>
                            <option value="Huasabas">Huasabas</option>
                            <option value="Huatabampo">Huatabampo</option>
                            <option value="Huepac">Huepac</option>
                            <option value="Imuris">Imuris</option>
                            <option value="Magdalena">Magdalena</option>
                            <option value="Mazatan">Mazatan</option>
                            <option value="Moctezuma">Moctezuma</option>
                            <option value="Naco">Naco</option>
                            <option value="Nacori_Chico">Nacori_Chico</option>
                            <option value="Nacozari_de_Garcia">Nacozari_de_Garcia</option>
                            <option value="Navojoa">Navojoa</option>
                            <option value="Nogales">Nogales</option>
                            <option value="Onavas">Onavas</option>
                            <option value="Opodepe">Opodepe</option>
                            <option value="Oquitoa">Oquitoa</option>
                            <option value="Pitiquito">Pitiquito</option>
                            <option value="Puerto_Peñasco">Puerto_Peñasco</option>
                            <option value="Quiriego">Quiriego</option>
                            <option value="Rayon">Rayon</option>
                            <option value="Rosario">Rosario</option>
                            <option value="Sahuaripa">Sahuaripa</option>
                            <option value="San_Felipe_de_Jesus">San_Felipe_de_Jesus</option>
                            <option value="San_Javier">San_Javier</option>
                            <option value="San_Luis_Rio_Colorado">San_Luis_Rio_Colorado</option>
                            <option value="San_Miguel_de_Horcasitas">San_Miguel_de_Horcasitas</option>
                            <option value="San_Pedro_de_la_Cueva">San_Pedro_de_la_Cueva</option>
                            <option value="Santa_Ana">Santa_Ana</option>
                            <option value="Santa_Cruz">Santa_Cruz</option>
                            <option value="Saric">Saric</option>
                            <option value="Soyopa">Soyopa</option>
                            <option value="Suaqui_Grande">Suaqui_Grande</option>
                            <option value="Tepache">Tepache</option>
                            <option value="Trincheras">Trincheras</option>
                            <option value="Tubutama">Tubutama</option>
                            <option value="Ures">Ures</option>
                            <option value="Villa_Hidalgo">Villa_Hidalgo</option>
                            <option value="Villa_Pesqueira">Villa_Pesqueira</option>
                            <option value="Yecora">Yecora</option>
                            <option value="General_Plutarco_Elias_Calles">General_Plutarco_Elias_Calles</option>
                            <option value="Benito_Juarez">Benito_Juarez</option>
                            <option value="San_Ignacio_Rio_Muerto">San_Ignacio_Rio_Muerto</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-10">
                          <center><div class="input-daterange input-group" id="datepicker">
                            <input type="date" class="input-sm form-control"  name="feini" value="05/14/2014"/>
                            <span class="input-group-addon">Al</span>
                            <input type="date" class="input-sm form-control"  name="fefin" value="05/22/2014" />
                          </div></center>
                        </div>
                      </div> 
                      <div class="form-group"><label class="col-sm-2 control-label">Dias</label>
                        <div class="col-sm-10"><input type="text" name="dia" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Claves de escuelas</label>
                        <div class="col-sm-10">
                          <!--<input type="text" class="form-control">-->
                          <select data-placeholder="Escuela(s) a visitar" name="scuelas" class="chosen-select col-sm-10" multiple style="width:350px;" tabindex="4">
                            <option value="1">Escuela 1</option>
                            <option value="2">Escuela 2</option>
                            <option value="3">Escuela 3</option>
                            <option value="4">Escuela 4</option>
                            <option value="5">Escuela 5</option>
                          </select> 
                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Recorrido (Km)</label>
                        <div class="col-sm-10"><input type="text" name="recor" placeholder="Destino más retirado" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Excedente</label>
                        <div class="col-sm-10"><input type="text" name="recorexe" class="form-control"></div>
                      </div>
                    </fieldset>
                  </div> 
                  <!-- DATOS PRESUPUESTOS --> 
                  <div class="col-lg-6">
                    <fieldset>
                      <legend>Presupuestos</legend>
                      
                      <div class="form-group"><label class="col-sm-2 control-label">Precio Gasolina/L</label>
                        <div class="col-sm-10"><input placeholder="Introduzca el preco actual" name="prelitro" type="text" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Presupuesto gasolina</label>
                        <div class="col-sm-10"><input type="text" name="pregasolina" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Presupuesto casetas</label>
                        <div class="col-sm-10"><input type="text" name="precasetas" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Viaticos</label>
                        <div class="col-sm-10"><input type="text" name="previatico" placeholder="700 al dia x brigadista" class="form-control"></div>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <!-- NIVEL 3 -->
                <div class="col-lg-12">
                  <!-- AÑADIR BRIGADISTAS -->
                  <div class="col-lg-6">
                    <fieldset>
                      <legend>Añadir brigadista</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Brigadista</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Selecciona una brigada" name="addbrig" class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
                            <option value="0" disabled selected>Selecciona brigadista</option>
                            <?php
                            require('../Conect/conecviatik.php');

                            $rs = mysqli_query($conecviatiks, "SELECT id_usuario,nombres,apellidos FROM usuarios");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['nombres']. " " .$row['apellidos']."'>";
                              echo $row['nombres']. " " .$row['apellidos'];
                              echo "</option>";                     
                            }
                            mysqli_close($conecviatiks);
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Viaticos</label>
                        <div class="col-sm-10"><input type="text" name="prebriadd" placeholder="700 al dia x brigadista" class="form-control"></div>
                      </div>
                    </fieldset>
                  </div>
                  <!-- RESUMEN DE COSTO -->
                  <div class="col-lg-6">
                    <fieldset>
                      <legend>Resumen costo</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Total real</label>
                        <div class="col-sm-10"><input type="text" name="totreal" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Total</label>
                        <div class="col-sm-10"><input type="text" name="totfinal" class="form-control"></div>
                      </div>
                      <div class="form-group ">
                        <div class="col-sm-10"><br><br>
                          <!-- <input type="reset" class="btn btn-default pull-left" value="Limpiar"> -->
                          <input type="submit" class="btn btn-danger pull-right" value="Terminar">
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
               </form>
              </div>
            </div>      
          </div>
        </div>
        <!--- Pestaña 2 -->
       <!--  <div id="tab-2" class="tab-pane">
          <div class="panel-body">
            <div class="ibox-content">
         
             
            
            </div>
          </div>
        </div> -->
        <!--- Pestaña 2 -->
        <div id="tab-2" class="tab-pane">
          <div class="panel-body">
            <div class="ibox-content">
              <fieldset>
              <legend>Agregar vehiculo</legend>
                <form action="../Controlador/regVehiculo.php" method="POST" class="form-horizontal" >
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
                  <input type="submit" class="btn btn-danger pull-right" value="Guardar" >
                </form>
              </fieldset>
              <br>
              <fieldset>
              <legend>Listado de vehiculos</legend>
                <div class="table-responsive">
                  <table class="footable table table-stripped" >
                    <thead>
                      <tr>
                        <th>Numero de vehiculo</th>
                        <th>Nombre del vehiculo</th>
                        <th>Placas</th>
                        <th>Rendimiento</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        require('../Conect/conecviatik.php');
                        $rs = mysqli_query($conecviatiks, "SELECT * FROM vehiculos");
                        while($row=mysqli_fetch_array($rs))
                        {
                          echo "<tr class='gradeX'>";
                          echo "<td>".$row['num_vehiculo']."</td>";
                          echo "<td>".$row['vehiculo']."</td>";
                          echo "<td>".$row['placas']."</td>";
                          echo "<td>".$row['rendimiento']."</td>";
                          echo "<td class='center'> <a href='../Controlador/eliVehiculo.php?id=".$row['num_vehiculo']."' class='btn btn-danger'>Eliminar</a>
                           </td>";
                          echo "</tr>";
                          
                        }

                        mysqli_close($conecviatiks);
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Numero de vehiculo</th>
                        <th>Nombre del vehiculo</th>
                        <th>Placas</th>
                        <th>Rendimiento</th>
                        <th>Acción</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


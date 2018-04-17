<br>
<div class="row">
 <!--- Estructura -->

 <div class="col-lg-12">
  <div class="tabs-container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#tab-1">Costos</a></li>
      <li class=""><a data-toggle="tab" href="#tab-2">Historial</a></li>
      <li class=""><a data-toggle="tab" href="#tab-3">Agregar vehiculo</a></li>
    </ul>
    <div class="tab-content">
      <!--- Pestaña 1 -->
      <div id="tab-1" class="tab-pane active">
        <div class="panel-body">
          <div class="ibox-content">
            <div class="row">
             <form method="get" class="form-horizontal">
              <div class="col-lg-12">
                <div class="col-lg-6">
                  <fieldset>
                    <legend>Brigadista</legend>
                    <div class="form-group"><label class="col-sm-2 control-label">Lider de brigada</label>
                      <div class="col-sm-10">
                        <select data-placeholder="Selecciona el vehiculo" id="selecar"  class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
                        <option value="0" disabled selected>Selecciones las placas</option>
                      <?php
                        require('../Conect/conecviatik.php');

                        $rs = mysqli_query($conecviatiks, "SELECT id_usuario,nombres,apellidos FROM usuarios");
                        while($row=mysqli_fetch_array($rs))
                        {
                          echo "<option value='".$row['id_usuario']."'>";
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
              <!-- parte 2-6 -->
              <div class="col-lg-6">
                <fieldset>
                  <legend>Datos del vehiculo</legend>
                  <div class="form-group"><label class="col-sm-2 control-label">Vehiculo</label>
                    <div class="col-sm-10">
                      <select data-placeholder="Selecciona el vehiculo" id="selecar"  class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
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
                      <select data-placeholder="Selecciona el vehiculo" id="selecar"  class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
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

                    <div class="col-sm-10"><input type="text" placeholder="Rendimiento (Km/L)" class="form-control"></div>
                  </div>
                </div>
              </div>
            </fieldset>

            <!-- ---------------------------------------------------------------------- -->  
            <div class="col-lg-12">
              <fieldset>
                <legend>Datos del viaje</legend>
                <div class="col-lg-6">
                  <div class="form-group"><label class="col-sm-2 control-label">Lugar(es)</label>
                    <div class="col-sm-10">
                      <!-- se cargaran de una base de datos-->
                      <select data-placeholder="Selecciona municipio(s)" class="chosen-select col-sm-10" multiple style="width:350px;" tabindex="4">

                        <option value="1">Aconchi</option>
                        <option value="2">Agua Prieta</option>
                        <option value="3">Alamos</option>
                        <option value="4">Altar</option>
                        <option value="5">Arivechi</option>
                        <option value="6">Arizpe</option>
                        <option value="7">Atil</option>
                        <option value="8">Bacadehuachi</option>
                        <option value="9">Bacanora</option>
                        <option value="10">Bacerac</option>
                        <option value="11">Bacoachi</option>
                        <option value="12">Bacum</option>
                        <option value="13">Banamichi</option>
                        <option value="14">Baviacora</option>
                        <option value="15">Bavispe</option>
                        <option value="16">Benjamin Hill</option>
                        <option value="17">Caborca</option>
                        <option value="18">Cajeme</option>
                        <option value="19">Cananea</option>
                        <option value="20">Carbo</option>
                        <option value="21">La Colorada</option>
                        <option value="22">Cucurpe</option>
                        <option value="23">Cumpas</option>
                        <option value="24">Divisaderos</option>
                        <option value="25">Empalme</option>
                        <option value="26">Etchojoa</option>
                        <option value="27">Fronteras</option>
                        <option value="28">Granados</option>
                        <option value="29">Guaymas</option>
                        <option value="30">Hermosillo</option>
                        <option value="31">Huachinera</option>
                        <option value="32">Huasabas</option>
                        <option value="33">Huatabampo</option>
                        <option value="34">Huepac</option>
                        <option value="35">Imuris</option>
                        <option value="36">Magdalena</option>
                        <option value="37">Mazatan</option>
                        <option value="38">Moctezuma</option>
                        <option value="39">Naco</option>
                        <option value="40">Nacori Chico</option>
                        <option value="41">Nacozari de Garcia</option>
                        <option value="42">Navojoa</option>
                        <option value="43">Nogales</option>
                        <option value="44">Onavas</option>
                        <option value="45">Opodepe</option>
                        <option value="46">Oquitoa</option>
                        <option value="47">Pitiquito</option>
                        <option value="48">Puerto Pe</option>
                        <option value="49">Quiriego</option>
                        <option value="50">Rayon</option>
                        <option value="51">Rosario</option>
                        <option value="52">Sahuaripa</option>
                        <option value="53">San Felipe de Jesus</option>
                        <option value="54">San Javier</option>
                        <option value="55">San Luis Rio Colorado</option>
                        <option value="56">San Miguel de Horcasitas</option>
                        <option value="57">San Pedro de la Cueva</option>
                        <option value="58">Santa Ana</option>
                        <option value="59">Santa Cruz</option>
                        <option value="60">Saric</option>
                        <option value="61">Soyopa</option>
                        <option value="62">Suaqui Grande</option>
                        <option value="63">Tepache</option>
                        <option value="64">Trincheras</option>
                        <option value="65">Tubutama</option>
                        <option value="66">Ures</option>
                        <option value="67">Villa Hidalgo</option>
                        <option value="68">Villa Pesqueira</option>
                        <option value="69">Yecora</option>
                        <option value="70">General Plutarco Elias Calles</option>
                        <option value="71">Benito Juarez</option>
                        <option value="72">San Ignacio Rio Muerto</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Fecha</label>
                    <div class="col-sm-10">
                      <center><div class="input-daterange input-group" id="datepicker">
                        <input type="text" class="input-sm form-control"  name="start" value="05/14/2014"/>
                        <span class="input-group-addon">Al</span>
                        <input type="text" class="input-sm form-control"  name="end" value="05/22/2014" />
                      </div></center>
                    </div>
                  </div> 
                  <div class="form-group"><label class="col-sm-2 control-label">Dias</label>
                    <div class="col-sm-10"><input type="text"  class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Claves de escuelas</label>
                    <div class="col-sm-10">
                      <!--<input type="text" class="form-control">-->
                      <select data-placeholder="Escuela(s) a visitar" class="chosen-select col-sm-10" multiple style="width:350px;" tabindex="4">
                        <option value="1">Escuela 1</option>
                        <option value="2">Escuela 2</option>
                        <option value="3">Escuela 3</option>
                        <option value="4">Escuela 4</option>
                        <option value="5">Escuela 5</option>
                      </select> 
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Recorrido (Km)</label>
                    <div class="col-sm-10"><input type="text" placeholder="Destino más retirado" class="form-control"></div>
                  </div>

                  
                  
                </div>
                <div class="col-lg-6">
                  <div class="form-group"><label class="col-sm-2 control-label">Excedente</label>
                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Precio Gasolina/L</label>
                    <div class="col-sm-10"><input placeholder="Introduzca el preco actual" type="text" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Presupuesto gasolina</label>
                    <div class="col-sm-10"><input type="text"  class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Presupuesto casetas</label>
                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Viaticos</label>
                    <div class="col-sm-10"><input type="text"  placeholder="700 al dia x brigadista" class="form-control"></div>
                  </div>
                </div>
              </fieldset>
              <br><br>
              
              <div class="col-lg-6">
                <fieldset>
                  <legend>Añadir brigadista</legend>
                  <div class="form-group"><label class="col-sm-2 control-label">Brigadista</label>
                    <div class="col-sm-10"><select data-placeholder="Selecciona una brigada" class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
                      <!-- se cargaran de una base de datos-->
                      <option value="1">Brigadista 1</option>
                      <option value="2">Brigadista 2</option>
                      <option value="3">Brigadista 3</option>
                      <option value="4">Brigadista 4</option>
                      <option value="5">Brigadista 5</option>
                      <option value="6">Brigadista 6</option>
                      <option value="7">Brigadista 7</option>
                      <option value="8">Brigadista 8</option>
                      <option value="9">Brigadista 9</option>
                      <option value="10">Brigadista 10</option>
                      <option value="11">Brigadista 11</option>
                      <option value="12">Brigadista 12</option>

                    </select>
                  </div>
                </div>
                
                <div class="form-group"><label class="col-sm-2 control-label">Viaticos</label>
                  <div class="col-sm-10"><input type="text"  placeholder="700 al dia x brigadista" class="form-control"></div>
                </div>

              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <legend>Resumen costo</legend>
                <div class="form-group"><label class="col-sm-2 control-label">Total real</label>
                  <div class="col-sm-10"><input type="text"  class="form-control"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Total</label>
                  <div class="col-sm-10"><input type="text" class="form-control"></div>
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
        </div>      
      </div>
    </div>
  </div>
</form>

<!--- Pestaña 2 -->
<div id="tab-2" class="tab-pane">
  <div class="panel-body">
    <div class="ibox-content">
      <div class="form-group " id="data_5">
        <center><b><label class="font-normal">Selecciona el rango de fechas que desea buscar</label></b>
         <div class="form-group" id="data_5">
          <label>Fecha</label>
          <div class="input-daterange input-group" id="datepicker">
            <input type="text" class="input-sm form-control" name="start" value="05/14/2014"/>
            <span class="input-group-addon">Al</span>
            <input type="text" class="input-sm form-control" name="end" value="05/22/2014" />
          </div>
        </div>
      </center>     
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover dataTables-example" >
        <thead>
          <tr>
            <th>Lider de brigada</th>
            <th >Vehiculo</th>
            <th >Placas</th>
            <th >Rendimiento</th>
            <th >Destino(s)</th>
            <th >Fecha de salida</th>
            <th >Fecha de llegada</th>
            <th >Días</th>
            <th >Escuelas</th>
            <th >Recorrido(km)</th>
            <th >Excedente(km)</th>
            <th >Precio gasolina/L</th>
            <th >Presupuesto gasolina</th>
            <th >Presupuesto casetas</th>
            <th >Viaticos</th>
            <th >Brigadista acompañante</th>
            <th >Fecha de salida</th>
            <th >Fecha de llegada</th>
            <th >Días</th>
            <th >Viaticos</th>
            <th >Total real</th>
            <th >Total</th>
            <th >Accion</th>
          </tr>
        </thead>
        <tbody>
          <tr class="gradeX">
            <td>[nombrebrigadista]</td>
            <td>[Vehiculo]</td>
            <td>[000]</td>
            <td>[Rendimiento]</td>
            <td>[destino]</td>
            <td>[Fechadesalida]</td>
            <td>[Fechadellegada]</td>
            <td>[dias]</td>
            <td>[escuelas]</td>
            <td>[km]</td>
            <td>[km]</td>
            <td>[preciogasolina]/L</td>
            <td>[presupuestogasolina]</td>
            <td>[presupuestocasetas]</td>
            <td>[viaticos]</td>
            <td>[Fechadesalida]</td>
            <td>[Fechadellegada]</td>
            <td>[dias]</td>
            <td>[brigadistaacompañante]</td>
            <td>[viaticos]</td>
            <td>[totalreal]</td>
            <td>[total]</td>   
            <td class="center"> <input class="btn btn-danger" type="button" name="" value="ver"> </td>
          </tr>
          <tr class="gradeC">
            <td>[nombrebrigadista]</td>
            <td>[Vehiculo]</td>
            <td>[001]</td>
            <td>[Rendimiento]</td>
            <td>[destino]</td>
            <td>[Fechadesalida]</td>
            <td>[Fechadellegada]</td>
            <td>[dias]</td>
            <td>[escuelas]</td>
            <td>[km]</td>
            <td>[km]</td>
            <td>[preciogasolina]/L</td>
            <td>[presupuestogasolina]</td>
            <td>[presupuestocasetas]</td>
            <td>[viaticos]</td>
            <td>[Fechadesalida]</td>
            <td>[Fechadellegada]</td>
            <td>[dias]</td>
            <td>[brigadistaacompañante]</td>
            <td>[viaticos]</td>
            <td>[totalreal]</td>
            <td>[total]</td>    
            <td class="center"> <input class="btn btn-danger" type="button" name="" value="ver"> </td>
          </tr>
          <tr class="gradeA">
            <td>[nombrebrigadista]</td>
            <td>[Vehiculo]</td>
            <td>[002]</td>
            <td>[Rendimiento]</td>
            <td>[destino]</td>
            <td>[Fechadesalida]</td>
            <td>[Fechadellegada]</td>
            <td>[dias]</td>
            <td>[escuelas]</td>
            <td>[km]</td>
            <td>[km]</td>
            <td>[preciogasolina]/L</td>
            <td>[presupuestogasolina]</td>
            <td>[presupuestocasetas]</td>
            <td>[viaticos]</td>
            <td>[Fechadesalida]</td>
            <td>[Fechadellegada]</td>
            <td>[dias]</td>
            <td>[brigadistaacompañante]</td>
            <td>[viaticos]</td>
            <td>[totalreal]</td>
            <td>[total]</td>  
            <td class="center"> <input class="btn btn-danger" type="button" name="" value="ver"> </td>
          </tr>

        </tbody>
        <tfoot>
          <tr>
            <th>Lider de brigada</th>
            <th >Vehiculo</th>
            <th >Placas</th>
            <th >Rendimiento</th>
            <th >Destino(s)</th>
            <th >Fecha de salida</th>
            <th >Fecha de llegada</th>
            <th >Días</th>
            <th >Escuelas</th>
            <th >Recorrido(km)</th>
            <th >Excedente(km)</th>
            <th >Precio gasolina/L</th>
            <th >Presupuesto gasolina</th>
            <th >Presupuesto casetas</th>
            <th >Viaticos</th>
            <th >Brigadista acompañante</th>
            <th >Fecha de salida</th>
            <th >Fecha de llegada</th>
            <th >Días</th>
            <th >Viaticos</th>
            <th >Total real</th>
            <th >Total</th>
            <th >Accion</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
</div>
<!--- Pestaña 3 -->
<div id="tab-3" class="tab-pane">
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




<!--********************************************************************* -->


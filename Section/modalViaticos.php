 <!--Estructura del Modal-->
    <div class="modal inmodal" id="myModal99" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:60%;"><!-- style="width: 80%;" -->
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                   
                    <h5 class="modal-title">Generar viaticos</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="../Controlador/regViatiks.php" class="form-horizontal">
                        
                        <fieldset>
                      <legend>Brigadista</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Lider de brigada</label>
                        <div class="col-sm-10">

                          <select data-placeholder="Selecciona lider" onchange="return showCustomer();" id="selecar" name="librigada"  class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">
                            <option value=""  >Selecciona lider</option>
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
                    <fieldset>
                      <legend>Datos del vehiculo</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Vehiculo</label>
                        <div class="col-sm-10">


                          <select data-placeholder="Selecciona el vehiculo" onchange="cale(this.value)" id="nuvehiculo" name="nuvehiculo" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">

                            <option value="" >Selecciones un vehiculo</option>
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

                          <script>
                            function cale(str) {
                              if (str == "") {
                                document.getElementById("datosvehiculo").innerHTML = "";
                                return;
                              } else { 
                                if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                      } else {
                                        // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                      }
                                      xmlhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                          document.getElementById("datosvehiculo").innerHTML = this.responseText;
                                        }
                                      };
                                      xmlhttp.open("GET","../Controlador/getdatos.php?q="+str,true);
                                      xmlhttp.send();
                                    }
                                  }
                                </script>
                                <br><br>
                                <div id="datosvehiculo"></div>

                    </fieldset>
                    <fieldset>
                      <legend>Datos del viaje</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Lugar(es)</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Selecciona municipio(s)" name="lugs[]" class="chosen-select col-sm-10" multiple style="width:350px;" tabindex="4" required>
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
                      
                      <div class="form-group" id="data_5"><label class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-10">
                          <center><div class="input-daterange input-group" id="datepicker">
                            <input type="text" class="input-sm form-control" id="feini" name="feini" values="05/16/2018" placeholder="inicio" required="llenar campo" />
                            <span class="input-group-addon">Al</span>
                            <input type="text" class="input-sm form-control" id="fefin" name="fefin" values="05/30/2018" placeholder="final" required="llenar campo" />
                          </div></center>
                        </div>
                      </div>                     

                      <?php 
                      /*$datetime1 = date_create('2009-10-11');
                      $datetime2 = date_create('2009-10-20');
                      $interval = date_diff($datetime1, $datetime2);
                      echo $interval->format('%d%');*/
                      ?>
                      <div class="form-group"><label class="col-sm-2 control-label">Dias</label>
                        <div class="col-sm-10"><input type="text" id="di" onkeypress="return validanum(event)" value="" name="dia" class="form-control" required="llenar campo"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Claves de escuelas</label>
                        <div class="col-sm-10">
                          <!--<input type="text" class="form-control">-->
                          <select data-placeholder="Escuela(s) a visitar" name="scuelas[]" class="chosen-select col-sm-10" multiple style="width:350px;" tabindex="4">
                            
                            <?php
                            require('../Conect/conecviatik.php');

                            $rs = mysqli_query($conecviatiks, "SELECT Clave,Escuela FROM agendadas");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['Clave'],"'>";
                              echo $row['Clave']. " - " .$row['Escuela'];
                              echo "</option>";                     
                            }
                            mysqli_close($conecviatiks);
                            ?>
                          </select> 
                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Recorrido (Km)</label>
                        <div class="col-sm-10"><input type="text" name="recor" onkeypress="return validanum(event)" value="" placeholder="" class="form-control" required="llenar campo"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Excedente</label>
                        <div class="col-sm-10"><input type="text" name="recorexe" onkeypress="return validanum(event)" value="" class="form-control" required="llenar campo"></div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Presupuestos</legend>
                      
                      <div class="form-group"><label class="col-sm-2 control-label">Precio Gasolina/L</label>
                        <div class="col-sm-10"><input placeholder="Introduzca el precio actual" value="" name="prelitro" onkeypress="return validanum(event)" type="text" class="form-control" required="llenar campo"></div>
                      </div>
                      
                      <div class="form-group"><label class="col-sm-2 control-label">Presupuesto casetas</label>
                        <div class="col-sm-10"><input type="text" name="precasetas"  value="" class="form-control" onkeypress="return validanum(event)" required="llenar campo"></div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Añadir brigadista</legend>
                      <div class="form-group"><label class="col-sm-2 control-label">Brigadista</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Selecciona una brigada" multiple name="addbrig[]" class="chosen-select col-sm-10" style="width:350px;" tabindex="4">

                            <?php
                            require('../Conect/conecviatik.php');

                            $rs = mysqli_query($conecviatiks, "SELECT id_usuario,nombres,apellidos FROM usuarios where tipouser='Brigadista'");
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
                          <input type="submit" class="btn btn-danger pull-right" value="Terminar">

    
                    </form> 
                </div>
            </div>
        </div>
    </div>
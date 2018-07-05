<br>
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
     
    <div class="ibox-content">
      <div class="form-group " id="data_5">
   <!--      <center><b><label class="font-normal">Selecciona el rango de fechas que desea buscar</label></b>
          
          <form method="POST" action="#" class="form-horizontal">
          <div class="form-group" id="data_5">
            <label>Fecha</label>
            <div class="input-daterange input-group" id="datepicker">
              <input type="text" class="input-sm form-control" name="start" value="05/14/2014"/>
              <span class="input-group-addon">Al</span>
              <input type="text" class="input-sm form-control" name="end" value="05/22/2014" />
            </div><br>
              <input type="submit" class="btn btn-danger btn-lg " name="buscar" value="Buscar" />
          </div>
         </form>
        </center>  -->    
      </div> 

      <!-- <div class="table-responsive">
        <table id="viat"  class="table table-stripped toggle-arrow-tiny dataTables-example data-sort-order='desc'"  data-page-size="50" style="width: 100%;">
          <thead>
            <tr>
              
              <th >Lider de brigada</th>
              <th >Destino(s)</th>
              <th >Fecha de salida</th>
              <th >Fecha de llegada</th>
              <th >Brigadista acompañante</th>
              <th >Detalles</th>
              <th style="display: none;">Id</th>
              <th style="display: none;">Vehiculo</th>
              <th style="display: none;">Placas</th>
              <th style="display: none;">Rendimiento</th>
              <th style="display: none;">Días</th>
              <th style="display: none;">Escuelas</th>
              <th style="display: none;">Recorrido(km)</th>
              <th style="display: none;">Excedente(km)</th>
              <th style="display: none;">Precio gasolina/L</th>
              <th style="display: none;">Presupuesto gasolina</th>
              <th style="display: none;">Presupuesto casetas</th>
              <th style="display: none;">Viaticos del lider</th>
              <th style="display: none;">Viaticos acompañante</th>
              <th style="display: none;">Total real</th>
              <th style="display: none;">Total</th>
              
            </tr>
          </thead>
          <tbody>
             <?php
            // require('../Conect/conecviatik.php');
            // $rs = mysqli_query($conecviatiks, "SELECT * FROM viatiks");
            // while($row=mysqli_fetch_array($rs))
            // {
            //   echo "<tr class='gradeX'>";
            //   echo "<td>".$row['liderbrig']."</td>";
            //   echo "<td>".$row['lugares']."</td>";
            //   echo "<td>".$row['fechaini']."</td>";
            //   echo "<td>".$row['fechafin']."</td>";
            //   echo "<td>".$row['brigacompanante']."</td>";
            //   echo "<td>".$row['vehiculo']."</td>";
            //   echo "<td>".$row['placas']."</td>";
            //   echo "<td>".$row['rendimiento']."</td>";
            //   echo "<td>".$row['dias']."</td>";
            //   echo "<td>".$row['escuelasvisit']."</td>";
            //   echo "<td>".$row['recorrido']."</td>";
            //   echo "<td>".$row['excedente']."</td>";
            //   echo "<td>".$row['prelitrogas']."</td>";
            //   echo "<td>".$row['presugasolina']."</td>";
            //   echo "<td>".$row['presucasetas']."</td>";
            //   echo "<td>".$row['viaticoslider']."</td>";
            //   echo "<td>".$row['viaticosbrig']."</td>";
            //   echo "<td>".$row['totalreal']."</td>";
            //   echo "<td>".$row['totalchilo']."</td>";
            //   echo "<td> <a href='../Controlador/hisPdf.php' target='_blank' class='btn btn-danger'>Imprimir</a></td>";
            //               // echo "<td class='center'> <a href='../Controlador/eliVehiculo.php?id=".$row['num_vehiculo']."' class='btn btn-danger'>Eliminar</a>
            //               // </td>";
            //   echo "</tr>";
            // }
            // mysqli_close($conecviatiks);
            ?> --
          </tbody>
          <tfoot>
            <tr>
              <th >Lider de brigada</th>
              <th >Destino(s)</th>
              <th >Fecha de salida</th>
              <th >Fecha de llegada</th>
              <th >Brigadista acompañante</th>
              <th >Detalles</th>
             
              
                      <td colspan="5">
                        <ul class="pagination pull-right"></ul>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div> -->
              <fieldset>
                      <legend>Consulta de viaticos por semana</legend>
                      <form action="../Controlador/Generarexcel.php" method="POST">
                      <div class="form-group"><label class="col-sm-2 control-label">Semana</label>
                        <div class="col-sm-6">
                          <select data-placeholder="Selecciona una semana" onchange="cale(this.value)" id="semana" name="semana" class="chosen-select col-sm-6" style="width:350px;" tabindex="4" required="llenar campo">

                            <option value="" >Selecciona una semana</option>
                            <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option>
                            

                          </select>
                          <br><br>
                          <input type="submit"  value="Exportar a excel" placeholder="" class=" btn btn-danger" required>
                          </form>
                        
                          <script>
                            function cale(str) {
                              if (str == "") {
                                document.getElementById("datosviaticos").innerHTML = "";
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
                                          document.getElementById("datosviaticos").innerHTML = this.responseText;
                                        }
                                      };
                                      xmlhttp.open("GET","../Controlador/getdatosviaticos.php?q="+str,true);
                                      xmlhttp.send();
                                    }
                                  }
                                </script>
                                <br><br>
                                

                    </fieldset>
<div id="datosviaticos"></div>
            </div></div>

          </div></div>
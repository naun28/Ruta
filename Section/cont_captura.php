<?php 

$id_agendada=$_GET['idagen'];
$id_usuario=$_GET['idu'];

?>

<div class="wrapper wrapper-content  animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Captura de visita</h5>
				</div>

				<div class="ibox-content">
					<div class="well">
						<h3 class="m-t-lg">Fecha de llegada</h3>

						<div class="row diff-wrapper">
							<div class="col-md-6">
								<h4>Información</h4>
								<div class="original">
								<?php
                                    require('../Conect/conecviatik.php');
                                    $rs = mysqli_query($conecviatiks, "SELECT * FROM agendadas where id_agendada='$id_agendada'");
                                    $row=mysqli_fetch_array($rs);
                                    
                                        
                                        $Escuela=$row['Escuela'];
                                        $Clave=$row['Clave'];
                                        $zonat=$row['zonat'];
                                        $TipoEscuela=$row['TipoEscuela'];
                                        $Domicilio=$row['Domicilio'];
                                        $Localidad22=$row['Localidad22'];
                                        $Municipio=$row['Municipio'];
                                        $UltimaVisita=$row['UltimaVisita'];
                                        $Semana=$row['Semana'];
                                        $Comentarios=$row['Comentarios'];
                                        
                                        echo "<p><br>
                                        <b>Nombre de la escuela: </b>".$Escuela."<br> 
                                        <b>Clave de la escuela: </b>".$Clave." <br>
                                        <b>Zona: </b>".$zonat." <br>
                                        <b>Tipo de escuela: </b>".$TipoEscuela." <br>
                                        <b>Domicilio: </b>".$Domicilio." <br>
                                        <b>Localidad: </b>".$Localidad22." <br>
                                        <b>Municipio: </b>".$Municipio." <br>
                                        <b>Ultima visita:  </b>".$UltimaVisita." <br>
                                        <b>Semana: </b>".$Semana." <br>
                                        <b>Comentarios: </b>".$Comentarios." <br>
                                        </p>";
                                    mysqli_close($conecviatiks);
                                    ?>


								</div>
							</div>
							<div class="col-md-6">
								<h4>Checador</h4>
								<div class="changed">
									<form action="" class="form-horizontal">
									<div class="form-group"><label class="col-sm-2 control-label">Fecha</label>
										<div class="col-sm-10"><input type="date" id="di" value="<?php  //echo $interval->format('%d%'); ?>" name="dia" class="form-control"></div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Hora</label>
										<div class="col-sm-10"><input type="time" id="di" value="<?php  //echo $interval->format('%d%'); ?>" name="dia" class="form-control"></div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label"></label>
										<div class="col-sm-10"><input type="submit" id="di" value="Guardar" name="dia" class=" btn btn-danger"></div>
									</div>
									</form>
								</div>
							</div>

						</div>

					</div>
					<div class="well" id="fesa">
						<h3 class="m-t-lg">Fecha de salida</h3>

						<div class="row diff-wrapper">
							<div class="col-md-6">
								<h4>Oryginal text</h4>

								<div class="original">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only centuries, but also the leap into electronic typesetting.</div>
							</div>
							<div class="col-md-6">
								<h4>Changed text</h4>

								<div class="changed">Lorem Ipsum is simply typesetting dummy text of the printing and has been the industry's typesetting. Lorem Ipsum has been the industry's standard dummy text ever the 1500s, when an printer took a galley of type and simply it to make a type. It has survived not only five centuries, but survived not also the leap into electronic typesetting.</div>
							</div>

						</div>

					</div>


				</div>
			</div>
		</div>
	</div>
</div>
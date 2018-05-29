<?php 

$id_agendada=$_GET['idagen'];
$id_usuario=$_GET['idu'];

se hace update a la base de datos con las variables GET 
se consulta el status  (sera null por defecto)

if (status == 1) {
	muestra contenido de salida
}elseif(status == 0 || status == null){
	muestra contenido de llegada
}


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
								date_default_timezone_set('America/Hermosillo');
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
									<form action="../Controlador/regllegada.php" method="POST" class="form-horizontal">
										<input type="hidden" id="di" value="<?php echo $id_agendada?>" name="ida" class="form-control">
										<input type="hidden" id="di" value="<?php echo $id_usuario?>" name="idu" class="form-control">
									<div class="form-group"><label class="col-sm-2 control-label">Fecha</label>
										<div class="col-sm-10"><input type="date" id="di" value="<?php  //echo $interval->format('%d%'); ?>" name="fechausu" class="form-control"></div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Hora</label>
										<div class="col-sm-10"><input type="time" id="di" value="<?php  //echo $interval->format('%d%'); ?>" name="horausu" class="form-control"></div>
									</div>
									<div class="form-group">
										<div class="col-sm-10"><input type="hidden" id="di" readonly value="<?php echo date('Y-m-d')?>" name="fechaser" class="form-control"></div>
									</div>
									<div class="form-group">
										<div class="col-sm-10"><input type="hidden" readonly id="di" value="<?php echo date('h:i:s A',time()); ?>" name="horaser" class="form-control"></div>
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
								<h4>Checador</h4>
								<div class="changed">
									<form action="" class="form-horizontal">
									<div class="form-group"><label class="col-sm-2 control-label">Fecha</label>
										<div class="col-sm-10"><input type="date" id="di" value="<?php  //echo $interval->format('%d%'); ?>" name="dia" class="form-control"></div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Hora</label>
										<div class="col-sm-10"><input type="time" id="di" value="<?php  //echo $interval->format('%d%'); ?>" name="dia" class="form-control"></div>
									</div>
									<div class="form-group">
										<div class="col-sm-10"><input type="hidden" id="di" readonly value="<?php echo date('Y-m-d')?>" name="dia" class="form-control"></div>
									</div>
									<div class="form-group">
										<div class="col-sm-10"><input type="hidden" readonly id="di" value="<?php echo date('h:i:s A',time()); ?>" name="dia" class="form-control"></div>
									</div>
									
								</div>
							</div>
							<div class="col-md-6">
								<h4>Tipo de servicio</h4>
										<div class="i-checks"><label> <input type="checkbox" value=""> <i></i> Soporte </label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="" > <i></i> Mantenimiento </label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> Aula de medios </label></div>
									<br>
									<div class="form-group"><label class="col-sm-2 control-label">Observaciones</label>
										<div class="col-sm-12"><textarea class="form-control" name="observaciones" id="" cols="30" rows="5"></textarea></div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label"></label>
										<div class="col-sm-10"><input type="submit" id="di" value="Guardar" name="dia" class=" btn btn-danger"></div>
									</div>
									</form>
							</div>

						</div>

					</div>


				</div>
			</div>
		</div>
	</div>
</div>
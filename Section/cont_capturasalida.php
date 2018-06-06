<?php 

$id_agendada=$_GET['idagen'];
$id_usuario=$_GET['idu'];

/*se hace update a la base de datos con las variables GET 
se consulta el status  (sera null por defecto)

if (status == 1) {
	muestra contenido de salida
}elseif(status == 0 || status == null){
	muestra contenido de llegada
}
*/

?>

<div class="wrapper wrapper-content  animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Captura de visita</h5>
				</div>

				<div class="ibox-content">
					
					<div class="well" id="fesa">
						<h3 class="m-t-lg">Fecha de salida</h3>

						<div class="row diff-wrapper">
							<div class="col-md-6">
								<h4>Checador</h4>
								<div class="changed">
									<form action="../Controlador/regsalida.php" method="POST" class="form-horizontal">
										<input type="hidden" id="di" value="<?php echo $id_agendada?>" name="ida" class="form-control">
										<input type="hidden" id="di" value="<?php echo $id_usuario?>" name="idu" class="form-control">
									<div class="form-group"><label class="col-sm-2 control-label">Fecha</label>
										<div class="col-sm-10"><input type="date" required id="di" value="<?php  //echo $interval->format('%d%'); ?>" name="fechausu2" class="form-control"></div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Hora</label>
										<div class="col-sm-10"><input type="time" required id="di" value="<?php  //echo $interval->format('%d%'); ?>" name="horausu2" class="form-control"></div>
									</div>
									<div class="form-group">
										<div class="col-sm-10"><input type="hidden" required id="di" readonly value="<?php echo date('Y-m-d')?>" name="fechaser2" class="form-control"></div>
									</div>
									<div class="form-group">
										<div class="col-sm-10"><input type="hidden" required readonly id="di" value="<?php echo date('h:i:s A',time()); ?>" name="horaser2" class="form-control"></div>
									</div>
									
								</div>
							</div>
							<div class="col-md-6">
								<h4>Tipo de servicio</h4>
										<div class="i-checks"><label> <input type="checkbox" name="Soporte" value="Soporte"> <i></i> Soporte </label></div>
                                        <div class="i-checks"><label> <input type="checkbox" name="Mantenimiento" value="Mantenimiento"> <i></i> Mantenimiento </label></div>
                                        <div class="i-checks"><label> <input type="checkbox" name="Aula_de_medios" value="Aula_de_medios"> <i></i> Aula de medios </label></div>
									<br><label class="col-sm-2 control-label">Observaciones</label><br>
									<div class="form-group">
										<div class="col-sm-12"><textarea class="form-control" maxlength="200" required name="observaciones" id="" cols="30" rows="5"></textarea></div>
									</div><br><br>
									<div class="form-group"><label class="col-sm-2 control-label"></label>
										<div class="col-sm-12"><input type="submit" id="di" value="Guardar" name="dia" class=" btn btn-danger"></div>
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
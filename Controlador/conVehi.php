<?php 

$carrod = $_GET['_num1'];

	if (!empty($carrod)) {
		# code...
		busqar($carrod);
	}

	function busqar($carrod){
		//require('../Conect/conecviatik.php');
		$con= mysql_connect('localhost','root','');
		mysql_select_db('rutas',$con);
		$sql = mysql_query("SELECT num_vehiculo,placas,rendimiento from vehiculos where num_vehiculo='".$carrod."'",$con);
		$carros = array();
		$contar = mysql_num_rows($sql);
		if ($contar == 0) {
			# code...
			$carros[] = array('nuvehiculo'=> 'y', 'plavehiculo'=> 'y', 'rendvehiculo'=> 'y');
		}else{
			while ($row = mysql_fetch_row($sql)) {
				# code...
				$num_vehiculo = $row[0];
				$placas = $row[1];
				$rendimiento = $row[2];

				$carros[] = array('nuvehiculo'=> $num_vehiculo, 'plavehiculo'=> $placas, 'rendvehiculo'=> $rendimiento);
			}
		}
		$json_string = json_encode($carros);
		echo $json_string;

	}

?>
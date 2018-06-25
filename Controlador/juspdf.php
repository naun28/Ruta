<?php 
require '../Conect/conecviatik.php';
require '../Controlador/fpdf181/fpdf.php';
$empleado=isset($_POST['empleado']) ? $_POST['empleado'] : $_POST['empleado'];;
$fecha=$_POST['fi'];
$fecha2=$_POST['ff'];
$obser=$_POST['obser'];
$fecha; //2008-10-08 
//en este caso el 2 seria nuestro dato 0. 
$mes = substr($fecha, 0, 2); 
$dia = substr($fecha, 3, 2); 
$anio = substr($fecha, 6);  

$mes2 = substr($fecha2, 0, 2); 
$dia2 = substr($fecha2, 3, 2); 
$anio2 = substr($fecha2, 6); 

$nombrecompleto=$empleado;

/*if (isset($empleado)) {
	echo "<h1>El sistema no pudo generar el justificante</h1>";
}else{}
      
$fecha = $fi; 
list($anio, $mes, $dia) = explode("/",$fecha); */
if ($mes=='01') {
	$mesletra='Enero';
}elseif ($mes=='02') {
	$mesletra='Febrero';
}elseif ($mes=='03') {
	$mesletra='Marzo';
}elseif ($mes=='04') {
	$mesletra='Abril';
}elseif ($mes=='05') {
	$mesletra='Mayo';
}elseif ($mes=='06') {
	$mesletra='Junio';
}elseif ($mes=='07') {
	$mesletra='Julio';
}elseif ($mes=='08') {
	$mesletra='Agosto';
}elseif ($mes=='09') {
	$mesletra='Septiembre';
}elseif ($mes=='10') {
	$mesletra='Octubre';
}elseif ($mes=='11') {
	$mesletra='Noviembre';
}elseif ($mes=='12') {
	$mesletra='Diciembre';
}

/*$fecha2 = $ff; 
list($anio2, $mes2, $dia2) = explode("/",$fecha2); */
if ($mes2==='01') {
	$mesletra2='Enero';
}elseif ($mes2==='02') {
	$mesletra2='Febrero';
}elseif ($mes2==='03') {
	$mesletra2='Marzo';
}elseif ($mes2==='04') {
	$mesletra2='Abril';
}elseif ($mes2==='05') {
	$mesletra2='Mayo';
}elseif ($mes2==='06') {
	$mesletra2='Junio';
}elseif ($mes2==='07') {
	$mesletra2='Julio';
}elseif ($mes2==='08') {
	$mesletra2='Agosto';
}elseif ($mes2==='09') {
	$mesletra2='Septiembre';
}elseif ($mes2==='10') {
	$mesletra2='Octubre';
}elseif ($mes2==='11') {
	$mesletra2='Noviembre';
}elseif ($mes2==='12') {
	$mesletra2='Diciembre';
}

date_default_timezone_set('America/Hermosillo');

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../Include/img/log.png' , 15 ,10, 50 , 20,'PNG');
$pdf->Cell(0, 20, '', 1);
$pdf->Cell(0, 10, '  FORMATO DE JUSTIFICACION DE INASISTENCIAS ', 0,1,'R');
$pdf->Cell(0, 1, '  CONTROL DE ASISTENCIAS ', 0,1,'R');
$pdf->Cell(0, 8, '  DE LA ADMINISTRACIÓN CENTRAL ', 0,1,'R');
$pdf->SetFont('Arial', '', 9);

//$pdf->Cell(50, 10, ''.date('l jS \of F Y h:i:s A').'', 0);




$pdf->Cell(0, 40, '  Lugar y Fecha: Hermosillo, Sonora '.$dia.' de '.$mesletra.' de '.$anio.' ', 0,1,'L');
$pdf->Cell(0,-30, '  Nombre: '.$nombrecompleto.'', 0,1,'L');
$pdf->Cell(0, 40, '  Adscripcion: Aulas de medios', 0,1,'L');
$pdf->Cell(0,-40, '  No. De Credencial: [4584]', 0,1,'R');
$pdf->Cell(0, 30, '  Tel/Ext: 2050', 0,1,'R');
$pdf->Cell(0, 20, '  Seleccionar el motivo del justificante corresponda.', 0,1,'L');
$pdf->Cell(0, 20, '  (  ) Vacaciones', 0,1,'L');
$pdf->Cell(0,-10, '  (  ) Horas por tiempo extra y8o compensacion de dias', 0,1,'L');
$pdf->Cell(0,-10, '  (X) Comisión fuera del edificio', 0,1,'L');
$pdf->Cell(0, 40, '  (  ) Consulta médica', 0,1,'L');
$pdf->Cell(0,-30, '  (  ) Comisión de trabajo fuera de la ciudad', 0,1,'L');
$pdf->Cell(0,-20, '  (  ) Asuntos personales', 0,1,'L');
$pdf->Cell(0, 80, '  (  ) Permiso económico', 0,1,'L');
$pdf->Cell(0,-70, '  (  ) Incapacidad médica', 0,1,'L');
$pdf->Cell(0, 80, '  (  ) Incapacidad por gravidez', 0,1,'L');
$pdf->Cell(0,-70, '  (  ) Lic. sin goce de sueldo', 0,1,'L');

$pdf->Cell(200,-22, '  (  ) Cambio de horario', 0,1,'C');
$pdf->Cell(202, 32, '  (  ) Cuidados maternos', 0,1,'C');
$pdf->Cell(186, -22, '  (  ) Eventos', 0,1,'C');
$pdf->Cell(192, 32, '  (  ) Matrimonios', 0,1,'C');
$pdf->Cell(189, -22, '  (  ) Defunción', 0,1,'C');
$pdf->Cell(211, 32, '  (  ) Asuntos familiares gravez', 0,1,'C');
$pdf->Cell(200, -22, '  (  ) Comisión sindical', 0,1,'C');
$pdf->Cell(199, 32, '  (  ) Lic. prejubilatoria', 0,1,'C');
$pdf->Cell(213, -22, '  (  ) Personal de nuevo ingreso', 0,1,'C');
$pdf->Cell(206, 32, '  (  ) Permiso por lactancia', 0,1,'C');

$pdf->Cell(0, 10, '  Efectos: Del dia '.$dia.' de '.$mesletra.' de '.$anio.'  al '.$dia2.' de '.$mesletra2.' de '.$anio2.' ', 0,1,'L');
$pdf->Cell(0, 10, '  Documentación soporte: Si (  ) No (  )', 0,1,'L');
$pdf->Cell(0, 10, '  Observaciones: '.$obser.'', 0,1,'L');
$pdf->SetFont('Arial', 'U', 11);
$pdf->Cell(0, 40, ''.$nombrecompleto.'', 0,1,'C');
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, -30, '  Firma del interesado', 0,1,'C');

$pdf->Ln(18);

$pdf->SetFont('Arial', '', 10);

$pdf->Cell(0, 40, '', 1);
$pdf->SetFont('Arial', 'U', 11);
$pdf->Cell(-300, 40, '_______________________________', 0,1,'C');
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(80, -30, '  ING. JESUS MA. SABORI VALENZUELA', 0,1,'C');
$pdf->Cell(80, 35, '  Titular de área', 0,1,'C');

$pdf->SetFont('Arial', 'U', 11);
$pdf->Cell(0, -51, '_______________________________', 0,1,'R');
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(185, 60, '  CARLOS VALENTE GUTIERREZ FRAGOSA', 0,1,'R');
$pdf->Cell(185, -55, '  Director general ó Persona autorizada', 0,1,'R');

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(185, 70, '  8-DRH-P10-F02/REV.02', 0,1,'R');













$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);

$pdf->Output();
?>
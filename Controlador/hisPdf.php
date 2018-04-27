<?php 
	require '../Conect/conecviatik.php';
	require '../Controlador/fpdf181/fpdf.php';


date_default_timezone_set('America/Hermosillo');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../Include/img/log.png' , 10 ,8, 50 , 20,'PNG');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(113, 10, '   ', 0);// titulo del archivo
$pdf->SetFont('Arial', '', 9);

$pdf->Cell(50, 10, ''.date('l jS \of F Y h:i:s A').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'Detalles de los viaticos', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);

//CONSULTA
 $productos = mysqli_query($conecviatiks, "SELECT * FROM viatiks ");
//$productos = mysql_query("SELECT * FROM ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($row = mysqli_fetch_array($productos)){
	$pdf->Cell(50, 4, 'Lider de brigada', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['liderbrig']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Destino(s)', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['lugares']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Fecha de salida', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['fechaini']        , 0,1);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Fecha de llegada', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['fechafin']        , 0 );

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Brigadista acompañante', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['brigacompanante']        , 0,1);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Vehiculo', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['vehiculo']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Placas', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['placas']        , 0,1);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Rendimiento', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['rendimiento']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Días', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['dias']        , 0,1);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Escuelas', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['escuelasvisit']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Recorrido(km)', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['recorrido']        , 0,1);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Excedente(km)', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['excedente']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Precio gasolina/L', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['prelitrogas']        , 0,1);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Presupuesto gasolina', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['presugasolina']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Presupuesto casetas', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['presucasetas']        , 0,1);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Viaticos del lider', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['viaticoslider']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Viaticos acompañante', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['viaticosbrig']        , 0,1);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Total real', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['totalreal']        , 0);

	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(50, 4, 'Total', 0);
	$pdf->SetFont('Arial','', 8);
	$pdf->Cell(50, 4,$row['totalchilo']        , 0,1);

	$pdf->SetFont('Arial','B', 8);

	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);

$pdf->Output();
?>
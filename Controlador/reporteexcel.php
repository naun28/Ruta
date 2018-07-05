<?php
    
	require('../Conect/conecviatik.php');
	$semana=$_POST['semana'];
	$consulta = "SELECT *  FROM viatiks where semana='$semana'";
	$resultado = $conecviatiks->query($consulta);
	if($resultado->num_rows > 0 ){
						date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once 'lib/PHPExcel/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("Secretaria de Educacion y Cultura") //Autor
							 ->setLastModifiedBy("Secretaria de Educacion y Cultura") //Ultimo usuario que lo modificó
							 ->setTitle("Viaticos_Semana_".$semana."")
							 ->setSubject("Reporte ")
							 ->setDescription("Reporte ")
							 ->setKeywords("Reporte ")
							 ->setCategory("Reporte ");

		$tituloReporte = "Relación de viaticos de la semana";
		$titulosColumnas = array('Lider de brigada', 'Destino(s)', 'Fecha de salida', 'Fecha de llegada','Semana','Brigadista acompañante','Vehiculo','Placas','Rendimiento','Dias','Escuelas','Recorrido(km)','Excedente(km)','Presupuesto gasolina','Presupuesto casetas','Viaticos del lider','Viaticos acompañante','Total real','Total');
		
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:S1');
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A3',  $titulosColumnas[0])
		            ->setCellValue('B3',  $titulosColumnas[1])
        		    ->setCellValue('C3',  $titulosColumnas[2])
            		->setCellValue('D3',  $titulosColumnas[3])
            		->setCellValue('E3',  $titulosColumnas[4])
		            ->setCellValue('F3',  $titulosColumnas[5])
        		    ->setCellValue('G3',  $titulosColumnas[6])
            		->setCellValue('H3',  $titulosColumnas[7])
            		->setCellValue('I3',  $titulosColumnas[8])
		            ->setCellValue('J3',  $titulosColumnas[9])
        		    ->setCellValue('K3',  $titulosColumnas[10])
            		->setCellValue('L3',  $titulosColumnas[11])
            		->setCellValue('M3',  $titulosColumnas[12])
		            ->setCellValue('N3',  $titulosColumnas[13])
        		    ->setCellValue('O3',  $titulosColumnas[14])
            		->setCellValue('P3',  $titulosColumnas[15])
            		->setCellValue('Q3',  $titulosColumnas[16])
		            ->setCellValue('R3',  $titulosColumnas[17])
        		    ->setCellValue('S3',  $titulosColumnas[18]);
		
		//Se agregan los datos de los alumnos
		$i = 4;
		while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValue('A'.$i,  $fila['liderbrig'])
		            ->setCellValue('B'.$i,  $fila['lugares'])
        		    ->setCellValue('C'.$i,  $fila['fechaini'])
            		->setCellValue('D'.$i,  $fila['fechafin'])
            		->setCellValue('E'.$i,  $fila['semana'])
		            ->setCellValue('F'.$i,  $fila['brigacompanante'])
        		    ->setCellValue('G'.$i,  $fila['vehiculo'])
            		->setCellValue('H'.$i,  $fila['placas'])
            		->setCellValue('I'.$i,  $fila['rendimiento'])
		            ->setCellValue('J'.$i,  $fila['dias'])
        		    ->setCellValue('K'.$i,  $fila['escuelasvisit'])
            		->setCellValue('L'.$i,  $fila['recorrido'])
            		->setCellValue('M'.$i,  $fila['excedente'])
		            ->setCellValue('N'.$i,  $fila['presugasolina'])
        		    ->setCellValue('O'.$i,  $fila['presucasetas'])
            		->setCellValue('P'.$i,  $fila['viaticoslider'])
            		->setCellValue('Q'.$i,  $fila['viaticosbrig'])
		            ->setCellValue('R'.$i,  $fila['totalreal'])
        		    ->setCellValue('S'.$i,  $fila['totalchilo']);
					$i++;
		}
		
		$estiloTituloReporte = array(
        	'font' => array(
	        	'name'      => 'Verdana',
    	        'bold'      => true,
        	    'italic'    => false,
                'strike'    => false,
               	'size' =>16,
	            	'color'     => array(
    	            	'rgb' => 'FFFFFF'
        	       	)
            ),
	        'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('argb' => 'FF220835')
			),
            'borders' => array(
               	'allborders' => array(
                	'style' => PHPExcel_Style_Border::BORDER_NONE                    
               	)
            ), 
            'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => TRUE
    		)
        );

		$estiloTituloColumnas = array(
            'font' => array(
                'name'      => 'Arial',
                'bold'      => true,                          
                'color'     => array(
                    'rgb' => 'FFFFFF'
                )
            ),
            'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
				'rotation'   => 90,
        		'startcolor' => array(
            		'rgb' => 'c47cf2'
        		),
        		'endcolor'   => array(
            		'argb' => 'FF431a5d'
        		)
			),
            'borders' => array(
            	'top'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                ),
                'bottom'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                )
            ),
			'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'wrap'          => TRUE
    		));
			
		$estiloInformacion = new PHPExcel_Style();
		$estiloInformacion->applyFromArray(
			array(
           		'font' => array(
               	'name'      => 'Arial',               
               	'color'     => array(
                   	'rgb' => '000000'
               	)
           	),
           	'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('argb' => 'FFd9b7f4')
			),
           	'borders' => array(
               	'left'     => array(
                   	'style' => PHPExcel_Style_Border::BORDER_THIN ,
	                'color' => array(
    	            	'rgb' => '3a2a47'
                   	)
               	)             
           	)
        ));
		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:S1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A3:S3')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:S".($i-1));
				
		for($i = 'A'; $i <= 'S'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Viaticos');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Reporteviaticos.xls"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print_r('No hay resultados para mostrar');
	}
?>
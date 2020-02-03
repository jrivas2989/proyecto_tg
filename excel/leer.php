<?php
	
	require ('../Classes/PHPExcel/IOFactory.php');
	require 'conexion.php';
	
	$nombreArchivo = 'estadisticas.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	echo '<table border=1><tr><td>mes</td><td>Operador</td><td>Total</td><td>Seguimiento</td><td>Solucionado</td></tr>';
	
	for($i = 3; $i <= $numRows; $i++){
		
		$mes = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$Operador = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$Total = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$Seguimiento = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$Solucionado = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		//$Solucionado = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		
		echo '<tr>';
		echo '<td>'.$mes.'</td>';
		echo '<td>'.$Operador.'</td>';
		echo '<td>'.$Total.'</td>';
		echo '<td>'.$Seguimiento.'</td>';
		echo '<td>'.$Solucionado.'</td>';
	    echo '</tr>';
		
		$sql = "INSERT INTO idoper (mes, total, seguimiento,solucionado,oper,solutotal,seguitotal,porctotal) VALUE('$mes','$total','$seguimiento',$solucionado',$oper',$solutotal',$seguitotal',$porctotal')";
		$result = $mysqli->query($sql);
		}
	    echo '</table>';
	
?>
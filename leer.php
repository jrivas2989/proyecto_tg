<?php
	
	include('./excel/Classes/PHPExcel/IOFactory.php');
	require './config/conexion.php';
	
	$nombreArchivo = './excel/estadisticas.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	echo '<table border=1><tr><td>N°</td><td>mes</td><td>Operador</td><td>Total</td><td>Seguimiento</td><td>Solucionado</td></tr>';

	$numRows = 5;// este numero lo esta tomando de todas, revisa eso, o filtra lo que trae y
	//para el ciclo for de abajo...
	
	for($i = 1; $i <= $numRows; $i++){
		
		$mes = $objPHPExcel->getActiveSheet()->getCell('A1')->getCalculatedValue();
		$operador = $objPHPExcel->getActiveSheet()->getCell('A'.($i+2))->getCalculatedValue();
		$total = (int)$objPHPExcel->getActiveSheet()->getCell('B'.($i+2))->getCalculatedValue();
		$seguimiento = (int)$objPHPExcel->getActiveSheet()->getCell('C'.($i+2))->getCalculatedValue();
		$solucionado = (int)$objPHPExcel->getActiveSheet()->getCell('D'.($i+2))->getCalculatedValue();
		//$Solucionado = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$mes.'</td>';
		echo '<td>'.$operador.'</td>';
		echo '<td>'.$total.'</td>';
		echo '<td>'.$seguimiento.'</td>';
		echo '<td>'.$solucionado.'</td>';
		echo '</tr>';
		
		$test = "test";
		
		$sql = "INSERT INTO idoper (mes, total, seguimiento,solucionado,oper,solutotal,seguitotal,porctotal) VALUES('$mes','$total','$seguimiento','$solucionado','$operador','$total','$total','$test')";

		//INSERT INTO `idoper` (`mes`, `total`, `seguimiento`, `solucionado`, `oper`, `solutotal`, `seguitotal`, `porctotal`) VALUES ('Noviembre', '1', '2', '3', 'jose', '5', '2', 'test');
		//$result = $mysqli->query($sql);

		if (mysqli_connect_errno()) {
			printf("Conexión fallida: %s\n", mysqli_connect_error());
			exit();
		}else{
			// printf("Bien");
		}

		if ($result = mysqli_query($link, $sql)) {
			printf("Insert Exitoso");
			/* cerrar el resulset */
			mysqli_free_result($result);
		}else{
			printf("Insert fallido");
		}
	}
	echo '</table>';
	
?>
<?php 
	$mes = date('M');
	switch ($mes) {
		case 'Jan':
			$msg = "Invierno";
			break;
		case 'Mar':
			$msg = "Primavera";
		case 'Jun':
		case 'Jul':
		case 'Aug':
		case 'Sep':
			$msg = "Verano";
		default:
			$msg ="Estacion desconocida";
			break;
	}
 ?>

 <p>La estacion actual es <?php print $msg; ?></p>
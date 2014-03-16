
<?php
	printf("Bienvenido %s  
			tu género es : %s Tus estudios son %s
			tus gustos son",$_POST['dato'],
			$_POST['gen'],$_POST['estudios']
			);
	foreach ($_POST['gustos'] as $value) {
		print $value." ";
	}
 ?>
 
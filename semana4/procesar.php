
	<?php 
	/*Ejemplo de captura de datos*/

	////////////////////////////////////////////////////
	//Para capturar datos se hace uso de los arreglos //
	//$_GET ó $_POST los cuales son proporcionados por//
	//PHP los cales por medio de los indices permite  //
	// El acceso a cada uno de los datos, los indices //
	//son creados a partir del nombre de cada control //
	// del formulario                                 //
	////////////////////////////////////////////////////
	
	printf("Bienvenido %s tu edad es de : %s 
			tu género es : %s Tus estudios son %s
			tus gustos son %s, has dejado el siguiente
			comentario %s ",$_POST['dato'],
			$_POST['dato2'],$_POST['gen'],$_POST['grado'],
			$_POST['gustos'],$_POST['comentario']);

 ?>


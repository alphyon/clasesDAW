<p>foreach con arreglo de una dimensión</p>
<?php 

	$arreglo = array('nombre'=>'Juan',
					 'apellido'=>'Perez',
					 'genero'=>'m');

	foreach ($arreglo as $dato) {
		print $dato."<br>";
	}
 ?>
 <p>foreach con arreglo de multidimensión</p>
<?php 

	$comidas = array('desayuno'=>array('Cereal', 'Tostadas'),
					 'almuerzo'=>array('Sopa','Paella'),
					 'Cena'=>array('Pizza', 'Papas Fritas'));

	foreach ($comidas as $dato=>$datos) {
		   print '<br><b>Menú para el '.$dato.'</b>';
		   print '<hr>';
		foreach ($datos as $plato) {
			
			print $plato.'<br>';
		}
	}
 ?>
<?php
//declarando el arrego e imprimiendo un valor; 
	$arreglo = array('nombre'=>'Juan',
					 'apellido'=>'Perez',
					 'genero'=>'m');
	print $arreglo['apellido']."<br>";
	//print_r imprime la estructura de un elemento
	print "<pre>";
	print_r($arreglo); 
	print"</pre>";
	//agregamos un valor al arreglo.
	$arreglo['edad']=49;
	//revisamos como queda el array
	print "<pre>";
	print_r($arreglo); 
	print"</pre>";
	$arreglo['hobbies']=array('leer','videojuegos','golf');
	print "<pre>";
	print_r($arreglo); 
	print"</pre>";
	print $arreglo[5]."<br>";
 ?>
<?php
include './clases/Coneccion.php';
include './clases/Alumno.php';
include './clases/AlumnoControlador.php';
$con = new Coneccion();
$alumnoA = new AlumnoControlador();



if ($con->conectar()){
    
    if(isset($_REQUEST['bot'])){
    $alumnoA->setId('NULL');
    $alumnoA->setNombre($_REQUEST['nombre']);
    $alumnoA->setApellido($_REQUEST['apellido']);
    $alumnoA->setCarnet($_REQUEST['carnet']);
    $alumnoA->setDir($_REQUEST['dir']);
    $alumnoA->setFechaNac($_REQUEST['fecha_nac']);
    $alumnoA->setSeccion($_REQUEST['seccion']);
    $datosObj=array($alumnoA->getId(),
                    $alumnoA->getNombre(),
                    $alumnoA->getApellido(),
                    $alumnoA->getFechaNac(),
                    $alumnoA->getDir(),
                    $alumnoA->getCarnet());
    print $alumnoA->guardarDatos($datosObj);
}else{
    print 'No se ha enviado datos ';
    
}
    
}  else {
    print $con->conectar();
}



    

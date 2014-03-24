<?php
include './clases/Coneccion.php';
include './clases/Alumno.php';
include './clases/AlumnoControlador.php';
$con = new Coneccion();
$alumnoD = new Alumno();
$alumnoA = new AlumnoControlador();


if ($con->conectar()){
    
    if(isset($_REQUEST['bot'])){
    $alumnoD->setId('NULL');
    $alumnoD->setNombre($_REQUEST['nombre']);
    $alumnoD->setApellido($_REQUEST['apellido']);
    $alumnoD->setCarnet($_REQUEST['carnet']);
    $alumnoD->setDir($_REQUEST['dir']);
    $alumnoD->setFechaNac($_REQUEST['fecha_nac']);
    $alumnoD->setSeccion($_REQUEST['seccion']);
    $datosObj=array($alumnoD->getId(),
                    $alumnoD->getNombre(),
                    $alumnoD->getApellido(),
                    $alumnoD->getFechaNac(),
                    $alumnoD->getDir(),
                    $alumnoD->getCarnet());
    print $alumnoA->guardarDatos($datosObj);
}else{
    print 'No se ha enviado datos ';
    
}
    
}  else {
    print $con->conectar();
}



    

<?php
class AlumnoControlador extends Alumno{
   
    public function guardarDatos($objAlumno) {
        $variableSql = "INSERT INTO alumnos.alumno ";
        $variableSql .= "(id,nombre,apellido,fecha_nacimiento,";
        $variableSql .= "direccion,carnet) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."',";
        $variableSql.="'".$objAlumno[3]."',";
        $variableSql.="'".$objAlumno[4]."',";
        $variableSql.="'".$objAlumno[5]."');";
        
        
        $bandera = mysql_query($variableSql);
        
        if($bandera){
            $msg =" Datos almacenados";
        }else{
            $msg = "Error al almacenar los Datos # de error: ";
            $msg .= mysql_errno();
            $msg .="<br>";
            $msg .=mysql_error();
        }
        
        return $msg;
    }
   
}

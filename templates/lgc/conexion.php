<?php
class conexion(){
    public function getConexion(){
         $conexion = mysql_connect('sebastinos.ipagemys ql.com', 'svzosorio', 'Tansoloyo1'); 
        if(!$conexion){
            die("<script language='javascript'>alert('No se pudo establecer la conexion con la base de datos');</script>");   
            return null;
        }
        else{ 
            return $conexion;
        }
    }
}
?>
<?php
class conexion(){
    public function getConexion(){
         $conexion = mysql_connect('sebastinos.ipagemys ql.com', 'svzosorio', 'Tansoloyo1'); 
        if(!$conexion){
            die("<script language='javascript'>alert('No se pudo establecer la conexion');</script>");   
            return null;
        }
        else{ 
            return $conexion;
        }
    }
}
?>
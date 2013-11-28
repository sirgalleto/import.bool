<?php
require "cliente.php"

class transaccion extends cliente(){
    private $nombreUsuario;
    
    public function getnombreUsuario(){
		return $this->nombreUsuario;
	}

	public function setnombreUsuario($nombreUsuario){
		$this->nombreUsuario = $nombreUsuario;
	}
    
    public function crear(){
    }
    
    public function obtener(){
    }
    
    public function actualizar(){
    }
    
    public function borrar(){
    }
}
?>
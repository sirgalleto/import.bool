<?php
class notificacion(){
    private $nombreUsuario;
    private $administrador;
    private $usuario;
    
    public function getnombreUsuario(){
		return $this->nombreUsuario;
	}

	public function setnombreUsuario($nombreUsuario){
		$this->nombreUsuario = $nombreUsuario;
	}

	public function getAdministrador(){
		return $this->administrador;
	}

	public function setAdministrador($administrador){
		$this->administrador = $administrador;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
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
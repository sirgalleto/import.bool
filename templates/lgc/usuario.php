<?php
class usuario(){
    private $nombreUsuario;
    private $nombres;
    private $apellidos;
    private $contraseña;
    private $correoElectronico;
    
    public function getnombreUsuario(){
		return $this->nombreUsuario;
	}

	public function setnombreUsuario($nombreUsuario){
		$this->nombreUsuario = $nombreUsuario;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function getContraseña(){
		return $this->contraseña;
	}

	public function setContraseña($contraseña){
		$this->contraseña = $contraseña;
	}

	public function getCorreoElectronico(){
		return $this->correoElectronico;
	}

	public function setCorreoElectronico($correoElectronico){
		$this->correoElectronico = $correoElectronico;
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

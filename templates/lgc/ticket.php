<?php
class ticket(){
    private $nombreUsuario;
    private $fechaMensaje;
    private $fechaRespuesta;
    private $cliente;
    private $administrador;
    
    public function getnombreUsuario(){
		return $this->nombreUsuario;
	}

	public function setnombreUsuario($nombreUsuario){
		$this->nombreUsuario = $nombreUsuario;
	}

	public function getFechaMensaje(){
		return $this->fechaMensaje;
	}

	public function setFechaMensaje($fechaMensaje){
		$this->fechaMensaje = $fechaMensaje;
	}

	public function getFechaRespuesta(){
		return $this->fechaRespuesta;
	}

	public function setFechaRespuesta($fechaRespuesta){
		$this->fechaRespuesta = $fechaRespuesta;
	}

	public function getCliente(){
		return $this->cliente;
	}

	public function setCliente($cliente){
		$this->cliente = $cliente;
	}

	public function getAdministrador(){
		return $this->administrador;
	}

	public function setAdministrador($administrador){
		$this->administrador = $administrador;
	}
    
    public function crear(){
    }
    
    public function obtener(){
    }
    
    public function actualizar(){
    }
    
    public function borrar(){
    }
?>
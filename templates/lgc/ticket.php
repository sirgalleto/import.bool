<?php
class ticket(){
    private $id;
    private $asunto;
    private $estado;
    private $fechaInicio;
    private $fechaFinal;
    private $cliente_nombreUsuario;
    private $administrador_nombreUsuario;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getAsunto(){
		return $this->asunto;
	}

	public function setAsunto($asunto){
		$this->asunto = $asunto;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getFechaInicio(){
		return $this->fechaInicio;
	}

	public function setFechaInicio($fechaInicio){
		$this->fechaInicio = $fechaInicio;
	}

	public function getFechaFinal(){
		return $this->fechaFinal;
	}

	public function setFechaFinal($fechaFinal){
		$this->fechaFinal = $fechaFinal;
	}

	public function getClienteNombreUsuario(){
		return $this->clienteNombreUsuario;
	}

	public function setClienteNombreUsuario($clienteNombreUsuario){
		$this->clienteNombreUsuario = $clienteNombreUsuario;
	}

	public function getAdministradorNombreUsuario(){
		return $this->administradorNombreUsuario;
	}

	public function setAdministradorNombreUsuario($administradorNombreUsuario){
		$this->administradorNombreUsuario = $administradorNombreUsuario;
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
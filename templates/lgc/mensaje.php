<?php
class mensaje(){
    private $id;
    private $fechaEnvio;
    private $estado;
    private $mensaje;
    private $respuesta;
    private $ticket_id;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getFechaEnvio(){
		return $this->fechaEnvio;
	}

	public function setFechaEnvio($fechaEnvio){
		$this->fechaEnvio = $fechaEnvio;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getMensaje(){
		return $this->mensaje;
	}

	public function setMensaje($mensaje){
		$this->mensaje = $mensaje;
	}

	public function getRespuesta(){
		return $this->respuesta;
	}

	public function setRespuesta($respuesta){
		$this->respuesta = $respuesta;
	}

	public function getTicketId(){
		return $this->ticketId;
	}

	public function setTicketId($ticketId){
		$this->ticketId = $ticketId;
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
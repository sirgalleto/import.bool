<?php
class notificacion(){
    private $id;
    private $fecha;
    private $mensaje;
    private $estado;
    private $servicio_id;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getMensaje(){
		return $this->mensaje;
	}

	public function setMensaje($mensaje){
		$this->mensaje = $mensaje;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getServicioId(){
		return $this->servicioId;
	}

	public function setServicioId($servicioId){
		$this->servicioId = $servicioId;
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
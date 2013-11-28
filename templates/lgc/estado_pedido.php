<?php
class estado_pedido(){
    private $id;
    private $estado;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
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
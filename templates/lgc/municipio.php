<?php
class municipio(){
    private $id;
    private $nombre;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
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
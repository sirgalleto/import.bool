<?php
class servicio(){
    private $id;
    private $pedido;
    private $infopedido;
    private $precioArticulo;
    private $precioServicio;
    private $precioTotal;
    private $fechaPedido;
    private $fechaFinal;
    private $otraInfo;
    private $cliente_id;
    private $administrador_id;
    private $estado_pedido_id;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getPedido(){
		return $this->pedido;
	}

	public function setPedido($pedido){
		$this->pedido = $pedido;
	}

	public function getInfopedido(){
		return $this->infopedido;
	}

	public function setInfopedido($infopedido){
		$this->infopedido = $infopedido;
	}

	public function getPrecioArticulo(){
		return $this->precioArticulo;
	}

	public function setPrecioArticulo($precioArticulo){
		$this->precioArticulo = $precioArticulo;
	}

	public function getPrecioServicio(){
		return $this->precioServicio;
	}

	public function setPrecioServicio($precioServicio){
		$this->precioServicio = $precioServicio;
	}

	public function getPrecioTotal(){
		return $this->precioTotal;
	}

	public function setPrecioTotal($precioTotal){
		$this->precioTotal = $precioTotal;
	}

	public function getFechaPedido(){
		return $this->fechaPedido;
	}

	public function setFechaPedido($fechaPedido){
		$this->fechaPedido = $fechaPedido;
	}

	public function getFechaFinal(){
		return $this->fechaFinal;
	}

	public function setFechaFinal($fechaFinal){
		$this->fechaFinal = $fechaFinal;
	}

	public function getOtraInfo(){
		return $this->otraInfo;
	}

	public function setOtraInfo($otraInfo){
		$this->otraInfo = $otraInfo;
	}

	public function getClienteId(){
		return $this->clienteId;
	}

	public function setClienteId($clienteId){
		$this->clienteId = $clienteId;
	}

	public function getAdministradorId(){
		return $this->administradorId;
	}

	public function setAdministradorId($administradorId){
		$this->administradorId = $administradorId;
	}

	public function getEstadoPedidoId(){
		return $this->estadoPedidoId;
	}

	public function setEstadoPedidoId($estadoPedidoId){
		$this->estadoPedidoId = $estadoPedidoId;
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
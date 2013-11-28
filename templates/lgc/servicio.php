<?php
class servicio(){
    private $notificacion;
    private $ticket;
    private $cliente;
    private $administrador;
    private $pedido;
    private $informacionPedido;
    private $precioArticulo;
    private $precioServicio;
    private $precioTotal;
    private $fechaPedido;
    private $nombreUsuario;
    
    public function getNotificacion(){
		return $this->notificacion;
	}

	public function setNotificacion($notificacion){
		$this->notificacion = $notificacion;
	}

	public function getTicket(){
		return $this->ticket;
	}

	public function setTicket($ticket){
		$this->ticket = $ticket;
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

	public function getPedido(){
		return $this->pedido;
	}

	public function setPedido($pedido){
		$this->pedido = $pedido;
	}

	public function getInformacionPedido(){
		return $this->informacionPedido;
	}

	public function setInformacionPedido($informacionPedido){
		$this->informacionPedido = $informacionPedido;
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
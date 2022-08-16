<?php

class ControladorPedidos {

	public static function getDireccion($id_pedido) {
		$respuesta = ModeloPedidos::getDireccion($id_pedido);
		return $respuesta;
	}

	/*=============================================
	MOSTRAR Pedidos
	=============================================*/

	static public function ctrMostrarPedidos($item){
		$respuesta = ModeloPedidos::mdlMostrarPedidos($item);
		return $respuesta;
	}

	/*=============================================
	Mostrar Pedidos Por Fecha
	=============================================*/

	static public function ctrMostrarPedidosFecha($date){
		$respuesta = ModeloPedidos::mdlMostrarPedidos($date);
		return $respuesta;
	}

	/*=============================================
	MOSTRAR Producto
	=============================================*/

	static public function ctrMostrarProducto($id_producto){
		$respuesta = ModeloPedidos::mdlMostrarProducto($id_producto);
		return $respuesta;

	}



	/*=============================================
	CANCELAR EL PEDIDO
	=============================================*/

	static public function ctrCancelarPedido($idPedido){
		$respuesta = ModeloPedidos::mdlCancelarPedido($idPedido);
		return $respuesta;

	}

	/*=============================================
	CANCELAR EL PEDIDO
	=============================================*/

	static public function ctrEntregarPedido($idPedido){
		$respuesta = ModeloPedidos::mdlEntregarPedido($idPedido);
		return $respuesta;

	}



}
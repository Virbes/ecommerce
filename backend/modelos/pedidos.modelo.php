<?php

require_once "conexion.php";

class ModeloPedidos {

	public static function getDireccion($id_pedido) {
		$stmt = Conexion::conectar()->prepare("SELECT * FROM direcciones WHERE id_pedido = :id_pedido");
        $stmt -> bindParam(":id_pedido", $id_pedido, PDO::PARAM_INT);
		$stmt -> execute();

        return $stmt -> fetch();
	}

	/*=============================================
	MOSTRAR PEDIDOS
	=============================================*/

	static public function mdlMostrarPedidos($item){
        
        //$stmt = Conexion::conectar()->prepare("SELECT * FROM pedidos ORDER BY id DESC");
        $stmt = Conexion::conectar()->prepare("SELECT p.id, u.foto, u.nombre, p.productos, p.activo, p.entregado, p.total FROM usuarios u, pedidos p WHERE u.id = p.id_usuario AND entregado = :entregado");
        $stmt -> bindParam(":entregado", $item, PDO::PARAM_INT);
		$stmt -> execute();

        return $stmt -> fetchAll();
	}

	static public function mdlMostrarPedidosFecha($date){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM pedidos WHERE fecha LIKE '%$date%'");
        $stmt -> execute();

        return $stmt -> fetchAll();
	}

	/*Mostrar Producto*/
	static public function mdlMostrarProducto($id){
        $stmt = Conexion::conectar()->prepare("SELECT titulo FROM productos WHERE id = :id");
		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
        $stmt -> execute();

        return $stmt -> fetch();
	}


	/*=============================================
	CANCELAR PEDIDOS
	=============================================*/
	static public function mdlCancelarPedido($idPedido){
        // number 3 => CANCELADO!!
        $stmt = Conexion::conectar()->prepare("UPDATE pedidos SET activo = 0, entregado = 3 WHERE id = :id");
        $stmt -> bindParam(":id", $idPedido, PDO::PARAM_INT);
		$stmt -> execute();
	}

	/*=============================================
	CANCELAR PEDIDOS
	=============================================*/
	static public function mdlEntregarPedido($idPedido){
        
        $stmt = Conexion::conectar()->prepare("UPDATE pedidos SET activo = 3, entregado = 1 WHERE id = :id");
        $stmt -> bindParam(":id", $idPedido, PDO::PARAM_INT);
		$stmt -> execute();
	}

}
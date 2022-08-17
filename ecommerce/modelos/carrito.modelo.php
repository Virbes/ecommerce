<?php

require_once "conexion.php";

class ModeloCarrito {
	/*=============================================
	SET STOCK
	=============================================*/	
	public static function setStock($produtcs) {

		$prod = json_decode($produtcs['productos']);

		for ($i = 0; $i < count($prod); $i++) {
			$id = $prod[$i]->idProducto;
			$cantidad = $prod[$i]->cantidad;

			$stmt = Conexion::conectar()->prepare("UPDATE productos SET stock  = stock - $cantidad WHERE id = :id");
			$stmt->bindParam(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
		}

	}
	

	/*=============================================
	Get ID Pedido from table Pedidos
	=============================================*/	
	public static function getIdPedido() {
		$stmt = Conexion::conectar()->prepare("SELECT id FROM pedidos ORDER BY id DESC LIMIT 1");
		$stmt -> execute();

		return $stmt -> fetch();
	}

	/*=============================================
	Agregar Direccion del pedido
	=============================================*/	
	public static function AgregarDireccion($datos, $id_pedido) {
		$stmt = Conexion::conectar()->prepare("INSERT INTO direcciones (id_usuario, id_pedido, nombre_recibidor, direccion, telefono, referencia) VALUES (:id_usuario, :id_pedido, :nombre_recibidor, :direccion, :telefono, :referencia)");
		
		$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
		$stmt->bindParam(":id_pedido", $id_pedido, PDO::PARAM_INT);
		$stmt->bindParam(":nombre_recibidor", $datos['recibidor'], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos['direccion'], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
		$stmt->bindParam(":referencia", $datos['referencia'], PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();
	}

	public static function getCorreoUsuario($id_usuario) {
		$stmt = Conexion::conectar()->prepare("SELECT email FROM usuarios WHERE id = :id");
		$stmt->bindParam(":id", $id_usuario, PDO::PARAM_INT);
		$stmt -> execute();

		return $stmt -> fetch();
	}


	/*=============================================
	Agregar PEDIDO
	=============================================*/	
	public static function agregarPedido($datos) {

		$stmt = Conexion::conectar()->prepare("INSERT INTO pedidos (id_usuario, productos, activo, entregado, total) VALUES (:id_usuario, :productos, :activo, :entregado, :total)");

		$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
		$stmt->bindParam(":productos", $datos["productos"], PDO::PARAM_STR);
		$stmt->bindParam(":activo", $datos["activo"], PDO::PARAM_INT);
		$stmt->bindParam(":entregado", $datos["entregado"], PDO::PARAM_INT);
		$stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);

		if($stmt->execute()){ 
			return "ok"; 
		}else{ 
			return "error"; 
		}

	}

	/*=============================================
	Actualizar notificaciones
	=============================================*/	
	public static function actualizarNotificaciones() {

		$stmt = Conexion::conectar()->prepare("UPDATE notificaciones SET nuevosPedidos = nuevosPedidos + 1;");

		if($stmt->execute()){ 
			return "ok"; 
		}else{ 
			return "error"; 
		}

	}

	/*=============================================
	NUEVAS COMPRAS
	=============================================*/

	static public function mdlNuevasCompras($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_usuario, id_producto, metodo, email, direccion, pais, cantidad, detalle, pago) VALUES (:id_usuario, :id_producto, :metodo, :email, :direccion, :pais, :cantidad, :detalle, :pago)");

		$stmt->bindParam(":id_usuario", $datos["idUsuario"], PDO::PARAM_INT);
		$stmt->bindParam(":id_producto", $datos["idProducto"], PDO::PARAM_INT);
		$stmt->bindParam(":metodo", $datos["metodo"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
		$stmt->bindParam(":detalle", $datos["detalle"], PDO::PARAM_STR);
		$stmt->bindParam(":pago", $datos["pago"], PDO::PARAM_STR);

		if($stmt->execute()){ 

			return "ok"; 

		}else{ 

			return "error"; 

		}

	}

	/*=============================================
	VERIFICAR PRODUCTO COMPRADO
	=============================================*/

	static public function mdlVerificarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_usuario = :id_usuario AND id_producto = :id_producto");

		$stmt->bindParam(":id_usuario", $datos["idUsuario"], PDO::PARAM_INT);
		$stmt->bindParam(":id_producto", $datos["idProducto"], PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

	}

}
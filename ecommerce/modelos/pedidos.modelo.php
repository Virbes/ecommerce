<?php

require_once "conexion.php";

class ModeloPedidos {


	static public function getPedidos($id_usuario){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM pedidos WHERE id_usuario = :id_usuario");
		$stmt -> bindParam(":id_usuario", $id_usuario, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

	}

	
}
<?php

require_once "conexion.php";

class ModeloVentas{

	/*=============================================
	MOSTRAR EL TOTAL DE VENTAS
	=============================================*/	

	static public function mdlMostrarTotalVentas($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT SUM(pago) as total FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetch();
	}

	/*=============================================
	MOSTRAR VENTAS
	=============================================*/	

	static public function mdlMostrarVentas($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");
		$stmt -> execute();
		return $stmt -> fetchAll();
	}

	/*=============================================
	ACTUALIZAR ENVIO VENTA
	=============================================*/

	static public function mdlActualizarVenta($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){
			return "ok";
		}else{
			return "error";	
		}
	}

}
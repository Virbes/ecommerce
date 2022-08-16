<?php

require_once "conexion.php";

class ModeloValidaciones {

    public static function validarEliminarCategoria($id_categoria) {
        $stmt = Conexion::conectar()->prepare("SELECT id FROM subcategorias WHERE id_categoria = :id_categoria");
		
		$stmt -> bindParam(":id_categoria", $id_categoria, PDO::PARAM_INT);

		$stmt -> execute();
		return $stmt -> fetch();
    }

	public static function validarEliminarSubCategoria($id_subcategoria) {
        $stmt = Conexion::conectar()->prepare("SELECT id FROM productos WHERE id_subcategoria = :id_subcategoria");
		
		$stmt -> bindParam(":id_subcategoria", $id_subcategoria, PDO::PARAM_INT);

		$stmt -> execute();
		return $stmt -> fetch();
    }

}
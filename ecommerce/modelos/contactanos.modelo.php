<?php

require_once "conexion.php";

class ModeloContactanos {

    public static function addContact($nombre, $email, $telefono, $mensaje) {

        $stmt = Conexion::conectar()->prepare("INSERT INTO contactanos (nombre, email, telefono, mensaje) VALUES (:nombre, :email, :telefono, :mensaje)");

		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt->bindParam(":email", $email, PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);
		$stmt->bindParam(":mensaje", $mensaje, PDO::PARAM_STR);

		$stmt->execute();
    }

}
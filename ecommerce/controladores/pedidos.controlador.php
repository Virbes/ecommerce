<?php

Class ControladorPedidos {

	/*=============================================
	MOSTRAR NOTIFICACIONES
	=============================================*/

	static public function getPedidos($id_usuario){

		$respuesta = ModeloPedidos::getPedidos($id_usuario);

		return $respuesta;
	}

}
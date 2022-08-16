<?php

require_once "../controladores/cabeceras.controlador.php";
require_once "../modelos/cabeceras.modelo.php";

class AjaxCabeceras{

	/*=============================================
	EDITAR CABECERAS
	=============================================*/	
	public $ruta;

	public function ajaxEditarCabecera(){
		$valor = $this->ruta;
		$respuesta = ControladorCabeceras::getCabeceras($valor);
		echo json_encode($respuesta);
	}


}

/*=============================================
EDITAR CABECERAS
=============================================*/
if(isset($_POST["ruta"])){

	$editar = new AjaxCabeceras();
	$editar -> ruta = $_POST["ruta"];
	$editar -> ajaxEditarCabecera();

}
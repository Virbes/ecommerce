<?php

class ControladorSlide{

	public static function ctrMostrarSlide(){
		$tabla = "slide";
		$respuesta = ModeloSlide::mdlMostrarSlide($tabla);

		return $respuesta;
		
	}

}
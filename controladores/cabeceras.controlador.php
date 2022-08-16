<?php

class ControladorCabeceras{

	static public function getCabeceras($valor){
		return ModeloCabeceras::mdlMostrarCabeceras('cabeceras', 'ruta', $valor);
	}

}
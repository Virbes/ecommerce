<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";
require_once "../modelos/rutas.php";

class TablaUsuarios{

 	/*=============================================
  	MOSTRAR LA TABLA DE USUARIOS
  	=============================================*/ 

	public function mostrarTabla(){	

		$item = null;
 		$valor = null;

 		$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

 		$url = Ruta::ctrRuta();

 		if(count($usuarios) == 0){

	      $datosJson = '{ "data":[]}';

	      echo $datosJson;

	      return;

	    }

 		$datosJson = '{
		 
	 	"data": [ ';

	 	for($i = 0; $i < count($usuarios); $i++){

	 		/*=============================================
			TRAER FOTO USUARIO
			=============================================*/

			if($usuarios[$i]["foto"] != "") {

				$foto = "<img class='img-circle' src='http://localhost/admint/ecommerce/".$usuarios[$i]["foto"]."' width='60px'>";

			}else{

				$foto = "<img class='img-circle' src='vistas/img/usuarios/default/anonymous.png' width='60px'>";
			}

			/*=============================================
  			REVISAR ESTADO
  			=============================================*/

			if( $usuarios[$i]["verificacion"] == 1){

				$colorEstado = "btn-danger";
				$textoEstado = "Desactivado";
				$estadoUsuario = 0;

			}else{

				$colorEstado = "btn-success";
				$textoEstado = "Activado";
				$estadoUsuario = 1;

			}

			$estado = "<button class='btn btn-xs btnActivar ".$colorEstado."' idUsuario='". $usuarios[$i]["id"]."' estadoUsuario='".$estadoUsuario."'>".$textoEstado."</button>";

	  		


	 		/*=============================================
			DEVOLVER DATOS JSON
			=============================================*/

			$datosJson	 .= '[
				      "'.($i+1).'",
				      "'.$usuarios[$i]["nombre"].'",
				      "'.$usuarios[$i]["email"].'",
				      "'.$foto.'",
				      "'.$estado.'",
				      "'.$usuarios[$i]["fecha"].'"    
				    ],';

	 	}

	 	$datosJson = substr($datosJson, 0, -1);
		$datosJson.=  ']
		}';

		echo $datosJson;
 	}

}
$activar = new TablaUsuarios();
$activar -> mostrarTabla();




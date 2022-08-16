<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/cabeceras.controlador.php";
require_once "../modelos/cabeceras.modelo.php";

class TablaProductosInventarios{

  /*=============================================
  MOSTRAR LA TABLA DE PRODUCTOS
  =============================================*/ 

  public function mostrarTablaProductos(){	

  	$item = null;
  	$valor = null;

  	$productos = ControladorProductos::ctrMostrarProductos($item, $valor);

    if(count($productos) == 0){
      $datosJson = '{ "data":[]}';
      echo $datosJson;
      return;
    }

  	$datosJson = '{	
  			        "data":[';

	 	for($i = 0; $i < count($productos); $i++){

			/*=============================================
  			TRAER LAS CATEGORÍAS
  			=============================================*/
  			$item = "id";
			$valor = $productos[$i]["id_categoria"];

			$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

			if($categorias["categoria"] == ""){
				$categoria = "SIN CATEGORÍA";
			}else{
				$categoria = $categorias["categoria"];
			}

			/*=============================================
  			TRAER LAS SUBCATEGORÍAS
  			=============================================*/
  			$item2 = "id";
			$valor2 = $productos[$i]["id_subcategoria"];

			$subcategorias = ControladorSubCategorias::ctrMostrarSubCategorias($item2, $valor2);

			if($subcategorias[0]["subcategoria"] == ""){
				$subcategoria = "SIN SUBCATEGORÍA";
			}else{
				$subcategoria = $subcategorias[0]["subcategoria"];
			}

  			/*=============================================
  			TRAER LAS CABECERAS
  			=============================================*/

			$valor3 = $productos[$i]["ruta"];
			$cabeceras = ControladorCabeceras::getCabeceras($valor3);

			/*=============================================
  			TRAER IMAGEN PRINCIPAL
  			=============================================*/
  			$imagenPrincipal = "<img src='".$productos[$i]["portada"]."' class='img-thumbnail imgTablaPrincipal' width='100px'>";


  			/*=============================================
  			TRAER PRECIO
  			=============================================*/
  			if($productos[$i]["precio"] == 0){
  				$precio = "Gratis";
  			}else{
  				$precio = "$ ".number_format($productos[$i]["precio"],2)." MXN";
  			}


	  		/*=============================================
  			TRAER LAS ACCIONES
  			=============================================*/
			$acciones = "<div class='btn-group'><button class='btn btn-success btnAgregarInventario' data-toggle='modal' data-target='#modalAgregarInventario' idProducto='".$productos[$i]["id"]."'><i class='fa fa-plus'></i></button><button class='btn btn-warning btnQuitarInventario' data-toggle='modal' data-target='#modalQuitarInventario' idProducto='".$productos[$i]["id"]."''><i class='fa fa-minus'></i></button></div>";

			/*=============================================
  			CONSTRUIR LOS DATOS JSON
  			=============================================*/
			$datosJson .='[
					"'.($i+1).'",
					"'.$productos[$i]["codigo"].'",
					"'.$productos[$i]["titulo"].'",
					"'.$categoria.'",
					"'.$subcategoria.'",
					"'.$productos[$i]["stock"].'",
				  	"'.$imagenPrincipal.'",
		  			"'.$precio.'",
					"'.$acciones.'"
			],';
		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson .= ']

		}';

		echo $datosJson;

  }


}

/*=============================================
ACTIVAR TABLA DE PRODUCTOS
=============================================*/ 
$activarProductos = new TablaProductosInventarios();
$activarProductos -> mostrarTablaProductos();
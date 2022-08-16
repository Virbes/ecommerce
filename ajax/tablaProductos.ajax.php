<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/cabeceras.controlador.php";
require_once "../modelos/cabeceras.modelo.php";

class TablaProductos{

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
  			AGREGAR ETIQUETAS DE ESTADO
  			=============================================*/

  			if($productos[$i]["estado"] == 0){
  				$colorEstado = "btn-danger";
  				$textoEstado = "Desactivado";
  				$estadoProducto = 1;
  			}else{
  				$colorEstado = "btn-success";
  				$textoEstado = "Activado";
  				$estadoProducto = 0;
  			}

  			$estado = "<button class='btn btn-xs btnActivar ".$colorEstado."' idProducto='".$productos[$i]["id"]."' estadoProducto='".$estadoProducto."'>".$textoEstado."</button>";

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
  			TRAER DETALLES
  			=============================================*/
  			$marcaProducto = $productos[$i]["marcaProducto"];


  			/*=============================================
  			TRAER PRECIO
  			=============================================*/
  			if($productos[$i]["precio"] == 0){
  				$precio = "Gratis";
  			}else{
  				$precio = "$ ".number_format($productos[$i]["precio"],2)." MXN";
  			}

  			/*=============================================
  			TRAER ENTREGA
  			=============================================*/
  			if($productos[$i]["entrega"] == 0){
  				$entrega = "Inmediata";
  			}else{
  				$entrega = $productos[$i]["entrega"]. " días hábiles";
  			}

  			/*=============================================
  			REVISAR SI HAY OFERTAS
  			=============================================*/
			if($productos[$i]["oferta"] != 0){

				if($productos[$i]["precioOferta"] != 0){
					$tipoOferta = "PRECIO";
					$valorOferta = "$ ".number_format($productos[$i]["precioOferta"],2);
				}else{
					$tipoOferta = "DESCUENTO";
					$valorOferta = $productos[$i]["descuentoOferta"]." %";
				}	

			}else{
				$tipoOferta = "No tiene oferta";
				$valorOferta = 0;
			}

  			/*=============================================
  			TRAER IMAGEN OFERTA
  			=============================================*/
  			if($productos[$i]["imgOferta"] != ""){
	  			$imgOferta = "<img src='".$productos[$i]["imgOferta"]."' class='img-thumbnail imgTablaProductos' width='100px'>";
	  		}else{
	  			$imgOferta = "<img src='vistas/img/ofertas/default/default.jpg' class='img-thumbnail imgTablaProductos' width='100px'>";
	  		}

	  		/*=============================================
  			TRAER LAS ACCIONES
  			=============================================*/
  			//$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' imgOferta='".$productos[$i]["imgOferta"]."' rutaCabecera='".$productos[$i]["ruta"]."' imgPortada='".$cabeceras["portada"]."' imgPrincipal='".$productos[$i]["portada"]."'><i class='fa fa-times'></i></button></div>";
			$acciones = "<div class='btn-group'><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' imgOferta='".$productos[$i]["imgOferta"]."' rutaCabecera='".$productos[$i]["ruta"]."' imgPortada='".$cabeceras["portada"]."' imgPrincipal='".$productos[$i]["portada"]."'><i class='fa fa-times'></i></button></div>";


			/*=============================================
  			Boton de más información
  			=============================================*/
            $info = "<button class='btn btnInfoProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalInfoProducto' style='background: #ff6600; margin-left: 10px;'><i class='fa fa-info-circle' style='color: #fff; width: 30px;'></i></button>";
  			
			/*=============================================
  			Ruta del producto
  			=============================================*/
			$rutax = "<a href='http://ferreagna.online/".$productos[$i]['ruta']."' target='_blank'>/".$productos[$i]["ruta"]."</a>";

			/*=============================================
  			CONSTRUIR LOS DATOS JSON
  			=============================================*/
			$datosJson .='[
					"'.($i+1).'",
					"'.$productos[$i]["titulo"].'",
					"'.$categoria.'",
					"'.$subcategoria.'",
					"'.$estado.'",
					"'.$cabeceras["descripcion"].'",
				  	"'.$imagenPrincipal.'",
		  			"'.$precio.'",
				  	"'.$marcaProducto.'",
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
$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();
<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

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


			/* Trae el titulo del producto */
			$titulo = "<b style='color: #474b4e'>".$productos[$i]['titulo']."</b>";

			/* Traer las categorias */
			$valor = $productos[$i]["id_categoria"];

			$categorias = ControladorCategorias::ctrMostrarCategorias('id', $valor);

			if($categorias["categoria"] == ""){
				$categoria = "SIN CATEGORÍA";
			}else{
				$categoria = $categorias["categoria"];
			}

			/* Traer las subcategorias */
			$valor2 = $productos[$i]["id_subcategoria"];

			$subcategorias = ControladorSubCategorias::ctrMostrarSubCategorias('id', $valor2);

			if($subcategorias[0]["subcategoria"] == ""){
				$subcategoria = "SIN SUBCATEGORÍA";
			}else{
				$subcategoria = $subcategorias[0]["subcategoria"];
			}

			/* Agregar las etiquetas de estado */
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

			/* Traer imagen principal */
  			$imagenPrincipal = "<img src='".$productos[$i]["portada"]."' class='img-thumbnail imgTablaPrincipal' width='100px'>";

  			/* Traer marca del producto */
  			$marca = $productos[$i]["marcaProducto"];

  			/* Traer Precio */
  			if($productos[$i]["precio"] == 0){
  				$precio = "Gratis";
  			}else{
  				$precio = "$ ".number_format($productos[$i]["precio"],2)." MXN";
  			}

  			/* REVISAR SI HAY OFERTAS */
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
			$acciones = "<div class='btn-group'><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' imgOferta='".$productos[$i]["imgOferta"]."' rutaCabecera='".$productos[$i]["ruta"]."' imgPrincipal='".$productos[$i]["portada"]."'><i class='fa fa-times'></i></button></div>";


			/* Boton de más información */
            $info = "<button class='btn btnInfoProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalInfoProducto' style='background: #ff6600; margin-left: 10px;'><i class='fa fa-info-circle' style='color: #fff; width: 30px;'></i></button>";
  			
			/* Ruta del producto */
			// $rutax = "<a href='http://ferreagna.online/".$productos[$i]['ruta']."' target='_blank'>/".$productos[$i]["ruta"]."</a>";
			$rutax = "<p style='color:#7b241c'>/".$productos[$i]["ruta"]."</p>";

			/*=============================================
  			CONSTRUIR LOS DATOS JSON
  			=============================================*/
			$datosJson .='[
					"'.($i+1).'",
					"'.$titulo.'",
					"'.$categoria.'",
					"'.$subcategoria.'",
					"'.$rutax.'",
					"'.$estado.'",
					"'.$marca.'",
				  	"'.$imagenPrincipal.'",
		  			"'.$precio.'",
				  	"'.$productos[$i]["stock"].'",
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
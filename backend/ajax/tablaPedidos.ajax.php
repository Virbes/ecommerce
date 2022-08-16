<?php

require_once "../controladores/pedidos.controlador.php";
require_once "../modelos/pedidos.modelo.php";
require_once "../modelos/rutas.php";

class TablaPedidos {

 	/*=============================================
  	MOSTRAR LA TABLA DE PEDIDOS
  	=============================================*/ 
    
 	public function mostrarTabla(){	

        $url = Ruta::ctrRuta();
 		$pedidos = ControladorPedidos::ctrMostrarPedidos(0);	

 		if(count($pedidos) == 0){
	      $datosJson = '{ "data":[]}';
	      echo $datosJson;
	      return;
	    }

 		$datosJson = '{
		 
		  "data": [ ';

		 for($i = 0; $i < count($pedidos); $i++){

			$direccion = ControladorPedidos::getDireccion($pedidos[$i]["id"]);
			

            /*=============================================
			REVISAR IMAGEN USUARIO
			=============================================*/ 
            if ($pedidos[$i]['foto'] != '') {
                $imgUser = "<img class='img-thumbnail imgBanner' src='".$url.'ecommerce/'.$pedidos[$i]["foto"]."' width='100px' style='height: 60px;width: 60px;'>";    
            } else {
                $imgUser = "<img class='img-thumbnail imgBanner' src='".$url."vistas/img/usuarios/default/anonymous.png' width='100px' style='height: 60px;width: 60px;'>";
            }
            

		 	/*=============================================
			REVISAR ESTADO del pedido sigue vigente
			=============================================*/ 
			
			if($pedidos[$i]["activo"] == 1){
				
				$colorEstado = "btn-success";
				$textoEstado = "Vigente";

			}else if ($pedidos[$i]["activo"] == 3) {
				$colorEstado = "btn-success";
				$textoEstado = "Entregado";
			} else {

				$colorEstado = "btn-warning";
				$textoEstado = "Cancelado";
			}


            if($pedidos[$i]["entregado"] == 1){
				
				$colorVigente = "btn-success";
				$textoVigente = "Entregado";

			}else if ($pedidos[$i]["activo"] == 3) {
				$colorVigente = "btn-success";
				$textoVigente = "Entregado";
			} else {

				$colorVigente = "btn-warning";
				$textoVigente = "No entregado";

			}	

            $vigente = "<button class='btn ".$colorVigente." btn-xs btnActivar' idPedido='".$pedidos[$i]["id"]."' disabled>".$textoVigente."</button>";
			$estado = "<button class='btn ".$colorEstado." btn-xs btnActivar' idPedido='".$pedidos[$i]["id"]."' disabled>".$textoEstado."</button>";

			$nombre = strtoupper($pedidos[$i]['nombre']);

			/*=============================================
  			CREAR LAS ACCIONES
  			=============================================*/
        	$entregar = "<div class='btn-group'><button class='btn btn-success btnSuccess' idPedido='".$pedidos[$i]["id"]."'><i class='fa fa-check'></i></button></div>";
			$cancelar = "<div class='btn-group'><button class='btn btn-danger btnCancelarPedido' idPedido='".$pedidos[$i]["id"]."'><i class='fa fa-times'></i></button></div>";
			

			/*=============================================
  			Traer los productos
  			=============================================*/
			  $prod = json_decode($pedidos[$i]['productos'], true);

			  $titulo = (ControladorPedidos::ctrMostrarProducto($prod[0]['idProducto']))[0];
			  $cantidad = $prod[0]['cantidad'];

			//$titulo = (ControladorPedidos::ctrMostrarProducto($prod[0]['idProducto']))[0];

			$p = $titulo.': '.$cantidad;
			$total = $pedidos[$i]['total'];
			$datosJson	 .= '[
					 	"'.($i+1).'",
					 	"'.$imgUser.'",
                        "'.$nombre.'",
                        "'.$vigente.'",
				      	"'.$p.'",
						"<b>$'.$total.'</b>",
						"'.$direccion['direccion'].'", 
						"'.$direccion['telefono'].'", 
						"'.$direccion['referencia'].'", 
                        "'.$entregar.'", 
						"'.$cancelar.'"			   

  			  ],';
	    
		 }

	  	$datosJson = substr($datosJson, 0, -1);

		$datosJson.=  ']
		  
		}'; 

		echo $datosJson;

 	}


}


/*=============================================
ACTIVAR TABLA DE BANNER
=============================================*/ 
$activar = new TablaPedidos();
$activar -> mostrarTabla();
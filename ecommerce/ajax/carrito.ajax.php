<?php

require_once "../extensiones/paypal.controlador.php";

require_once "../controladores/carrito.controlador.php";
require_once "../modelos/carrito.modelo.php";

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

class AjaxCarrito{

	/*=============================================
	MÉTODO PAYPAL
	=============================================*/	

	public $divisa;
	public $total;
	public $totalEncriptado;
	public $impuesto;
	public $envio;
	public $subtotal;
	public $tituloArray;
	public $cantidadArray;
	public $valorItemArray;
	public $idProductoArray;

	public function ajaxEnviarPaypal(){

		if(md5($this->total) == $this->totalEncriptado){

				$datos = array(
						"divisa"=>$this->divisa,
						"total"=>$this->total,
						"impuesto"=>$this->impuesto,
						"envio"=>$this->envio,
						"subtotal"=>$this->subtotal,
						"tituloArray"=>$this->tituloArray,
						"cantidadArray"=>$this->cantidadArray,
						"valorItemArray"=>$this->valorItemArray,
						"idProductoArray"=>$this->idProductoArray,
					);

				$respuesta = Paypal::mdlPagoPaypal($datos);

				echo $respuesta;

		}
	}

	/*=============================================
	MÉTODO PAYU
	=============================================*/

	public function ajaxTraerComercioPayu(){

		$respuesta = ControladorCarrito::ctrMostrarTarifas(); 

		echo json_encode($respuesta);
	}

	/*=============================================
	VERIFICAR QUE NO TENGA EL PRODUCTO ADQUIRIDO
	=============================================*/

	public $idUsuario;
	public $idProducto;

	public function ajaxVerificarProducto(){

		$datos = array("idUsuario"=>$this->idUsuario,
					   "idProducto"=>$this->idProducto);

		$respuesta = ControladorCarrito::ctrVerificarProducto($datos);

		echo json_encode($respuesta);

	}


	/*=============================================
	Agregar pedido
	=============================================*/
	public $id_usuario;
	public $productos;
	public $sumaCarrito;

	public $recibidor;
	public $telefono;
	public $direccion;
	public $referencia;

	public function ajaxAgregarPedido() {

		$datos = array(
			"id_usuario"=>$this->id_usuario, 
			"productos"=>$this->productos,
			"activo"=>1,
			"entregado"=>0,
			"total"=>$this->sumaCarrito,

			"recibidor"=>$this->recibidor,
			"telefono"=>$this->telefono,
			"direccion"=>$this->direccion,
			"referencia"=>$this->referencia
		);

		ModeloCarrito::agregarPedido($datos);
		ModeloCarrito::actualizarNotificaciones();
		ModeloCarrito::setStock($datos);


		$correo_usuario = ModeloCarrito::getCorreoUsuario($this->id_usuario);
		$id_pedido = ModeloCarrito::getIdPedido();


		ModeloCarrito::AgregarDireccion($datos, $id_pedido[0]);		
		AjaxCarrito::enviarCorreoProductos($datos, $correo_usuario[0]);
	
		echo 'nada';
	}

	public static function enviarCorreoProductos($datos, $email) {

		$prod = json_decode($datos['productos']);

		$body = '';
		$body .= '

			<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
	
				<center>
					<img style="padding:20px; width:20%" src="ferreagna.online/backend/vistas/img/plantilla/logo.png">
				</center>

				<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">

				<center>
				
					<h3 style="font-weight:100; color:#999">LISTA DE PRODUCTOS</h3>
					<hr style="border:1px solid #ccc; width:80%">

					<h4 style="font-weight:100; color:#999; padding:0 20px">
						<strong>Estos son los productos que solicito:</strong>

						<strong style="line-height:60px; background:#ff6600; width:60%; color:white">
							'.date('Y-m-d').'
						</strong>
					</h4>
					

					<br>

					<table style="width: 100%;text-align: left;border-collapse: collapse;margin: 0 0 1em 0;caption-side: top;">

						<thead>
							<tr>
								<th style="padding: 0.3em;">Imagen</th>
								<th style="padding: 0.3em;">Nombre</th>
								<th style="padding: 0.3em;">Cantidad</th>
								<th style="padding: 0.3em;">Precio</th>
								<th style="padding: 0.3em;">SubTotal</th>
							</tr> 
						</thead>
						
						<tbody style="border-top: 1px solid #000;border-bottom: 1px solid #000;">';

						for ($i = 0; $i < count($prod); $i++) {

							$body .= '
								<tr>
									<th style="padding: 0.3em; border: 0; font-size: 13px;"><img src="'.$prod[$i]->imagen.'" style="height: 60px;width: 60px;"></th>
									<th style="padding: 0.3em; border: 0; font-size: 13px;">'.$prod[$i]->titulo.'</th>
									<th style="padding: 0.3em; border: 0; font-size: 13px;">'.$prod[$i]->cantidad.'</th>
									<th style="padding: 0.3em; border: 0; font-size: 13px;">$'.$prod[$i]->precio.'</th>
									<th style="padding: 0.3em; border: 0; font-size: 13px;">$'.($prod[$i]->precio) * ($prod[$i]->cantidad).'</th>
								</tr>'
							
								;
						}
							
						$body .= '</tbody>

						<tfoot style="text-align: center;color: #555;font-size: 0.8em;">
							<tr>
								<th style="padding: 0.3em; border: 0;">Total</th>
								<th style="padding: 0.3em; border: 0;"></th>
								<th style="padding: 0.3em; border: 0;"></th>
								<th style="padding: 0.3em; border: 0;"></th>
								<th style="padding: 0.3em; border: 0;">$'.$datos['total'].'</th>
							</tr>
						</tfoot>
					</table>

					<br>

					<hr style="border:1px solid #ccc; width:80%">

					<h5 style="font-weight:100; color:#999">Puede pasar a recojer su pedido desde hoy hasta 5 dias despues</h5>

				</center>

			</div>
		</div>
		
		';

		$url = Ruta::ctrRuta();	

		/* Envio de productos al correo */

		require '../extensiones/PHPMailer/src/Exception.php';
		require '../extensiones/PHPMailer/src/PHPMailer.php';
		require '../extensiones/PHPMailer/src/SMTP.php';

		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->CharSet = 'UTF-8';

		$mail->IsSMTP();
		$mail->Host       = 'smtp.gmail.com';
		$mail->SMTPSecure = 'tls';
		$mail->Port       = 587;
		$mail->SMTPDebug  = 1;
		$mail->SMTPAuth   = true;
		$mail->Username   = 'francisco.virbes.457@gmail.com';
		$mail->Password   = 'thetreasures1';
		$mail->SetFrom('francisco.virbes.457@gmail.com', "Ferreteria AGNA");
		$mail->AddReplyTo('no-reply@mycomp.com','no-reply');
		$mail->Subject    = 'Productos solicidatos en Ferreteria AGNA';
		$mail->MsgHTML($body);

		$mail->addAddress($email);
		$mail->Send();
	}

}

/*=============================================
MÉTODO PAYPAL
=============================================*/	

if(isset($_POST["divisa"])){

	$idProductos = explode("," , $_POST["idProductoArray"]);
	$cantidadProductos = explode("," , $_POST["cantidadArray"]);
	$precioProductos = explode("," , $_POST["valorItemArray"]);

	$item = "id";

	for($i = 0; $i < count($idProductos); $i ++){

		$valor = $idProductos[$i];

		$verificarProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);

		$divisa = file_get_contents("http://free.currconv.com/api/v7/convert?q=USD_".$_POST["divisa"]."&compact=ultra&apiKey=a01ebaf9a1c69eb4ff79");

		$jsonDivisa = json_decode($divisa, true);

		$conversion = number_format($jsonDivisa["USD_".$_POST["divisa"]],2);

		if($verificarProductos["precioOferta"] == 0){

			$precio = $verificarProductos["precio"]*$conversion;
		
		}else{

			$precio = $verificarProductos["precioOferta"]*$conversion;

		}

		$verificarSubTotal = $cantidadProductos[$i]*$precio;

		// echo number_format($verificarSubTotal,2)."<br>";
		// echo number_format($precioProductos[$i],2)."<br>";

		// return;

		if(number_format($verificarSubTotal,2) != number_format($precioProductos[$i],2)){

			echo "carrito-de-compras";

			return;

		}

	}

	$paypal = new AjaxCarrito();
	$paypal ->divisa = $_POST["divisa"];
	$paypal ->total = $_POST["total"];
	$paypal ->totalEncriptado = $_POST["totalEncriptado"];
	$paypal ->impuesto = $_POST["impuesto"];
	$paypal ->envio = $_POST["envio"];
	$paypal ->subtotal = $_POST["subtotal"];
	$paypal ->tituloArray = $_POST["tituloArray"];
	$paypal ->cantidadArray = $_POST["cantidadArray"];
	$paypal ->valorItemArray = $_POST["valorItemArray"];
	$paypal ->idProductoArray = $_POST["idProductoArray"];
	$paypal -> ajaxEnviarPaypal();


}

/*=============================================
MÉTODO PAYU
=============================================*/	

if(isset($_POST["metodoPago"]) && $_POST["metodoPago"] == "payu"){

	$idProductos = explode("," , $_POST["idProductoArray"]);
	$cantidadProductos = explode("," , $_POST["cantidadArray"]);
	$precioProductos = explode("," , $_POST["valorItemArray"]);

	$item = "id";

	for($i = 0; $i < count($idProductos); $i ++){

		$valor = $idProductos[$i];

		$verificarProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);

		$divisa = file_get_contents("http://free.currconv.com/api/v7/convert?q=USD_".$_POST["divisaPayu"]."&compact=ultra&apiKey=a01ebaf9a1c69eb4ff79");

		$jsonDivisa = json_decode($divisa, true);

		$conversion = number_format($jsonDivisa["USD_".$_POST["divisaPayu"]],2);

		if($verificarProductos["precioOferta"] == 0){

			$precio = $verificarProductos["precio"]*$conversion;
		
		}else{

			$precio = $verificarProductos["precioOferta"]*$conversion;

		}

		$verificarSubTotal = $cantidadProductos[$i]*$precio;

		// echo number_format($verificarSubTotal,2)."<br>";
		// echo number_format($precioProductos[$i],2)."<br>";

		// return;

		if(number_format($verificarSubTotal,2) != number_format($precioProductos[$i],2)){

			echo "carrito-de-compras";

			return;

		}

	}

	$payu = new AjaxCarrito();
	$payu -> ajaxTraerComercioPayu();

}

/*=============================================
VERIFICAR QUE NO TENGA EL PRODUCTO ADQUIRIDO
=============================================*/	

if(isset($_POST["idUsuario"])){

	$deseo = new AjaxCarrito();
	$deseo -> idUsuario = $_POST["idUsuario"];
	$deseo -> idProducto = $_POST["idProducto"];
	$deseo ->ajaxVerificarProducto();
}








/*Agregar pedido*/
if(isset($_POST["id_usuario"])){

	$pedido = new AjaxCarrito();
	$pedido -> id_usuario = $_POST["id_usuario"];
	$pedido -> productos = $_POST["productos"];
	$pedido -> sumaCarrito = $_POST["sumaCarrito"];

	$pedido -> recibidor = $_POST["recibidor"];
	$pedido -> telefono = $_POST["telefono"];
	$pedido -> direccion = $_POST["direccion"];
	$pedido -> referencia = $_POST["referencia"];

	$pedido -> ajaxAgregarPedido();
}
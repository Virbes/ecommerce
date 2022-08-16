<!DOCTYPE html>
<html lang="es">

<head>
	<?php
		session_start();
		$servidor = Ruta::ctrRutaServidor();
	?>

	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?php echo $servidor?>vistas/img/plantilla/icono.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php

		$servidor = Ruta::ctrRutaServidor();
		$plantilla = ControladorPlantilla::ctrEstiloPlantilla();

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		$url = Ruta::ctrRuta();

		/*=============================================
		MARCADO DE CABECERA
		=============================================*/

		$rutas = array();

		if(isset($_GET["ruta"])){
			$rutas = explode("/", $_GET["ruta"]);
			$ruta = $rutas[0];
		}else{
			$ruta = "inicio";
		}

		$cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);
		
		if(!$cabeceras["ruta"]){
			$ruta = "inicio";
			$cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);
		}

	?>

	<!--=====================================
	Marcado HTML5
	======================================-->
	<meta name="title" content="<?php echo  $cabeceras['titulo']; ?>">
	<meta name="description" content="<?php echo  $cabeceras['descripcion']; ?>">
	<meta name="keyword" content="<?php echo  $cabeceras['palabrasClaves']; ?>">
	<title><?php echo  $cabeceras['titulo']; ?></title>


	<!--=====================================
	PLUGINS DE CSS
	======================================-->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">
	<!-- <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css"> -->
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/dscountdown.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">


	<!--=====================================
	HOJAS DE ESTILO PERSONALIZADAS
	======================================-->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/infoproducto.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/perfil.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/carrito-de-compras.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/ofertas.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/footer.css">


	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>
	<!-- <script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script> -->
	<script src="<?php echo $url; ?>vistas/js/plugins/sweetalert2.all.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/md5-min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/dscountdown.min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/knob.jquery.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>

</head>

<body>

<?php

/*=============================================
CABEZOTE
=============================================*/
include "modulos/cabezote.php";


/*=============================================
CONTENIDO DINÁMICO
=============================================*/
$rutas = array();
$ruta = null;
$infoProducto = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	URL'S AMIGABLES DE CATEGORÍAS
	=============================================*/

	$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

	if($rutas[0] == $rutaCategorias["ruta"]){
		$ruta = $rutas[0];
	}

	/*=============================================
	URL'S AMIGABLES DE SUBCATEGORÍAS
	=============================================*/

	$rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

	foreach ($rutaSubCategorias as $key => $value) {
		
		if($rutas[0] == $value["ruta"]){

			$ruta = $rutas[0];

		}

	}

	/*=============================================
	URL'S AMIGABLES DE PRODUCTOS
	=============================================*/

	$rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);
	
	if($rutas[0] == $rutaProductos["ruta"]){
		$infoProducto = $rutas[0];
	}

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto"){

		include "modulos/productos.php";

	}else if($infoProducto != null){

		include "modulos/infoproducto.php";

	}else if($rutas[0] == "buscador" || $rutas[0] == "verificar" || $rutas[0] == "salir" || $rutas[0] == "perfil" || $rutas[0] == "carrito-de-compras" || $rutas[0] == "error" || $rutas[0] == "finalizar-compra" || $rutas[0] == "curso" || $rutas[0] == "ofertas" || $rutas[0] == "terminos-y-condiciones"){

		include "modulos/".$rutas[0].".php";

	}else if($rutas[0] == "inicio"){

		include "modulos/slide.php";

		include "modulos/destacados.php";

	}else if ($rutas[0] == "mail"){

		include "modulos/mail.php";

	} else {
		include "modulos/error404.php";
	}

}else{

	include "modulos/slide.php";

	include "modulos/destacados.php";

	// include "modulos/visitas.php";

}


include "modulos/footer.php";

?>


<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
<!--=====================================
JAVASCRIPT PERSONALIZADO
======================================-->

<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
<script src="<?php echo $url; ?>vistas/js/buscador.js"></script>
<script src="<?php echo $url; ?>vistas/js/infoproducto.js"></script>
<script src="<?php echo $url; ?>vistas/js/usuarios.js"></script>
<script src="<?php echo $url; ?>vistas/js/registroFacebook.js"></script>
<script src="<?php echo $url; ?>vistas/js/carrito-de-compras.js"></script>
<script src="<?php echo $url; ?>vistas/js/visitas.js"></script>

</body>
</html>
<?php

$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

?>

<!--=====================================
BREADCRUMB INFOPRODUCTOS
======================================-->
<div class="container-fluid well well-sm">
	<div class="container">
		<div class="row">
			<ul class="breadcrumb fondoBreadcrumb text-uppercase">
				<li><a href="<?php echo $url;  ?>">INICIO</a></li>
				<li class="active pagActiva"><?php echo $rutas[0] ?></li>
			</ul>
		</div>
	</div>
</div>

<!--=====================================
INFOPRODUCTOS
======================================-->
<div class="container-fluid infoproducto">
	<div class="container">
		<div class="row">
			<?php

				$item =  "ruta";
				$valor = $rutas[0];
				$infoproducto = ControladorProductos::ctrMostrarInfoProducto($item, $valor);

				$result = json_decode($infoproducto["multimedia"], true);
				$multimedia = array_reverse($result);


				/*=============================================
				VISOR DE IMÁGENES
				=============================================*/

				if(true){

					echo '<div class="col-md-5 col-sm-6 col-xs-12 visorImg">
						
							<figure class="visor">';

							if($multimedia != null){

								for($i = 0; $i < count($multimedia); $i ++){

									$var = substr($multimedia[$i]["foto"],0,6);
									
									if ($var == 'vistas') {
										echo '<img id="lupa'.($i+1).'" class="img-thumbnail" src="'.$servidor.$multimedia[$i]["foto"].'">';
									}

								}								

								echo '</figure>

								<div class="flexslider">
								  
								  <ul class="slides">';

								for($i = 0; $i < count($multimedia); $i ++){

									$var = substr($multimedia[$i]["foto"],0,6);

									if ($var == 'vistas') {
										echo '<li>
												<img value="'.($i+1).'" class="img-thumbnail" src="'.$servidor.$multimedia[$i]["foto"].'" alt="'.$infoproducto["titulo"].'">
								   			  </li>';
									}

								}

							}		
							    						 
							  echo '</ul>

							</div>

						</div>';			

				}			

			?>

			<!--=====================================
			PRODUCTO
			======================================-->

			<?php

				if(true){ // Virtual => False || Fisico => true
					echo '<div class="col-md-7 col-sm-6 col-xs-12">';
				}else{
					echo '<div class="col-sm-6 col-xs-12">';
				}

			?>

				<!--=====================================
				REGRESAR A LA TIENDA
				======================================-->

				<div class="col-xs-6">
					
					<h6>
						
						<a href="javascript:history.back()" class="text-muted">
							
							<i class="fa fa-reply"></i> Continuar Comprando

						</a>

					</h6>

				</div>

				<!--=====================================
				COMPARTIR EN REDES SOCIALES
				======================================-->

				<div class="col-xs-6" style="display: none;">
					
					<h6>
						
						<a class="dropdown-toggle pull-right text-muted" data-toggle="dropdown" href="">
							
							<i class="fa fa-plus"></i> Compartir

						</a>

						<ul class="dropdown-menu pull-right compartirRedes">

							<li>
								<p class="btnFacebook">
									<i class="fa fa-facebook"></i>
									Facebook
								</p>
							</li>

							<li>
								<p class="btnGoogle">
									<i class="fa fa-google"></i>
									Google
								</p>
							</li>
							
						</ul>

					</h6>

				</div>

				<div class="clearfix"></div>

				<!--=====================================
				ESPACIO PARA EL PRODUCTO
				======================================-->

				<?php

					echo '<div class="comprarAhora" style="display:none">


						<button class="btn btn-default backColor quitarItemCarrito" idProducto="'.$infoproducto["id"].'"></button>

						<p class="tituloCarritoCompra text-left">'.$infoproducto["titulo"].'</p>';


						if($infoproducto["oferta"] == 0){

							echo'<input class="cantidadItem" value="1" tipo="'.$infoproducto["tipo"].'" precio="'.$infoproducto["precio"].'" idProducto="'.$infoproducto["id"].'">

							<p class="subTotal'.$infoproducto["id"].' subtotales">
						
								<strong>$<span>'.$infoproducto["precio"].'</span></strong>

							</p>

							<div class="sumaSubTotal"><span>'.$infoproducto["precio"].'</span></div>';


						}else{

							echo'<input class="cantidadItem" value="1" tipo="'.$infoproducto["tipo"].'" precio="'.$infoproducto["precioOferta"].'" idProducto="'.$infoproducto["id"].'">

							<p class="subTotal'.$infoproducto["id"].' subtotales">
						
								<strong>$<span>'.$infoproducto["precioOferta"].'</span></strong>

							</p>

							<div class="sumaSubTotal"><span>'.$infoproducto["precioOferta"].'</span></div>';


						}

					




					echo '</div>';

					/*=============================================
					TITULO
					=============================================*/				
					
					if($infoproducto["oferta"] == 0){

						$fecha = date('Y-m-d');
						$fechaActual = strtotime('-30 day', strtotime($fecha));
						$fechaNueva = date('Y-m-d', $fechaActual);

						if($fechaNueva > $infoproducto["fecha"]){

							echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'</h1>';

						}else{

							echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'

							<br>

							<small>
						
								<span class="label label-warning">Nuevo</span>

							</small>

							</h1>';

						}

					}else{

						$fecha = date('Y-m-d');
						$fechaActual = strtotime('-30 day', strtotime($fecha));
						$fechaNueva = date('Y-m-d', $fechaActual);

						if($fechaNueva > $infoproducto["fecha"]){

							echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'

							<br>';

							if($infoproducto["precio"] != 0){

								echo '<small>
							
									<span class="label label-warning">'.$infoproducto["descuentoOferta"].'% off</span>

								</small>';

							}
							
							echo '</h1>';

						}else{

							echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'

							<br>';

							if($infoproducto["precio"] != 0){

								echo '<small>
									<span class="label label-warning">Nuevo</span> 
									<span class="label label-warning">'.$infoproducto["descuentoOferta"].'% off</span> 

								</small>';

							}
							
							echo '</h1>';

						}
					}

					/*=============================================
					TITULO
					=============================================*/	

						if($infoproducto["oferta"] == 0){

							echo '<h2 class="text-muted">$'.$infoproducto["precio"].'</h2>';

						}else{

							echo '<h2 class="text-muted">

								<span>
								
									<strong class="oferta">$'.$infoproducto["precio"].'</strong>

								</span>

								<span>
									$'.$infoproducto["precioOferta"].'
								</span>

							</h2>';

						}

					/*=============================================
					DESCRIPCIÓN
					=============================================*/		

					echo '<p>'.$infoproducto["descripcion"].'</p>';

					/*=============================================
					AVISO STOCK
					=============================================*/		

					if ($infoproducto['stock'] <= 10) {
						echo '<b style="color: #af1818">¡SOLO QUEDAN '.$infoproducto["stock"].' UNIDADES!</b>';
					}

				?>
				
				<!--=====================================
				CARACTERÍSTICAS DEL PRODUCTO
				======================================-->

				<div class="form-group row">
				<hr>
				<?php if (false) {
					/*=============================================
					ENTREGA
					=============================================*/
					echo '<h4 class="col-md-12 col-sm-0 col-xs-0">
						<hr>
						<span class="label label-default" style="font-weight:100">

							<i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
							'.$infoproducto["ventas"].' ventas 

						</span>

					</h4>

					<h4 class="col-lg-0 col-md-0 col-xs-12">

						<hr>

						<small>
							<i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
							'.$infoproducto["ventas"].' ventas <br>
						</small>

					</h4>';		}

				?>

				</div>

				<!--=====================================
				BOTONES DE COMPRA
				======================================-->

				<div class="row botonesCompra">

				<?php

							echo '<div class="col-md-6 col-xs-12">';
if (false) {
							if(isset($_SESSION["validarSesion"])){

								if($_SESSION["validarSesion"] == "ok"){

									echo '<a id="btnCheckout" href="#modalComprarAhora" data-toggle="modal" idUsuario="'.$_SESSION["id"].'"><button class="btn btn-default btn-block btn-lg">
									<small>COMPRAR AHORA</small></button></a>';

								}

							}else{

								echo '<a href="#modalIngreso" data-toggle="modal"><button class="btn btn-default btn-block btn-lg">
									<small>COMPRAR AHORA</small></button></a>';
			
							}
}
							echo '</div>

								<div class="col-md-6 col-xs-12">';

								if($infoproducto["oferta"] != 0){
									echo '<button class="btn btn-default btn-block btn-lg backColor agregarCarrito"  idProducto="'.$infoproducto["id"].'" imagen="'.$servidor.$infoproducto["portada"].'" titulo="'.$infoproducto["titulo"].'" precio="'.$infoproducto["precioOferta"].'" tipo="'.$infoproducto["tipo"].'">';
								}else{
									echo '<button class="btn btn-default btn-block btn-lg backColor agregarCarrito" stock="'.$infoproducto['stock'].'" idProducto="'.$infoproducto["id"].'" imagen="'.$servidor.$infoproducto["portada"].'" titulo="'.$infoproducto["titulo"].'" precio="'.$infoproducto["precio"].'">';
								}

								echo   '<small>AGREGAR AL CARRITO</small> 

									<i class="fa fa-shopping-cart col-md-0"></i>

									</button>

								</div>';

				?>

				</div>
				
				<!--=====================================
				ZONA DE LUPA
				======================================-->

				<figure class="lupa">
					
					<img src="">

				</figure>

			</div>
			
		</div>

		<!--=====================================
		COMENTARIOS
		======================================-->

		<br>

		<div class="row">

			<?php

			$datos = array("idUsuario"=>"",
						   "idProducto"=>$infoproducto["id"]);

			$comentarios = ControladorUsuarios::ctrMostrarComentariosPerfil($datos);
			$cantidad = 0;

			foreach ($comentarios as $key => $value){
				
				if($value["comentario"] != ""){

					$cantidad += count($value["id"]);

				}
			}

			?>
			
			<ul class="nav nav-tabs">

			<?php

				$cantidadCalificacion = 0;

				if($cantidad == 0){

					echo '<li class="active"><a>ESTE PRODUCTO NO TIENE COMENTARIOS</a></li>
						  <li></li>';

				}else{

					echo '<li class="active"><a>COMENTARIOS '.$cantidad.'</a></li>
						  <li><a id="verMas" href="">Ver más</a></li>';


					$sumaCalificacion = 0;

					foreach ($comentarios as $key => $value){

						if($value["calificacion"] != 0){

							$cantidadCalificacion += count($value["id"]);

							$sumaCalificacion += $value["calificacion"];

						}

					}

					$promedio = round($sumaCalificacion/$cantidadCalificacion,1);

					echo '<li class="pull-right"><a class="text-muted">PROMEDIO DE CALIFICACIÓN: '.$promedio.' | ';

					if($promedio >= 0 && $promedio < 0.5){

						echo '<i class="fa fa-star-half-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>';

					}

					else if($promedio >= 0.5 && $promedio < 1){

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>';

					}

					else if($promedio >= 1 && $promedio < 1.5){

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star-half-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>';

					}

					else if($promedio >= 1.5 && $promedio < 2){

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>';

					}

					else if($promedio >= 2 && $promedio < 2.5){

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star-half-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>';

					}

					else if($promedio >= 2.5 && $promedio < 3){

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>';

					}

					else if($promedio >= 3 && $promedio < 3.5){

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star-half-o text-success"></i>
							  <i class="fa fa-star-o text-success"></i>';

					}

					else if($promedio >= 3.5 && $promedio < 4){

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star-o text-success"></i>';

					}

					else if($promedio >= 4 && $promedio < 4.5){

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star-half-o text-success"></i>';

					}else{

						echo '<i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>
							  <i class="fa fa-star text-success"></i>';

					}


				}


			?>

					
				</a></li>

			</ul>

			<br>

		</div>

		<div class="row comentarios">

		<?php

		foreach ($comentarios as $key => $value) {
			
			if($value["comentario"] != ""){

				$item = "id";
				$valor = $value["id_usuario"];

				$usuario = ControladorUsuarios::ctrMostrarUsuario($item, $valor);

				echo '<div class="panel-group col-md-3 col-sm-6 col-xs-12 alturaComentarios">
				
					<div class="panel panel-default">
				      
				      <div class="panel-heading text-uppercase">

				      	'.$usuario["nombre"].'
				      	<span class="text-right">';

				      	if($usuario["modo"] == "directo"){

				      		if($usuario["foto"] == ""){

				      			echo '<img class="img-circle pull-right" src="'.$servidor.'vistas/img/usuarios/default/anonymous.png" width="20%">';	

				      		}else{

				      			echo '<img class="img-circle pull-right" src="'.$url.$usuario["foto"].'" width="20%">';	

				      		}
				      	
				      	}else{

				      		echo '<img class="img-circle pull-right" src="'.$usuario["foto"].'" width="20%">';	

				      	}

				      	echo '</span>

				      </div>
				     
				      <div class="panel-body"><small>'.$value["comentario"].'</small></div>

				      <div class="panel-footer">';
				      	
				      	switch($value["calificacion"]){

							case 0.5:
							echo '<i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
							break;

							case 1.0:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
							break;

							case 1.5:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
							break;

							case 2.0:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
							break;

							case 2.5:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
							break;

							case 3.0:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
							break;

							case 3.5:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
							break;

							case 4.0:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
							break;

							case 4.5:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>';
							break;

							case 5.0:
							echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>
								  <i class="fa fa-star text-success" aria-hidden="true"></i>';
							break;

						}

				      echo '</div>
				    
				    </div>

				</div>';

			}
		}

		?>

		</div>

		<hr>

	</div>

</div>

<!--=====================================
ARTiCULOS RELACIONADOS
======================================-->
<div class="container-fluid productos">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 tituloDestacado">
				
				<div class="col-sm-6 col-xs-12">
					<h1><small>PRODUCTOS RELACIONADOS</small></h1>
				</div>

				<div class="col-sm-6 col-xs-12">

				<?php

					$item = "id";
					$valor = $infoproducto["id_subcategoria"];

					$rutaArticulosDestacados = ControladorProductos::ctrMostrarSubcategorias($item, $valor);

					echo '<a href="'.$url.$rutaArticulosDestacados[0]["ruta"].'">
						
						<button class="btn btn-default backColor pull-right">
							VER MÁS <span class="fa fa-chevron-right"></span>
						</button>

					</a>';

				?>

				</div>

			</div>

			<div class="clearfix"></div>

			<hr>

		</div>

		<?php

			$ordenar = "";
			$item = "id_subcategoria";
			$valor = $infoproducto["id_subcategoria"];
			$base = 0;
			$tope = 4;
			$modo = "Rand()";

			$relacionados = ControladorProductos::ctrMostrarProductos($ordenar, $item, $valor, $base, $tope, $modo);

			if(!$relacionados){

				echo '<div class="col-xs-12 error404">

					<h1><small>¡Oops!</small></h1>

					<h2>No hay productos relacionados</h2>

				</div>';

			}else{

				echo '<ul class="grid0">';

				foreach ($relacionados as $key => $value) {

				if($value["estado"] != 0){
				
					echo '<li class="col-md-3 col-sm-6 col-xs-12">

						<figure>
							
							<a href="'.$url.$value["ruta"].'" class="pixelProducto">
								
								<img src="'.$servidor.$value["portada"].'" class="img-responsive">

							</a>

						</figure>

						<h4>
				
							<small>
								
								<a href="'.$url.$value["ruta"].'" class="pixelProducto">
									
									'.$value["titulo"].'<br>

									<span style="color:rgba(0,0,0,0)">-</span>';

									$fecha = date('Y-m-d');
									$fechaActual = strtotime('-30 day', strtotime($fecha));
									$fechaNueva = date('Y-m-d', $fechaActual);

									if($fechaNueva < $value["fecha"]){

										echo '<span class="label label-warning fontSize">Nuevo</span> ';

									}

									if ($value['stock'] <= 10) {
										echo '<span style="margin-left: 90px; color: #b72323;">¡Quedan solo '.$value['stock'].'!</span>';
									}

								echo '</a>	

							</small>			

						</h4>

						<div class="col-xs-6 precio">';

							if($value["oferta"] != 0){

								echo '<h2>

										<small>
					
											<strong class="oferta">$'.$value["precio"].'</strong>

										</small>

										<small>$'.$value["precioOferta"].'</small>
									
									</h2>';

							}else{

								echo '<h2><small>$'.$value["precio"].'</small></h2>';

							}
										
						echo '</div>

						<div class="col-xs-6 enlaces">
							
							<div class="btn-group pull-right">
								
								<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos">
									
									<i class="fa fa-heart" aria-hidden="true"></i>

								</button>';

									if($value["oferta"] != 0){

										echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value["id"].'" imagen="'.$servidor.$value["portada"].'" titulo="'.$value["titulo"].'" precio="'.$value["precioOferta"].'" tipo="'.$value["tipo"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

										<i class="fa fa-shopping-cart" aria-hidden="true"></i>

										</button>';

									}else{

										echo '<button type="button" class="btn btn-default btn-xs agregarCarrito" stock="'.$value['stock'].'"  idProducto="'.$value["id"].'" imagen="'.$servidor.$value["portada"].'" titulo="'.$value["titulo"].'" precio="'.$value["precio"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

										<i class="fa fa-shopping-cart" aria-hidden="true"></i>

										</button>';

									}	

								echo '<a href="'.$url.$value["ruta"].'" class="pixelProducto">
								
									<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
										
										<i class="fa fa-eye" aria-hidden="true"></i>

									</button>	
								
								</a>

							</div>

						</div>

					</li>';

				}
			}

			echo '</ul>';

		}

		?>

	</div>

</div>


<?php

if(true){ // true=>fisico || false => digital

	echo '<script type="application/ld+json">

			{
			  "@context": "http://schema.org/",
			  "@type": "Product",
			  "name": "'.$infoproducto["titulo"].'",
			  "image": [';

			  for($i = 0; $i < count($multimedia); $i ++){
			  	echo $servidor.$multimedia[$i]["foto"].',';
			  }
			
			  echo '],
			  "description": "'.$infoproducto["descripcion"].'"
	  
			}

		</script>';

}else{

	echo '<script type="application/ld+json">

			{
			  "@context": "http://schema.org",
			  "@type": "Course",
			  "name": "'.$infoproducto["titulo"].'",
			  "description": "'.$infoproducto["descripcion"].'",
			  "provider": {
			    "@type": "Organization",
			    "name": "Tu Logo",
			    "sameAs": "'.$url.$infoproducto["ruta"].'"
			  }
			}

		</script>';

}

?>

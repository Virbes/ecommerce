<?php
    
    $url = Ruta::ctrRuta();

 ?>

<!--=====================================
BREADCRUMB CARRITO DE COMPRAS
======================================-->

<div class="container-fluid well well-sm">
	
	<div class="container">
		
		<div class="row">
			
			<ul class="breadcrumb fondoBreadcrumb text-uppercase">
				
				<li><a href="<?php echo $url;  ?>">CARRITO DE COMPRAS</a></li>
				<li class="active pagActiva"><?php echo $rutas[0] ?></li>

			</ul>

		</div>

	</div>

</div>

<!--=====================================
TABLA CARRITO DE COMPRAS
======================================-->

<div class="container-fluid">

	<div class="container">

		<div class="panel panel-default">
			
			<!--=====================================
			CABECERA CARRITO DE COMPRAS
			======================================-->

			<div class="panel-heading cabeceraCarrito">
				
				<div class="col-md-6 col-sm-7 col-xs-12 text-center">
					
					<h3>
						<small>PRODUCTO</small>
					</h3>

				</div>

				<div class="col-md-2 col-sm-1 col-xs-0 text-center">
					
					<h3>
						<small>PRECIO</small>
					</h3>

				</div>

				<div class="col-sm-2 col-xs-0 text-center">
					
					<h3>
						<small>CANTIDAD</small>
					</h3>

				</div>

				<div class="col-sm-2 col-xs-0 text-center">
					
					<h3>
						<small>SUBTOTAL</small>
					</h3>

				</div>

			</div>

			<!--=====================================
			CUERPO CARRITO DE COMPRAS
			======================================-->

			<div class="panel-body cuerpoCarrito">

				

			</div>

			<!--=====================================
			SUMA DEL TOTAL DE PRODUCTOS
			======================================-->

			<div class="panel-body sumaCarrito">

				<div class="col-md-4 col-sm-6 col-xs-12 pull-right well">
					
					<div class="col-xs-6">
						
						<h4>TOTAL:</h4>

					</div>

					<div class="col-xs-6">

						<h4 class="sumaSubTotal">
							
							

						</h4>

					</div> 

				</div>

			</div>

			<!--=====================================
			BOTÓN CHECKOUT
			======================================-->

			<div class="panel-heading cabeceraCheckout">

			<?php

				if(isset($_SESSION["validarSesion"])){

					if($_SESSION["validarSesion"] == "ok"){

						//echo '<a id="btnCheckout" href="#modalCheckout" data-toggle="modal" idUsuario="'.$_SESSION["id"].'"><button class="btn btn-default backColor btn-lg pull-right">REALIZAR PEDIDO</button></a>';

						echo '<a id="" idUsuario="'.$_SESSION["id"].'"><button class="btn btn-default backColor btn-lg pull-right" data-toggle="modal" data-target="#modalDireccionPedido">REALIZAR PEDIDO</button></a>';

					}


				}else{

					echo '<a href="#modalIngreso" data-toggle="modal"><button class="btn btn-default backColor btn-lg pull-right">REALIZAR PEDIDO</button></a>';
				}

			?>	

			</div>

		</div>

	</div>

</div>

<!-- MODAL PARA AGREGAR DIRECCION DE ENVIO -->
<div id="modalDireccionPedido" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">

        <!-- CABEZA DEL MODAL -->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar dirección</h4>
        </div>

        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
			<div class="box-body">

				<!-- ENTRADA PARA EL NOMBRE -->
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span> 
						<input type="text" class="form-control input-lg" id="nuevoRecibidor" placeholder="Ingresar nombre de quien recibira" required>
					</div>
				</div>

				<!-- ENTRADA PARA EL TELÉFONO -->
				<div class="form-group">  
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-phone"></i></span> 
						<input type="text" class="form-control input-lg" id="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>
					</div>
				</div>

				<!-- ENTRADA PARA LA DIRECCIÓN -->
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 
						<input type="text" class="form-control input-lg" id="nuevaDireccion" placeholder="Ingresar dirección" required>
					</div>
				</div>

				<!-- ENTRADA PARA LA REFERENCIA -->
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-building-o"></i></span> 
						<input type="text" class="form-control input-lg" id="nuevaReferencia" placeholder="Ingresar la referencia del domicilio" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>
					</div>
				</div>

			</div>
        </div>

        <!-- PIE DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="button" class="btn btn-primary" id="realizar_pedido">Realizar pedido</button>
        </div>

      </form>

    </div>

  </div>

</div>
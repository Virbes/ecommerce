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



<!--=====================================
VENTANA MODAL PARA CHECKOUT
======================================-->

<div id="modalCheckout" class="modal fade modalFormulario" role="dialog">
	
	 <div class="modal-content modal-dialog">
	 	
		<div class="modal-body modalTitulo">
			
			<h3 class="backColor">REALIZAR PAGO</h3>

			<button type="button" class="close" data-dismiss="modal">&times;</button>

			<div class="contenidoCheckout">

				<?php

				$respuesta = ControladorCarrito::ctrMostrarTarifas();

				echo '<input type="hidden" id="tasaImpuesto" value="'.$respuesta["impuesto"].'">
					  <input type="hidden" id="envioNacional" value="'.$respuesta["envioNacional"].'">
				      <input type="hidden" id="envioInternacional" value="'.$respuesta["envioInternacional"].'">
				      <input type="hidden" id="tasaMinimaNal" value="'.$respuesta["tasaMinimaNal"].'">
				      <input type="hidden" id="tasaMinimaInt" value="'.$respuesta["tasaMinimaInt"].'">
				      <input type="hidden" id="tasaPais" value="'.$respuesta["pais"].'">

				';

				?>
				
				<div class="formEnvio row">
					
					<h4 class="text-center well text-muted text-uppercase">Información de envío</h4>

					<div class="col-xs-12 seleccionePais">
						
						

					</div>

				</div>

				<br>

				<div class="formaPago row">
					
					<h4 class="text-center well text-muted text-uppercase">forma de pago</h4>

					<figure class="col-xs-6">
						
						<center>
							
							<input id="checkPaypal" type="radio" name="pago" value="paypal" checked>

						</center>	
						
						<img src="<?php echo $url; ?>vistas/img/plantilla/paypal.jpg" class="img-thumbnail">		

					</figure>

					<!-- <figure class="col-xs-6">
						
						<center>
							
							<input id="checkPayu" type="radio" name="pago" value="payu">

						</center>

						<img src="<?php echo $url; ?>vistas/img/plantilla/payu.jpg" class="img-thumbnail">

					</figure> -->

				</div>

				<br>

				<div class="listaProductos row">
					
					<h4 class="text-center well text-muted text-uppercase">Productos a comprar</h4>

					<table class="table table-striped tablaProductos">
						
						 <thead>
						 	
							<tr>		
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Precio</th>
							</tr>

						 </thead>

						 <tbody>
						 	


						 </tbody>

					</table>

					<div class="col-sm-6 col-xs-12 pull-right">
						
						<table class="table table-striped tablaTasas">
							
							<tbody>
								
								<tr>
									<td>Subtotal</td>	
									<td>$<span class="valorSubtotal" valor="0">0</span></td>	
								</tr>

								<tr>
									<td>Envío</td>	
									<td>$<span class="valorTotalEnvio" valor="0">0</span></td>	
								</tr>

								<tr>
									<td>Impuesto</td>	
									<td>$<span class="valorTotalImpuesto" valor="0">0</span></td>	
								</tr>

								<tr>
									<td><strong>Total</strong></td>	
									<td><strong><span class="cambioDivisa">MXN</span> $<span class="valorTotalCompra" valor="0">0</span></strong></td>	
								</tr>

							</tbody>	

						</table>

						 <div class="divisa">

						 	<select class="form-control" id="cambiarDivisa" name="divisa">
						 		
							

						 	</select>	

						 	<br>

						 </div>

					</div>

					<div class="clearfix"></div>

					<form class="formPayu" style="display:none">
					 
						<input name="merchantId" type="hidden" value=""/>
						<input name="accountId" type="hidden" value=""/>
						<input name="description" type="hidden" value=""/>
						<input name="referenceCode" type="hidden" value=""/>	
						<input name="amount" type="hidden" value=""/>
						<input name="tax" type="hidden" value=""/>
						<input name="taxReturnBase" type="hidden" value=""/>
						<input name="shipmentValue" type="hidden" value=""/>
						<input name="currency" type="hidden" value=""/>
						<input name="lng" type="hidden" value="es"/>
						<input name="confirmationUrl" type="hidden" value="" />
						<input name="responseUrl" type="hidden" value=""/>
						<input name="declinedResponseUrl" type="hidden" value=""/>
						<input name="displayShippingInformation" type="hidden" value=""/>
						<input name="test" type="hidden" value="" />
						<input name="signature" type="hidden" value=""/>

					  <input name="Submit" class="btn btn-block btn-lg btn-default backColor" type="submit"  value="PAGAR" >
					</form>
					
					<button class="btn btn-block btn-lg btn-default backColor btnPagar">PAGAR</button>

				</div>

			</div>

		</div>

		<div class="modal-footer">
      	
      	</div>

	</div>

</div>

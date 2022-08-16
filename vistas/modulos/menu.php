<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">

			<?php

			if ($_SESSION["perfil"] == "administrador") {

				echo '<li class="active">
					<a href="inicio">
						<i class="fa fa-home color-agna"></i>
						<span>Inicio</span>
					</a>
				</li>

				<li>
					<a href="perfiles">
						<i class="fa fa-user color-agna"></i>
						<span>Perfiles</span>
					</a>
				</li>';
			}

			if ($_SESSION["perfil"] == "administrador" || $_SESSION["perfil"] == "vendedor") {

				echo '<li>
					<a href="clientes">
						<i class="fa fa-users color-agna"></i>
						<span>Clientes</span>
					</a>
				</li>';
			}

			echo '<br>';

			if ($_SESSION["perfil"] == "administrador" || $_SESSION["perfil"] == "especial") {

				echo '

				<li class="treeview">
					<a href="#">
						<i class="fa fa-th color-agna"></i>
						<span>Gestor Categorías</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>

					<ul class="treeview-menu">
						<li><a href="categorias"><i class="fa fa-circle-o color-agna"></i> Categorías</a></li>
						<li><a href="subcategorias"><i class="fa fa-circle-o color-agna"></i> Subcategorías</a></li>
					</ul>
				</li>


				<li>
					<a href="productos">
						<i class="fa fa-product-hunt color-agna"></i>
						<span>Productos</span>
					</a>
				</li>
				
				<li>
					<a href="inventarios">
						<i class="fa fa-cubes color-agna"></i>
						<span>Agregar Inventario</span>
					</a>
				</li>';
			}

			if ($_SESSION["perfil"] == "administrador" || $_SESSION["perfil"] == "vendedor") {

				echo '<li class="treeview color-agna">

					<a href="#">

						<i class="fa fa-list-ul color-agna"></i>
						
						<span>Ventas</span>
						
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>

					</a>

					<ul class="treeview-menu">

						<li>
							<a href="ventas">
								<i class="fa fa-circle-o color-agna"></i>
								<span>Administrar ventas</span>
							</a>
						</li>

						<li>
							<a href="crear-venta">
								<i class="fa fa-circle-o color-agna"></i>
								<span>Crear venta</span>
							</a>
						</li>';

				if ($_SESSION["perfil"] == "administrador") {
					echo '<li>
								<a href="reportes">
									<i class="fa fa-circle-o color-agna"></i>
									<span>Reporte de ventas</span>
								</a>
							</li>';
				}

				echo '</ul>

				</li>';
			}

			?>

		</ul>

	</section>

</aside>
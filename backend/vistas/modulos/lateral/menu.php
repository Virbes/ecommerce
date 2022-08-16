<!--=====================================
MENU
======================================-->	
<ul class="sidebar-menu">

	<li class="active"><a href="inicio"><i class="fa fa-home color-agna"></i> <span>Inicio</span></a></li>
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

    <li><a href="productos"><i class="fa fa-product-hunt color-agna"></i> <span>Gestor Productos</span></a></li>

    <?php
      if (false) {//if($_SESSION["perfil"] == "administrador"){
          echo '<li><a href="ventas"><i class="fa fa-shopping-cart color-agna"></i> <span>Gestor Ventas</span></a></li>';
      }
    ?>

    <li><a href="usuarios"><i class="fa fa-users color-agna"></i> <span>Gestor Usuarios</span></a></li>

    <?php
      if($_SESSION["perfil"] == "administrador"){
        echo '<li><a href="perfiles"><i class="fa fa-key color-agna"></i> <span>Gestor Perfiles</span></a></li>';
      }
    ?>

    <br><br>

    <li><a href="pedidos"><i class="fa fa-envelope color-agna"></i> <span>Gestor Pedidos</span></a></li>
    <!-- <li><a href="slide"><i class="fa fa-edit color-agna"></i> <span>Gestor Slide</span></a></li> -->
    <!-- <li><a href="banner"><i class="fa fa-map-o color-agna"></i> <span>Gestor Banner</span></a></li> -->
    <!-- <li><a href="visitas"><i class="fa fa-map-marker color-agna"></i> <span>Gestor Visitas</span></a></li> -->
    <?php
      if(false){//if($_SESSION["perfil"] == "administrador"){
        echo '<li><a href="comercio"><i class="fa fa-files-o color-agna"></i> <span>Gestor Comercio</span></a></li>';
      }
    ?>

</ul>	
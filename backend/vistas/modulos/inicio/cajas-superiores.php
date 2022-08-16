<?php

$ventas = ControladorVentas::ctrMostrarTotalVentas();

//$visitas = ControladorVisitas::ctrMostrarTotalVisitas();
//$categorias = count(ControladorCategorias::ctrMostrarCategorias(null, null));
$pedidos = count(ControladorPedidos::ctrMostrarPedidosFecha(date('Y-m-d')));

$usuarios = ControladorUsuarios::ctrMostrarTotalUsuarios("id");
$totalUsuarios = count($usuarios);

$productos = ControladorProductos::ctrMostrarTotalProductos("id");
$totalProductos = count($productos);

?>

<!--=====================================
CAJAS SUPERIORES
======================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">
  
  <!-- small box -->
  <div class="small-box bg-aqua">
    
    <!-- inner -->
    <div class="inner">
      <h3>$<?php echo number_format($ventas["total"]); ?></h3>
      <p>Ventas</p>
    </div>
    <!-- inner -->

    <!-- icon -->
    <div class="icon">
      <i class="fa fa-usd"></i>
    </div>

    <!-- icon -->
    
    <a href="ventas" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
  
  </div>
  <!-- small-box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">
  
  <!-- small box -->
  <div class="small-box bg-green">

    <!-- inner -->
    <div class="inner">
      <h3><?php echo number_format($pedidos); ?></h3>
      <p>Pedidos</p>
    </div>
    <!-- inner -->
    

    <!-- icon -->
    <div class="icon">
      <i class="fa fa-clipboard"></i>
    </div>
    <!-- icon -->

    <a href="pedidos" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
  
  </div>
  <!-- small box -->

</div>
<!-- col -->


<!--===========================================================================-->


<!-- col -->
<div class="col-lg-3 col-xs-6">
  
  <!-- small box -->
  <div class="small-box bg-yellow">
    
    <!-- inner -->
    <div class="inner">
      <h3><?php echo number_format($totalUsuarios); ?></h3>

      <p>Usuarios (Ecommerce)</p>
    
    </div>
    <!-- inner -->

    <!-- icon -->
    <div class="icon">
      
      <i class="fa fa-user"></i>
    
    </div>
    <!-- icon -->

    <a href="usuarios" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
  
  </div>
  <!-- small box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">
  
  <!-- small box -->
  <div class="small-box bg-red">
  
    <!-- inner -->
    <div class="inner">
    
      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Productos</p>

    </div>
    <!-- inner -->
    
    <!-- icon -->
    <div class="icon">
      
      <i class="fa fa-shopping-cart"></i>
    
    </div>
    <!-- icon -->
    
    <a href="productos" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
  
  </div>
  <!-- small box -->

</div>
<!-- col -->

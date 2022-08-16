<div class="content-wrapper">

  <section class="content-header">
    
    <h1>Tablero<small>Panel de Control</small></h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Tablero</li>
    </ol>

  </section>

  <section class="content">

  <div class="row">

    <?php
      if($_SESSION["perfil"] =="administrador"){
        include "inicio/cajas-superiores.php";
      }
    ?>

  </div>

  <div class="row">
       
    <div class="col-lg-12">

      <?php

        if($_SESSION["perfil"] =="administrador"){
           include "reportes/grafico-ventas.php";
        }

      ?>

    </div>

    <div class="col-lg-6">

      <?php

        if($_SESSION["perfil"] =="administrador"){
          
          include "reportes/productos-mas-vendidos.php";

        }

      ?>

    </div>

    <div class="col-lg-6">

      <?php

        if($_SESSION["perfil"] =="administrador"){
          
           include "inicio/productos-recientes.php";

        }

      ?>

    </div>

    <div class="col-lg-12">
           
          <?php

          if($_SESSION["perfil"] =="especial" || $_SESSION["perfil"] =="vendedor"){
             echo '
             <div class="box box-success">
              <div class="box-header">
                <h1 style="color: #ccc">Bienvenid@ ' .$_SESSION["nombre"].'</h1>
              </div>
             </div>';

          }

          ?>

         </div>

  </section>

</div>
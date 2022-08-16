<div class="content-wrapper">

  <section class="content-header">

   <h1>
      Agregar Productos al Inventario
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Agregar Productos</li>
    </ol>

  </section>


  <section class="content">
    <div class="box">

      <div class="box-header with-border"></div>

      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tablaInventarios" width="100%">
        
          <thead>
            <tr>
               <th style="width:10px">#</th>
               <th>Código</th>
               <th>Titulo</th>
               <th>Categoria</th>
               <th>Subcategoria</th>
               <th>Cantidad</th>
               <th>Imagen Principal</th>
               <th>Precio</th>
               <th>Acciones</th>
            </tr> 
          </thead>
     
        </table>    

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO => INVENTARIO
======================================-->

<div id="modalAgregarInventario" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       
      <form role="form" method="post" enctype="multipart/form-data">   
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#ff6600; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar al Inventario</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">

            <!--=====================================
            TITULO PRODUCTO
            ======================================-->
            <div class="form-group">
                <div class="input-group">              
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
                  <input type="text" class="form-control input-lg tituloProducto"  value="" readonly>
                  <input type="hidden" class="idProducto">
                  <input type="hidden" class="cantidadActualInventario">
                </div>
            </div>

            <!--=====================================
            CANTIDAD ACTUAL
            ======================================-->
            <div class="form-group">
                <div class="input-group">              
                  <span class="input-group-addon"><i class="fa fa-hashtag"></i></span> 
                  <input type="text" class="form-control input-lg cantidadActual"  value="Cantidad Actual" readonly>
                </div>
            </div>

            <!--=====================================
            ENTRADA PARA LA CANTIDAD DEL PRODUCTO
            ======================================-->
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-plus"></i></span> 
                  <input type="number" class="form-control input-lg cantidadAgregada" placeholder="Cantidad a agregar" min="1" value="1">
                </div>
            </div>
        
          </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button style="background-color: #ff6600;" type="button" class="btn btn-primary guardarCambios">
            Guardar cambios
          </button>
        </div>

      </form>

     </div>
   </div>
</div>

<div id="modalQuitarInventario" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       
      <form role="form" method="post" enctype="multipart/form-data">   
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#ff6600; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Quitar productos del Inventario</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">

            <!--=====================================
            TITULO PRODUCTO
            ======================================-->
            <div class="form-group">
                <div class="input-group">              
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
                  <input type="text" class="form-control input-lg tituloProducto"  value="" readonly>
                  <input type="hidden" class="idProducto">
                  <input type="hidden" class="cantidadActualInventario">
                </div>
            </div>

            <!--=====================================
            CANTIDAD ACTUAL
            ======================================-->
            <div class="form-group">
                <div class="input-group">              
                  <span class="input-group-addon"><i class="fa fa-hashtag"></i></span> 
                  <input type="text" class="form-control input-lg cantidadActual"  value="Cantidad Actual" readonly>
                </div>
            </div>

            <!--=====================================
            ENTRADA PARA LA CANTIDAD DEL PRODUCTO
            ======================================-->
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-minus"></i></span> 
                  <input type="number" class="form-control input-lg cantidadQuitada" placeholder="Cantidad a aquitar" min="1" value="1">
                </div>
            </div>
        
          </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button style="background-color: #ff6600;" type="button" class="btn btn-primary guardarCambiosMenos">
            Guardar cambios
          </button>
        </div>

      </form>

     </div>
   </div>
</div>


<?php
  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();
?>
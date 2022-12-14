<div class="content-wrapper">

  <section class="content-header">

   <h1>
      Gestor Productos
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Gestor Productos</li>
    </ol>

  </section>


  <section class="content">
    <div class="box">
      <div class="box-header with-border">
         
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          Agregar Producto
        </button>

        <!-- <a class="btn btn-primary" href="">
          Agregar Producto
        </a> -->

      </div>

      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
        
          <thead>
            <tr>
               <th style="width:10px">#</th>
               <th>Titulo</th>
               <th>Categoria</th>
               <th>Subcategoria</th>
               <th>Ruta</th>
               <th>Estado</th>
               <th>Marca</th>
               <th>Imagen Principal</th>
               <th>Precio</th>
               <th>Stock</th>
               <th>Acciones</th>
            </tr> 
          </thead>
     
        </table>    

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       
      <form role="form" method="post" enctype="multipart/form-data">   
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#ff6600; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar producto</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL T??TULO
            ======================================-->
            <div class="form-group">
                <div class="input-group">              
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
                  <input type="text" class="form-control input-lg validarProducto tituloProducto"  placeholder="Ingresar t??tulo producto">
                </div>
            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-link"></i></span> 
                  <input type="text" class="form-control input-lg rutaProducto" placeholder="Ruta url del producto" readonly>
                </div>
            </div>

            <!--=====================================
            ENTRADA PARA EL C??DIGO DEL PRODUCTO
            ======================================-->
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></span> 
                  <input type="number" class="form-control input-lg validarCodigo codigoProducto" placeholder="C??digo de barras del producto">
                </div>
            </div>


            <!--=====================================
            ENTRADA PARA AGREGAR MULTIMEDIA
            ======================================-->
            <div class="form-group agregarMultimedia"> 

              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO F??SICO
              ======================================-->
              <div class="multimediaFisica needsclick dz-clickable">
                <div class="dz-message needsclick">
                  Arrastrar o dar click para subir imagenes.
                </div>
              </div>

            </div>


            <!--=====================================
            AGREGAR DETALLES F??SICOS
            ======================================-->  
            <div class="detallesFisicos">
              <div class="panel">DETALLES</div>

              <!-- MARCA -->
              <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Marca" readonly>
                </div>

                <div class="col-xs-9">
                    <input class="form-control input-lg marcaProducto" type="text">
                </div>

              </div>

            </div> 

           <!--=====================================
            AGREGAR CATEGOR??A
            ======================================-->
            <div class="form-group">
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                  <select class="form-control input-lg seleccionarCategoria">
                    <option value="">Selecionar categor??a</option>

                    <?php
                      $item = null;
                      $valor = null;

                      $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                      foreach ($categorias as $key => $value) {
                        
                        echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                      }
                    ?>

                  </select>

                </div>
            </div>

            <!--=====================================
            AGREGAR SUBCATEGOR??A
            ======================================-->
            <div class="form-group  entradaSubcategoria" style="display:none">
               <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                  <select class="form-control input-lg seleccionarSubCategoria">
                  </select>
                </div>
            </div>


           <!--=====================================
            AGREGAR DESCRIPCI??N
            ======================================-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 
                <textarea type="text" maxlength="320" rows="3" class="form-control input-lg descripcionProducto" placeholder="Ingresar descripci??n producto"></textarea>
              </div>
            </div>

            <!--=====================================
            AGREGAR FOTO DE PORTADA
            ======================================-->
            <div class="form-group" style="display: none;">
              <div class="panel">SUBIR FOTO PORTADA</div>
              <input type="file" class="fotoPortada">
              <p class="help-block">Tama??o recomendado 1280px * 720px <br> Peso m??ximo de la foto 2MB</p>
              <img src="vistas/img/cabeceras/default/default.jpg" class="img-thumbnail previsualizarPortada" width="100%">
            </div>



            <!--=====================================
            AGREGAR FOTO DE MULTIMEDIA
            ======================================-->
            <div class="form-group">    
              <div class="panel">SUBIR FOTO PRINCIPAL DEL PRODUCTO</div>
              <input type="file" class="fotoPrincipal">
              <p class="help-block">Tama??o recomendado 400px * 450px <br> Peso m??ximo de la foto 2MB</p>
              <img src="vistas/img/productos/default/default.jpg" class="img-thumbnail previsualizarPrincipal" width="200px">
            </div>


            <!--=====================================
            AGREGAR PRECIO, PESO Y ENTREGA
            ======================================-->
            <div class="form-group row">

              <!-- PRECIO -->
              <div class="col-md-6 col-xs-12">
                <div class="panel">PRECIO</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-usd"></i></span> 
                  <input type="number" class="form-control input-lg precio" min="0" step="any" placeholder="000.00   MXN" require>
                </div>
              </div>

              
              <style>.mg-left-v {margin-left: -17px;}</style>

               <!-- STOCK -->
               <div class="col-md-6 col-xs-12 mg-left-v">
                <div class="panel">STOCK</div>             
                <div class="input-group">             
                  <span class="input-group-addon"><i class="fa fa-cubes"></i></span> 
                  <input type="number" class="form-control input-lg stock" min="0" value="500">
                </div>
              </div>


            </div>

            <!--=====================================
            AGREGAR OFERTAS
            ======================================-->
            <div class="form-group">
              <select class="form-control input-lg selActivarOferta">
                <option value="">No tiene oferta</option>
                <option value="oferta">Activar oferta</option>
              </select>
            </div>

            <div class="datosOferta" style="display:none">
            
              <!--=====================================
              VALOR OFERTAS
              ======================================-->
              <div class="form-group row">

                <div class="col-xs-6">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="ion ion-social-usd"></i></span> 
                    <input class="form-control input-lg valorOferta precioOferta" tipo="oferta" type="number" value="0"   min="0" placeholder="Precio">
                  </div>
                </div>

                <div class="col-xs-6">
                  <div class="input-group">
                    <input class="form-control input-lg valorOferta descuentoOferta" tipo="descuento" type="number" value="0"  min="0" placeholder="Descuento">
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                  </div>
                </div>

              </div>

              <!--=====================================
              FECHA FINALIZACI??N OFERTA
              ======================================-->
              <div class="form-group">
                <div class="input-group date">    
                  <input type='text' class="form-control datepicker input-lg valorOferta finOferta">   
                  <span class="input-group-addon">     
                      <span class="glyphicon glyphicon-calendar"></span>   
                  </span>
                </div>
              </div>

              <!--=====================================
              FOTO OFERTA
              ======================================-->

              <div class="form-group">
                <div class="panel">SUBIR FOTO OFERTA</div>
                <input type="file" class="fotoOferta valorOferta">
                <p class="help-block">Tama??o recomendado 640px * 430px <br> Peso m??ximo de la foto 2MB</p>
                <img src="vistas/img/ofertas/default/default.jpg" class="img-thumbnail previsualizarOferta" width="100px">
              </div>

            </div>
          </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button style="background-color: #ff6600;" type="button" class="btn btn-primary guardarProducto">
            Guardar producto
          </button>
        </div>

      </form>

     </div>
   </div>
</div>



<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
<div id="modalEditarProducto" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
          
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#ff6600; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar producto</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL T??TULO
            ======================================-->
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
                  <input type="text" class="form-control input-lg validarProducto tituloProducto" readonly>
                  <input type="hidden" class="idProducto">
                  <input type="hidden" class="idCabecera">
                </div>
            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-link"></i></span> 
                  <input type="text" class="form-control input-lg rutaProducto" readonly>
                </div>
            </div>


            <!--=====================================
            ENTRADA PARA AGREGAR MULTIMEDIA
            ======================================-->
            <div class="form-group agregarMultimedia"> 
              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO F??SICO
              ======================================-->
              <div class="row previsualizarImgFisico"></div>
              <div class="multimediaFisica needsclick dz-clickable">
                <div class="dz-message needsclick">
                  Arrastrar o dar click para subir imagenes.
                </div>
              </div>
   
            </div>

          
            <!--=====================================
            AGREGAR DETALLES F??SICOS
            ======================================-->  
            <div class="detallesFisicos">
              <div class="panel">DETALLES</div>

              <!-- COLOR -->
              <div class="form-group row">
                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Color" readonly>
                </div>

                <div class="col-xs-9 editarColor">
                  <!--   <input class="form-control input-lg tagsInput detalleColor" data-role="tagsinput" type="text" placeholder="Separe valores con coma"> -->
                </div>
              </div>

              <!-- MARCA -->

              <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Marca" readonly>
                </div>

                <div class="col-xs-9 editarMarca">
                  <!--   <input class="form-control input-lg tagsInput detalleMarca" data-role="tagsinput" type="text" placeholder="Separe valores con coma"> -->
                </div>

              </div>

            </div> 

           <!--=====================================
            AGREGAR CATEGOR??A
            ======================================-->

            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                  <select class="form-control input-lg seleccionarCategoria">
                    <option class="optionEditarCategoria"></option>

                    <?php
                      $item = null;
                      $valor = null;

                      $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                      foreach ($categorias as $key => $value) {
                        
                        echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                      }
                    ?>

                  </select>
                </div>
            </div>


            <!--=====================================
            AGREGAR SUBCATEGOR??A
            ======================================-->
            <div class="form-group entradaSubcategoria">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                  <select class="form-control input-lg seleccionarSubCategoria">
                    <option class="optionEditarSubCategoria"></option>
                  </select>
                </div>
            </div>

           <!--=====================================
            AGREGAR DESCRIPCI??N
            ======================================-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 
                <textarea type="text" maxlength="320" rows="3" class="form-control input-lg descripcionProducto"></textarea>
              </div>
            </div>

            <!--=====================================
            AGREGAR FOTO DE PORTADA
            ======================================-->

            <div class="form-group">
              
              <div class="panel">SUBIR FOTO PORTADA</div>

              <input type="file" class="fotoPortada">
              <input type="hidden" class="antiguaFotoPortada">

              <p class="help-block">Tama??o recomendado 1280px * 720px <br> Peso m??ximo de la foto 2MB</p>

              <img src="vistas/img/cabeceras/default/default.jpg" class="img-thumbnail previsualizarPortada" width="100%">

            </div>

            <!--=====================================
            AGREGAR FOTO DE MULTIMEDIA
            ======================================-->

            <div class="form-group">
              <div class="panel">SUBIR FOTO PRINCIPAL DEL PRODUCTO</div>
              <input type="file" class="fotoPrincipal">
              <input type="hidden" class="antiguaFotoPrincipal">
              <p class="help-block">Tama??o recomendado 400px * 450px <br> Peso m??ximo de la foto 2MB</p>
              <img src="vistas/img/productos/default/default.jpg" class="img-thumbnail previsualizarPrincipal" width="200px">
            </div>

            <!--=====================================
            AGREGAR PRECIO, PESO Y ENTREGA
            ======================================-->
            <div class="form-group row">
              <!-- PRECIO -->
              <div class="col-md-4 col-xs-12">
                <div class="panel">PRECIO</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span> 
                  <input type="number" class="form-control input-lg precio" min="0" step="any">
                </div>
              </div>

              <!-- PESO -->
              <div class="col-md-4 col-xs-12">
                <div class="panel">PESO</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span> 
                  <input type="number" class="form-control input-lg peso" min="0" step="any" value="0">
                </div>
              </div>

              <!-- ENTREGA -->
              <div class="col-md-4 col-xs-12">
                <div class="panel">D??AS DE ENTREGA</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-truck"></i></span> 
                  <input type="number" class="form-control input-lg entrega" min="0" value="0">
                </div>
              </div>

            </div>

            <!--=====================================
            AGREGAR OFERTAS
            ======================================-->
            <div class="form-group">
              <select class="form-control input-lg selActivarOferta">
                <option value="">No tiene oferta</option>
                <option value="oferta">Activar oferta</option>
              </select>
            </div>

            <div class="datosOferta" style="display:none">
            
              <!--=====================================
              VALOR OFERTAS
              ======================================-->
              <div class="form-group row">

                <div class="col-xs-6">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="ion ion-social-usd"></i></span> 
                    <input class="form-control input-lg valorOferta precioOferta" tipo="oferta" type="number" value="0" min="0" placeholder="Precio">
                  </div>
                </div>

                <div class="col-xs-6">
                  <div class="input-group">
                    <input class="form-control input-lg valorOferta descuentoOferta" tipo="descuento" type="number" value="0"  min="0" placeholder="Descuento">
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                  </div>
                </div>

              </div>

              <!--=====================================
              FECHA FINALIZACI??N OFERTA
              ======================================-->
              <div class="form-group">
                <div class="input-group date">
                  <input type='text' class="form-control datepicker input-lg valorOferta finOferta">
                  <span class="input-group-addon">   
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>

              <!--=====================================
              FOTO OFERTA
              ======================================-->
              <div class="form-group">
                <div class="panel">SUBIR FOTO OFERTA</div>
                <input type="file" class="fotoOferta valorOferta">
                <input type="hidden" class="antiguaFotoOferta">
                <p class="help-block">Tama??o recomendado 640px * 430px <br> Peso m??ximo de la foto 2MB</p>
                <img src="vistas/img/ofertas/default/default.jpg" class="img-thumbnail previsualizarOferta" width="100px">
              </div>

            </div>
          </div>
        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="button" class="btn btn-primary guardarCambiosProducto">Guardar cambios</button>
        </div>

     </div>

   </div>

</div>


<!--=====================================
MODAL M??S INFORMACI??N
======================================-->
<div id="modalInfoProducto" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
          
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Informaci??n del producto</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">

            
            <!--=====================================
            NOMBRE Y RUTA DEL PRODUCTO
            ======================================-->
            <div class="form-group row">

              <!-- Nombre del producto -->
              <div class="col-md-6 col-xs-12">
                <div class="panel">Nombre del Producto</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
                  <input type="text" class="form-control input-lg validarProducto tituloProducto" readonly>
                </div>
              </div>

              <!-- RUTA del producto -->
              <div class="col-md-6 col-xs-12">
                <div class="panel">Ruta del producto</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-link"></i></span> 
                  <input type="text" class="form-control input-lg rutaProducto" readonly>
                </div>
              </div>

            </div>


            <!--=====================================
            MULTIMEDIA
            ======================================-->
            <div class="form-group agregarMultimedia"> 
              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO F??SICO
              ======================================-->
              <div class="row previsualizarImgFisico"></div>

              <!-- <div class="multimediaFisica needsclick dz-clickable">
                <div class="dz-message needsclick">
                  Arrastrar o dar click para subir imagenes.
                </div>
              </div> -->
   
            </div>

          
            <!--=====================================
            AGREGAR DETALLES F??SICOS
            ======================================-->  
            <div class="detallesFisicos">
              <div class="panel">DETALLES</div>

              <!-- COLOR -->
              <div class="form-group row">
                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Color" readonly>
                </div>

                <div class="col-xs-9 editarColor">
                  <!--   <input class="form-control input-lg tagsInput detalleColor" data-role="tagsinput" type="text" placeholder="Separe valores con coma"> -->
                </div>
              </div>

              <!-- MARCA -->

              <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Marca" readonly>
                </div>

                <div class="col-xs-9 editarMarca">
                  <!--   <input class="form-control input-lg tagsInput detalleMarca" data-role="tagsinput" type="text" placeholder="Separe valores con coma"> -->
                </div>

              </div>

            </div> 

           <!--=====================================
            CATEGORIA DEL PRODUCTO
            ======================================-->
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                  <select class="form-control input-lg seleccionarCategoria" disabled>
                    <option class="optionEditarCategoria">Cat</option>
                  </select>
                </div>
            </div>


            <!--=====================================
            SUBCATEGORIA DEL PRODUCTO
            ======================================-->
            <div class="form-group entradaSubcategoria">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                  <select class="form-control input-lg seleccionarSubCategoria" disabled>
                    <option class="optionEditarSubCategoria">SubCat</option>
                  </select>
                </div>
            </div>

           <!--=====================================
            DESCRIPCI??N
            ======================================-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 
                <textarea type="text" maxlength="320" rows="3" class="form-control input-lg descripcionProducto" readonly></textarea>
              </div>
            </div>

            <!--=====================================
            AGREGAR PALABRAS CLAVES
            ======================================-->

            <div class="form-group editarPalabrasClaves">
              
              <!--   <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                  <input type="text" class="form-control input-lg tagsInput pClavesProducto" data-role="tagsinput"  placeholder="Ingresar palabras claves">

                </div> -->

            </div>

            <!--=====================================
            FOTO DE PORTADA
            ======================================-->
            <div class="form-group">
              <img src="vistas/img/cabeceras/default/default.jpg" class="img-thumbnail previsualizarPortada" width="100%">
            </div>



            <!--=====================================
            FOTO DE MULTIMEDIA
            ======================================-->
            <div class="form-group">
              <img src="vistas/img/productos/default/default.jpg" class="img-thumbnail previsualizarPrincipal" width="200px">
            </div>


            <!--=====================================
            PRECIO, PESO Y ENTREGA
            ======================================-->
            <div class="form-group row">
              <!-- PRECIO -->
              <div class="col-md-4 col-xs-12">
                <div class="panel">PRECIO</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span> 
                  <input type="number" class="form-control input-lg precio" readonly>
                </div>
              </div>

              <!-- PESO -->
              <div class="col-md-4 col-xs-12">
                <div class="panel">PESO</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span> 
                  <input type="number" class="form-control input-lg peso"readonly>
                </div>
              </div>

              <!-- ENTREGA -->
              <div class="col-md-4 col-xs-12">
                <div class="panel">D??AS DE ENTREGA</div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-truck"></i></span> 
                  <input type="number" class="form-control input-lg entrega" readonly>
                </div>
              </div>

            </div>

            <!--=====================================
            SECCI??N DE OFERTAS
            ======================================-->
            <div class="form-group">
              <select class="form-control input-lg selActivarOferta" disabled>
                <option value="">No tiene oferta</option>
                <option value="oferta">Activar oferta</option>
              </select>
            </div>

            <div class="datosOferta" style="display:none">
            
              <!--=====================================
              VALOR OFERTAS
              ======================================-->
              <div class="form-group row">

                <div class="col-xs-6">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="ion ion-social-usd"></i></span> 
                    <input class="form-control input-lg valorOferta precioOferta" tipo="oferta" type="number" value="0" min="0" placeholder="Precio">
                  </div>
                </div>

                <div class="col-xs-6">
                  <div class="input-group">
                    <input class="form-control input-lg valorOferta descuentoOferta" tipo="descuento" type="number" value="0"  min="0" placeholder="Descuento">
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                  </div>
                </div>

              </div>

              <!--=====================================
              FECHA FINALIZACI??N OFERTA
              ======================================-->
              <div class="form-group">
                <div class="input-group date">
                  <input type='text' class="form-control datepicker input-lg valorOferta finOferta">
                  <span class="input-group-addon">   
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>

              <!--=====================================
              FOTO OFERTA
              ======================================-->
              <div class="form-group">
                <div class="panel">SUBIR FOTO OFERTA</div>
                <input type="file" class="fotoOferta valorOferta">
                <input type="hidden" class="antiguaFotoOferta">
                <p class="help-block">Tama??o recomendado 640px * 430px <br> Peso m??ximo de la foto 2MB</p>
                <img src="vistas/img/ofertas/default/default.jpg" class="img-thumbnail previsualizarOferta" width="100px">
              </div>

            </div>
          </div>
        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        </div>

     </div>

   </div>

</div>

<?php
  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();
?>
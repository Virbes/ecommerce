<!-- Slide SHOW -->
<div class="container-fluid" id="slide">
    <div class="row" id="slide_row">

        <!-- Diapositivas -->
        <ul>
			<?php
				$servidor = Ruta::ctrRutaServidor();
			?>
            <!-- Slide 1 -->
            <li>
                <img src="<?php echo $servidor?>vistas/img/slide/slide1/backsd.png">
                
                <div class="slideOpciones slideOpcion1">
                    <!-- <img src="" class="imgProducto" style="right:8%; width: 37%;"> -->
                    
                    <div class="textoSlide">
                        <h1 style="color: rgb(56 55 55);">Ferreteria AGNA &copy;</h1>
                        <h2 style="color: #fff">Estamos ubicados en</h2>
                        <h3 style="color: #fff">Comitán de Domínguez, Chiapas</h3>

                        <a href="https://www.google.com/maps?ll=16.237184,-92.139696&z=15&t=m&hl=es-419&gl=MX&mapclient=embed&cid=2167700954537997141" style="z-index: 1;" target="_blank">
                            <button class="btn btn-default backColor">
                                VER DIRECCION <span class="fa fa-chevron-right"></span>
                            </button>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Slide 2 -->
            <li>
                <img src="<?php echo $servidor?>vistas/img/slide/slide4/material4.png">
                
                <div class="slideOpciones slideOpcion1">
                    <img src="" class="imgProducto">
                    <!-- <img src="http://localhost/backend/view/img/slide/slide2/curso.png" class="imgProducto"> -->
                    
                    <div class="textoSlide" style="display: none;">
       

                        <br>
                        <h1 style="color: #eee">Lorem, ipsum.</h1>
                        <h2 style="color: #ccc">Lorem, ipsum dolor..</h2>
                        <h3 style="color: #aaa">Lorem ipsum dolor sit.</h3>

                        <a href="#">
                            <button class="btn btn-default backColor">
                                VER PRODUCTO <span class="fa fa-chevron-right"></span>
                            </button>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Slide 3 -->
            <li>
                <img src="<?php echo $servidor?>vistas/img/slide/slide3/material3.jpg">
                
                <div class="slideOpciones slideOpcion1">
                    <img src="" class="imgProducto">
                    <!-- <img src="http://localhost/backend/view/img/slide/slide3/iphone.png" class="imgProducto"> -->
                    
                    <!-- <div class="textoSlide">
                        <h1 style="color: #eee">Lorem, ipsum.</h1>
                        <h2 style="color: #ccc">Lorem, ipsum dolor..</h2>
                        <h3 style="color: #aaa">Lorem ipsum dolor sit.</h3>

                        <a href="#">
                            <button class="btn btn-default backColor">
                                VER PRODUCTO <span class="fa fa-chevron-right"></span>
                            </button>
                        </a>
                    </div> -->

                </div>
            </li>

            <!-- Slide 4 -->
            <li>
                <img src="<?php echo $servidor?>vistas/img/slide/slide2/imagen.jpg">
                
                <div class="slideOpciones slideOpcion1">
                    <img src="" class="imgProducto">
                    
                    <!-- <div class="" id="ayuda">
                        <a href="#">
                            <button class="btn btn-default backColor">
                                SEGUIR LEYENDO <span class="fa fa-chevron-right"></span>
                            </button>
                        </a>
                    </div> -->

                </div>
            </li>

        </ul>

        <!-- Paginación -->
        <ol id="paginacion">
            <li item="1"><span class="fa fa-circle"></span></li>
            <li item="2"><span class="fa fa-circle"></span></li>
            <li item="3"><span class="fa fa-circle"></span></li>
            <li item="4"><span class="fa fa-circle"></span></li>
        </ol>

        <!-- Flechas -->
        <div class="flechas" id="previous">
            <span class="fa fa-chevron-left" style="position: relative;margin-left: -5px;"></span>
        </div>
        
        <div class="flechas" id="next"><span class="fa fa-chevron-right"></span></div>

    </div>
</div>

<center>
    <button id="botonSlide" style="background-color: rgb(255 255 255 / 0%)">
        <i class="fa fa-angle-up" style="position: relative; top: -4px"></i>
    </button>
</center>
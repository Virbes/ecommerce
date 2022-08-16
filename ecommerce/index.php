<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/carrito.controlador.php";
require_once "controladores/visitas.controlador.php";
require_once "controladores/notificaciones.controlador.php";
require_once "controladores/pedidos.controlador.php";

require_once "modelos/plantilla.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/slide.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/carrito.modelo.php";
require_once "modelos/visitas.modelo.php";
require_once "modelos/notificaciones.modelo.php";
require_once "modelos/pedidos.modelo.php";
require_once "modelos/contactanos.modelo.php";

require_once "modelos/rutas.php";

//require_once "extensiones/PHPMailer/PHPMailerAutoload.php";
//require_once "extensiones/PHPMailer/src/PHPMailer.php";
require_once "extensiones/vendor/autoload.php";

require 'extensiones/PHPMailer/src/Exception.php';
require 'extensiones/PHPMailer/src/PHPMailer.php';
require 'extensiones/PHPMailer/src/SMTP.php';


$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
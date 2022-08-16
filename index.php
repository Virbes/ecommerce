<?php

require_once "controladores/administradores.controlador.php";
require_once "controladores/cabeceras.controlador.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/subcategorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/validaciones.ajax.php";

require_once "modelos/administradores.modelo.php";
require_once "modelos/cabeceras.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/subcategorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/validaciones.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();


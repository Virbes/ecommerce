<?php

if (isset($_POST['action'])) {

    require_once "../modelos/productos.modelo.php";
    $ModeloProductos = new ModeloProductos;

    switch ($_POST['action']) {
        case 'eliminarProducto': $ModeloProductos -> mdlEliminarProducto('productos', $_POST['idProducto']);break;
    }

}
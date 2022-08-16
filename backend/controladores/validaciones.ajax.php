<?php

if (isset($_POST['action'])) {

    require_once "../modelos/validaciones.modelo.php";
    $validaciones = new Validaciones;

    switch ($_POST['action']) {
        case 'eliminarcategoria': $validaciones -> validarEliminarCategoria();break;
        case 'eliminarsubcategoria': $validaciones -> validarEliminarSubCategoria();
    }

}

class Validaciones {

    public function validarEliminarCategoria() {
        $id_categoria = $_POST['id_categoria'];
        $is_okay = ModeloValidaciones::validarEliminarCategoria($id_categoria);

        if ($is_okay) {
            echo 'ok';
        } else {
            echo 'false';
        }
    }

    public function validarEliminarSubCategoria() {
        $id_subcategoria = $_POST['id_subcategoria'];
        $is_okay = ModeloValidaciones::validarEliminarSubCategoria($id_subcategoria);

        if ($is_okay) {
            echo 'ok';
        } else {
            echo 'false';
        }
    }

}

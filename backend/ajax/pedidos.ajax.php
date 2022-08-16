<?php

require_once "../controladores/pedidos.controlador.php";
require_once "../modelos/pedidos.modelo.php";

class AjaxPedidos {
 
    /*=============================================
    CANCELAR PEDIDO
    =============================================*/ 

    public $idPedido;
    public function ajaxCancelarPedido(){
      $val = $this->idPedido;
      $respuesta = ControladorPedidos::ctrCancelarPedido($val);

      echo $respuesta;

    }

    public function ajaxEntregarPedido(){
      $val = $this->idPedido;
      $respuesta = ControladorPedidos::ctrEntregarPedido($val);

      echo json_encode($respuesta);

    }

}







/*=============================================
Cancelar PEDIDO
=============================================*/
if(isset($_POST["idPedido"])){

  $cancelar = new AjaxPedidos();
  $cancelar -> idPedido = $_POST["idPedido"];
  $cancelar -> ajaxCancelarPedido();

}


/*=============================================
ENTREGAR PEDIDIDO
=============================================*/
if(isset($_POST["idPedidox"])){

    $entregar = new AjaxPedidos();
    $entregar -> idPedido = $_POST["idPedidox"];
    $entregar -> ajaxEntregarPedido();
  
}

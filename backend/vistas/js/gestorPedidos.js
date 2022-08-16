/*=============================================
CARGAR LA TABLA DINÁMICA DE BANNER
=============================================*/

// $.ajax({
// 	url:"ajax/tablaPedidos.ajax.php",
// 	success:function(respuesta){
// 		console.log(respuesta);
// 	}
// });

$(".tablaPedidosNoEntregados").DataTable({
    "ajax": "ajax/tablaPedidos.ajax.php",
    "deferRender": true,
    "retrieve": true,
    "processing": true,
    "language": {

        "sProcessing":     "Procesando...",
       "sLengthMenu":     "Mostrar _MENU_ registros",
       "sZeroRecords":    "No se encontraron resultados",
       "sEmptyTable":     "Ningún dato disponible en esta tabla",
       "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
       "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
       "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
       "sInfoPostFix":    "",
       "sSearch":         "Buscar:",
       "sUrl":            "",
       "sInfoThousands":  ",",
       "sLoadingRecords": "Cargando...",
       "oPaginate": {
           "sFirst":    "Primero",
           "sLast":     "Último",
           "sNext":     "Siguiente",
           "sPrevious": "Anterior"
       },
       "oAria": {
               "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
               "sSortDescending": ": Activar para ordenar la columna de manera descendente"
       }

    }

});

$(".tablaPedidosEntregados").DataTable({
  "ajax": "ajax/TablaPedidosSuccess.ajax.php",
  "deferRender": true,
  "retrieve": true,
  "processing": true,
  "language": {

      "sProcessing":     "Procesando...",
     "sLengthMenu":     "Mostrar _MENU_ registros",
     "sZeroRecords":    "No se encontraron resultados",
     "sEmptyTable":     "Ningún dato disponible en esta tabla",
     "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
     "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
     "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
     "sInfoPostFix":    "",
     "sSearch":         "Buscar:",
     "sUrl":            "",
     "sInfoThousands":  ",",
     "sLoadingRecords": "Cargando...",
     "oPaginate": {
         "sFirst":    "Primero",
         "sLast":     "Último",
         "sNext":     "Siguiente",
         "sPrevious": "Anterior"
     },
     "oAria": {
             "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
             "sSortDescending": ": Activar para ordenar la columna de manera descendente"
     }

  }

});




/*=============================================
CANCELAR PEDIDO
=============================================*/
$(".tablaPedidosNoEntregados tbody").on("click", ".btnCancelarPedido", function(){

  var idPedido = $(this).attr("idPedido");

   swal({
       title: '¿Está seguro que desea cancelar el pedido?',
       text: "",
       type: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         cancelButtonText: 'Cancelar',
         confirmButtonText: 'Si, cancelar pedido!'
        }).then(function(result){

          if(result.value){

            var datos = new FormData();
            datos.append("idPedido", idPedido);

            $.ajax({

              url:"ajax/pedidos.ajax.php",
              method: "POST",
               data: datos,
               cache: false,
               contentType: false,
               processData: false,
               success: function(respuesta){ 
                location.reload();
               } 	 
      
           });

          }

     });
});







/*=============================================
ENTREGADO
=============================================*/
$(".tablaPedidosNoEntregados tbody").on("click", ".btnSuccess", function(){

  var idPedido = $(this).attr("idPedido");

   swal({
       title: '¿Está seguro que desea marcar como producto entregado?',
       text: "",
       type: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         cancelButtonText: 'Cancelar',
         confirmButtonText: 'Si, entregar producto!'
        }).then(function(result){

          if(result.value){

            var datos = new FormData();
            datos.append("idPedidox", idPedido);

            $.ajax({

              url:"ajax/pedidos.ajax.php",
              method: "POST",
               data: datos,
               cache: false,
               contentType: false,
               processData: false,
               success: function(respuesta){ 
                location.reload();
               } 	 
      
           });

          }

     })



})


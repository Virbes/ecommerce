/*=============================================
CARGAR LA TABLA DINÁMICA DE PRODUCTOS
=============================================*/

// $.ajax({
// 	url:"ajax/tablaProductos.ajax.php",
// 	success:function(respuesta){
// 		console.log("respuesta", respuesta);
// 	}
// });

$('.tablaInventarios').DataTable({
	"ajax":"ajax/tablaInventarios.ajax.php",
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
GUARDAR CAMBIOS
=============================================*/

$(".guardarCambios").click(function(){

	$(this).prop('disabled', true)

	/*=============================================
	PREGUNTAMOS SI LOS CAMPOS OBLIGATORIOS ESTÁN LLENOS
	=============================================*/

	if ($(".cantidadAgregada").val() != "") {
		agregarInventario(true);
	}else{
		

		swal({
	      title: "Llenar todos los campos obligatorios",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

		$(this).prop('disabled', false)

		return;
	}

});

$(".guardarCambiosMenos").click(function(){

	$(this).prop('disabled', true)

	/*=============================================
	PREGUNTAMOS SI LOS CAMPOS OBLIGATORIOS ESTÁN LLENOS
	=============================================*/

	if ($(".cantidadQuitada").val() != "") {
		console.log($(this).val());
		agregarInventario(false);
	}else{
		

		swal({
	      title: "Llenar todos los campos obligatorios",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

		$(this).prop('disabled', false)

		return;
	}

});

function agregarInventario(action){

	if (action) {
		/*=============================================
		ALMACENAMOS LA CANTIDAD A AGREGAR
		=============================================*/
		var idProductoInventario = $(".idProducto").val();

		var cantidadActual = parseInt($('.cantidadActualInventario').val());
		var cantidad       = parseInt($(".cantidadAgregada").val());

		var total = cantidadActual + cantidad;

	 	var datosProducto = new FormData();
		datosProducto.append("idProductoInventario", idProductoInventario);
		datosProducto.append("cantidad", total);

		$.ajax({
				url:"ajax/productos.ajax.php",
				method: "POST",
				data: datosProducto,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta){
					if(respuesta == "ok"){
						swal({
						  type: "success",
						  title: "Agregado al inventario correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {
								window.location = "inventarios";
							}
						});
					}

				}

		});
	} else {

		/*=============================================
		ALMACENAMOS LA CANTIDAD A AGREGAR
		=============================================*/
		var idProductoInventario = $("#modalQuitarInventario .idProducto").val();

		var cantidadActual = parseInt($('#modalQuitarInventario .cantidadActualInventario').val());
		var cantidad       = parseInt($(".cantidadQuitada").val());

		var total = cantidadActual - cantidad;

	 	var datosProducto = new FormData();
		datosProducto.append("idProductoInventario", idProductoInventario);
		datosProducto.append("cantidad", total);

		$.ajax({
				url:"ajax/productos.ajax.php",
				method: "POST",
				data: datosProducto,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta){
					if(respuesta == "ok"){
						swal({
						  type: "success",
						  title: "Actualizado Correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {
								window.location = "inventarios";
							}
						});
					}

				}

		});

	}
}

/*=============================================
AGREGAR PRODUCTO => INVENTARIO
=============================================*/
$('.tablaInventarios tbody').on("click", ".btnAgregarInventario", function(){
	
	var idProducto = $(this).attr("idProducto");
	
	var datos = new FormData();
	datos.append("idProducto", idProducto);

	$.ajax({

		url:"ajax/productos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			$("#modalAgregarInventario .idProducto").val(respuesta["id"]);
			$("#modalAgregarInventario .cantidadActualInventario").val(respuesta["stock"]);
			$("#modalAgregarInventario .tituloProducto").val(respuesta["titulo"]);
			$("#modalAgregarInventario .cantidadActual").val("Cantidad Actual: " + respuesta["stock"]);
		}

	})

});

/*=============================================
QUITAR PRODUCTO => INVENTARIO
=============================================*/
$('.tablaInventarios tbody').on("click", ".btnQuitarInventario", function(){
	
	var idProducto = $(this).attr("idProducto");
	
	var datos = new FormData();
	datos.append("idProducto", idProducto);

	$.ajax({

		url:"ajax/productos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			$("#modalQuitarInventario .idProducto").val(respuesta["id"]);
			$("#modalQuitarInventario .cantidadActualInventario").val(respuesta["stock"]);
			$("#modalQuitarInventario .tituloProducto").val(respuesta["titulo"]);
			$("#modalQuitarInventario .cantidadActual").val("Cantidad Actual: " + respuesta["stock"]);
		}

	})

});
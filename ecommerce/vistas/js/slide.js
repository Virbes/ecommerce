/*=============================================
VARIABLES
=============================================*/

var item = 0;
var itemPaginacion = $("#paginacion li");
var interrumpirCiclo = false;
var imgProducto = $(".imgProducto");
var titulos1 = $("#slide h1");
var titulos2 = $("#slide h2");
var titulos3 = $("#slide h3");
var btnVerProducto = $("#slide button");
var detenerIntervalo = false;
var toogle = false;

$("#slide ul li").css({"width":100/$("#slide ul li").length + "%"})
$("#slide ul").css({"width":$("#slide ul li").length*100 + "%"})

/*=============================================
ANIMACIÓN INICIAL
=============================================*/

$(imgProducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(imgProducto[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos1[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos1[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos2[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos2[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos3[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos3[item]).animate({"top":30 +"px", "opacity": 1},600)

$(btnVerProducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(btnVerProducto[item]).animate({"top":30 +"px", "opacity": 1},600)


/*=============================================
PAGINACIÓN
=============================================*/

$("#paginacion li").click(function(){

	item = $(this).attr("item")-1;

	movimientoSlide(item);

})

/*=============================================
AVANZAR
=============================================*/

function avanzar(){

	if(item == $("#slide ul li").length -1){

		item = 0;

	}else{

		item++

	}

	interrumpirCiclo = true;

	movimientoSlide(item);

}

$("#slide #next").click(function(){
	avanzar();
})

/*=============================================
RETROCEDER
=============================================*/

$("#slide #previous").click(function(){
	if(item == 0){
		item = $("#slide ul li").length -1;
	}else{
		item--
	}
	movimientoSlide(item);
})


/*=============================================
MOVIMIENTO SLIDE
=============================================*/

function movimientoSlide(item){

	$("#slide ul li").finish();

	// http://easings.net/es

	$("#slide ul").animate({"left": item * -100 + "%"}, 1000, "easeOutQuart")

	$("#paginacion li").css({"opacity":.5})

	$(itemPaginacion[item]).css({"opacity":1})

	interrumpirCiclo = true;

	$(imgProducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
	$(imgProducto[item]).animate({"top":30 +"px", "opacity": 1},600)

	$(titulos1[item]).animate({"top":-10 +"%", "opacity": 0},100)
	$(titulos1[item]).animate({"top":30 +"px", "opacity": 1},600)

	$(titulos2[item]).animate({"top":-10 +"%", "opacity": 0},100)
	$(titulos2[item]).animate({"top":30 +"px", "opacity": 1},600)

	$(titulos3[item]).animate({"top":-10 +"%", "opacity": 0},100)
	$(titulos3[item]).animate({"top":30 +"px", "opacity": 1},600)

	$(btnVerProducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
	$(btnVerProducto[item]).animate({"top":30 +"px", "opacity": 1},600)
}

/*=============================================
INTERVALO
=============================================*/

setInterval(function(){

	if(interrumpirCiclo){
		interrumpirCiclo = false;
		detenerIntervalo = false;
		$("#slide ul li").finish();
	}else{
		if(!detenerIntervalo){
			avanzar();
		}
	}

},9000)

/*=============================================
APARECER FLECHAS
=============================================*/

$("#slide").mouseover(function(){
	$("#slide #previous").css({"opacity":1})
	$("#slide #next").css({"opacity":1})
	detenerIntervalo = true;
});

$("#slide").mouseout(function(){
	$("#slide #previous").css({"opacity":0})
	$("#slide #next").css({"opacity":0})
	detenerIntervalo = false;
});

/** BotonSlide Hover */
$('#botonSlide').mouseover(function() {
	if (toogle) {
		$(this).css('background-color', '#ccc');
		$('#botonSlide i').css('color', '#000');
	} else {
		$(this).css('background-color', 'rgb(53, 53, 53)');
		$('#botonSlide i').css('color', '#fff');
	}
});

$('#botonSlide').mouseout(function() {
	$(this).css('background-color', 'rgb(255 255 255 / 0%)');
	$('#botonSlide i').css('color', '#000');
});

/*=============================================
ESCONDER SLIDE
=============================================*/

$("#botonSlide").click(function(){

	if(!toogle){
		toogle = true;
		$("#slide").slideUp("fast");
		$("#botonSlide").html('<i class="fa fa-angle-down"></i>')
	}else{
		toogle = false;
		$("#slide").slideDown("fast");
		$("#botonSlide").html('<i class="fa fa-angle-up"></i>')
	}

})
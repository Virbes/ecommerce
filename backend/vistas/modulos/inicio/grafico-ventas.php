<?php

error_reporting(0);
$ventas = ControladorVentas::ctrMostrarVentas();
$totalVentas = ControladorVentas::ctrMostrarTotalVentas();

$arrayFechas = array();
$arrayFechaPago = array();
$totalPaypal = 0;

#Evitamos repetir fecha
$noRepetirFechas = array_unique($arrayFechas);

?>


<!--=====================================
GRÁFICO DE VENTAS
======================================-->
<!-- solid sales graph -->
<div class="box box-solid bg-teal-gradient" style="display: none;">

	<!-- box-header -->
	<div class="box-header">

		<i class="fa fa-th"></i>

	    <h3 class="box-title">Gráfico de Ventas</h3>

	    <div class="box-tools pull-right">
	      
	      <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
	      </button>

	    </div>

	</div>
	<!-- box-header -->

	<!-- box-body -->
	<div class="box-body border-radius-none">

		<div class="chart" id="line-chart" style="height: 250px;"></div>

	</div>
	<!-- box-body -->

</div>
<!-- solid sales graph -->

<script>
	
var line = new Morris.Line({
    element          : 'line-chart',
    resize           : true,
    data             : [

    <?php

    	foreach ($noRepetirFechas as $value) {
    	
    	echo "{ y: '".$value."', ventas: ".$sumaPagosMes[$value]." },";
    		
    	}

      echo "{ y: '".$value."', ventas: ".$sumaPagosMes[$value]." }";

    ?>

    ],
    xkey             : 'y',
    ykeys            : ['ventas'],
    labels           : ['Ventas'],
    lineColors       : ['#efefef'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    preUnits		 : '$',
    gridTextSize     : 10
  });
	
</script>
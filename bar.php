<?php
require_once('chartJS/docs/php/connection.php');
?>
<!doctype html>
<html>
	<head>
		<title>EstadisticasBarras</title>
		<script src="chartJS/Chart.js"></script><!--TODO no le estas llegando a este archivo, así como lo estas llamando...-->
		<!--Parece que estuviera en la carpeta proyectosistemav4-->
		<!--Posiblemente sea ese el error que está mostrando la consola de del Chrome con respecto al JavaScript-->
	</head>
	<body>
		<div style="width: 50%">
			<canvas id="canvas" height="450" width="600"></canvas>
		</div>


	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [
        
		<?php
        $sql = "SELECT * FROM idoper";
        $result = mysqli_query($connection,$sql); 
        while ($registros = mysqli_fetch_array($result)) 
        {
        ?>
        '<?php echo $registros["oper"]?>',
        
        <?php
        }
        ?>
        ],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
	</body>
</html>

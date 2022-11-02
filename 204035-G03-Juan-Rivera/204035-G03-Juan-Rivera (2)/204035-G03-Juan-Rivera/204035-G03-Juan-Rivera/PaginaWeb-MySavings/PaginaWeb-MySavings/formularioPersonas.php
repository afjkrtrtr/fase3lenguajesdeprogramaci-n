<?php
    $interesTotal = 0;
	if(isset($_POST["valor"])){
		$valor = $_POST["valor"];
	} else {
		$valor = 0;
	}
	
	if(isset($_POST["cuota_inicial"])){
		$cuotaInicial = $_POST["cuota_inicial"];
	} else {
		$cuotaInicial = 0;
	}
	
	if($cuotaInicial < $valor * 0.3){
		echo '<script language="javascript">alert("El valor de la cuota inicial debe ser mayor al 30% del valor del prestamo");</script>';
		$valor = 0;
		$cuotaInicial = 0;
		$numeroCuotas = 0;
	}
	
	if(isset($_POST["numero_cuotas"])){
		$numeroCuotas = $_POST["numero_cuotas"];
		//interes mensual -> 11.2 / 12
		$interesMensual = 0.93333;
		$interesTotal = 1 + ($numeroCuotas * $interesMensual)/100;
	} else {
		$numeroCuotas = 0;
	}

	$saldoPrestamo = ($valor - $cuotaInicial) * $interesTotal;
	if($numeroCuotas != 0){
		$valorCuota = $saldoPrestamo / $numeroCuotas;
	}
	
	$subtotalPagado = 0;
?>
<html>

	<head>
	  <title>Problema</title>
	  <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="login-box">
			<form action="formularioPersonas.php" method="post">
				<div class="user-box">
					<input type="text" id="valor" name="valor"/>
					<label> Valor Prestamo </label>
					
				</div>
				<div class="user-box">
					<input type="text" id="cuota_inicial" name="cuota_inicial"/>
					<label> Cuota inicial </label>
				</div>
				<div class="user-box">
					<input type="text" id="las" name="numero_cuotas"/>
					<label> Numero de cuotas </label>
				</div>
				<input class="submit-options" type="submit"/>
			</form>
		<?php
			if($valor != 0){?>
			<table class="container">
				<tr>
					<th>No Cuotas</th>
					<th>Fecha Pago</th>
					<th>Valor Cuota</th>
					<th>Subtotal Pagado</th>
				</tr>
				<?php
					
					for($i = 1; $i <= $numeroCuotas; $i++){
					$subtotalPagado = $subtotalPagado + $valorCuota;
						
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td>Fecha Pago</td>
					<td><?php echo $valorCuota ?></td>
					<td><?php echo $subtotalPagado ?></td>
				</tr>
				<?php
					}?>
			</table>
		<?php
			}?>
			
		</div>
	</body>
</html>

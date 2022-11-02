<?php
    $interesTotal = 0;
	if(isset($_POST["precio"])){
		$precio = $_POST["precio"];
	} else {
		$precio = 0;
	}
	
	if(isset($_POST["porcioninicial_apagar"])){
		$porcioninicialapagar = $_POST["porcioninicial_apagar"];
	} else {
		$porcioninicialapagar = 0;
	}
	
	if($porcioninicialapagar < $precio * 0.3){
		echo '<script language="javascript">alert("El saldo de la porcion inicial a pagar debe ser mayor al 30% del coste del prestamno");</script>';
		$precio = 0;
		$porcioninicialapagar = 0;
		$numeroPorcionesapagar = 0;
	}
	
	if(isset($_POST["numero_porcionesapagar"])){
		$numeroPorcionesapagar = $_POST["numero_porcionesapagar"];
		//interesalmes -> 11.2 / 12
		$interesalmes = 0.93333;
		$interesTotal= 1 + ($numeroPorcionesapagar * $interesalmes)/100;
	} else {
		$numeroPorcionesapagar = 0;
	}

	$precioPrestamo = ($precio - $porcioninicialapagar) * $interesTotal;
	if($numeroPorcionesapagar != 0){
		$precioPorcionapagar= $precioPrestamo / $numeroPorcionesapagar;
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
					<label> Precio Prestamo </label>
					
				</div>
				<div class="user-box">
					<input type="text" id="cuota_inicial" name="cuota_inicial"/>
					<label> Porcion inicial a pagar</label>
				</div>
				<div class="user-box">
					<input type="text" id="las" name="numero_cuotas"/>
					<label> Numero Porciones a pagar </label>
				</div>
				<input class="submit-options" type="submit"/>
			</form>
		<?php
			if($valor != 0){?>
			<table class="container">
				<tr>
					<th>No Porciones a pgar</th>
					<th>Fecha Pago</th>
					<th>Precio Porcionesapagar</th>
					<th>Subtotal Pagado</th>
				</tr>
				<?php
					
					for($i = 1; $i <= $numeroPorcionesapagar; $i++){
					$subtotalPagado = $subtotalPagado + $precioPorcionapagar;
						
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td>Fecha Pago</td>
					<td><?php echo $precioPorcionapagar ?></td>
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

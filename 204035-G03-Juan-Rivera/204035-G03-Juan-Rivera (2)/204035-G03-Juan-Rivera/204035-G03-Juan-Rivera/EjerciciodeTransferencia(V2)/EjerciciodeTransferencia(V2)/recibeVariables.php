<html>
	<head>
	  <title>Variables</title>
	</head>
	<body>
    <?php
    echo "Cédula = ".$_POST['textoColor']."<br>";
       foreach($_POST['checks'] as $campo => $valor){
        echo "<br>".$campo." = ".$valor;
       }
    ?>
	</body>
</html>
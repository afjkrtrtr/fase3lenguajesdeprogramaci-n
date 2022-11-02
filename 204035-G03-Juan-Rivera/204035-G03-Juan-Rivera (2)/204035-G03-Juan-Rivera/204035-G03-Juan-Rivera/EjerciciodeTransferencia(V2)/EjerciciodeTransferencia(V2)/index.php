<?php
   include("formularioDinamico.php");
   $color = "blue";
   $lista = array("Prestamos","Transferencias", "Atención personalizada");
   $elementosForm = new ObjElementosForm();
   
?>
<html>
	<head>
	  <title>Formulario</title>

	</head>
	<body>
		<form action="recibeVariables.php" method="post">
            
            <?php
                echo $elementosForm->crearInput($color);
                echo "<br>";
                echo $elementosForm->crearCheckbox($lista);
            ?>
            <input type="submit" value="enviar">
            <input type="reset" value="limpiar">
        </form> 
	</body>
</html>

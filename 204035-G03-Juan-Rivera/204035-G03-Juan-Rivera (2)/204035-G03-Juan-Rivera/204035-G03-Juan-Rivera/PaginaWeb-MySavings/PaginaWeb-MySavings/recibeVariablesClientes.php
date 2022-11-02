<?php
    include("claseFormularioClientes.php");
    $listaInputs = array("Fecha de nacimiento corta","Número celular",
        "Dirección de residencia", "Departamento de residencia", "Ciudad de residencia");
    $listaInputsTipoDocuento = array("CC","TI","CE");
    $listaEstadoCivil = array("Soltero","Casado","Union libre");
    $elementosForm = new ObjFormularioClientes();
   
?>
<html>
	<head>
	  <title>Formulario</title>
	  <link rel="stylesheet" href="style.css">
	</head>
	<body>
        <div class="login-box" style="color:white;">
        <?php
       foreach($_POST as $campo => $valor){
        echo "<br>".$campo." = ".$valor;
       }
    ?>
        </div>
	</body>
</html>

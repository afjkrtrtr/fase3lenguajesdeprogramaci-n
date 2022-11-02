<?php
    include("claseFormularioClientes.php");
    $listaInputs = array("Fecha de nacimiento corta","Número celular",
        "Dirección de residencia", "Departamento de residencia", "Ciudad de residencia");
    $listaInputsTipoDocuento = array("CC","TI","CE");
    $listaEstadoCivil = array("Soltero","Casado","Union libre", "Divorciado", "Separado", "Viudo");
    $elementosForm = new ObjFormularioClientes();
   
?>
<html>
	<head>
	  <title>Formulario</title>
	  <link rel="stylesheet" href="style.css">
	</head>
	<body>
        <div class="login-box">
            <form action="recibeVariablesClientes.php" method="post">
            
                <?php
                    echo $elementosForm->crearInputSolo('documento', 'Numero de Documento de Identidad');
     
                    echo $elementosForm->crearSelect($listaInputsTipoDocuento);
                    echo "<br>";
                    echo $elementosForm->crearInputsText($listaInputs);
                    
                    echo $elementosForm->crearSelect($listaEstadoCivil);
                    echo "<br>";
                    echo $elementosForm->crearInputSolo('email', 'Correo Electronico');
                ?>
                <input type="submit" value="enviar">
                <input type="reset" value="limpiar">
            </form> 
        </div>
	</body>
</html>

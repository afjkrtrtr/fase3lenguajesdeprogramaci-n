<?php
   Class ObjElementosForm {

    function _construct(){
    }

    function crearInput($color) {
        $cadenaInput = "<input type='text' name='textoColor' style='background-color:".$color.";'>";
        return  $cadenaInput;
    }

    function crearCheckbox($lista) {
        $opciones = "";
        foreach ($lista as $valor){
            $texto = "<label>".$valor."</label>";
            $opciones = $texto.'<input type="checkbox"  name="checks[]" id="'.$valor.'"  value="'.$valor.'"><br>'.$opciones;
        }
        return  $opciones;
    }

   }
?>

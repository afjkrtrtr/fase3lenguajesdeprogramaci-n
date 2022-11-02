<?php
   Class ObjFormularioClientes {

    function _construct(){
    }

    function crearInputSolo($valor,$texto) {
        $cadenaInput = "<div class='user-box'><input type='text' name='".$valor."'><br><label>".$texto."</label></div>";
        return  $cadenaInput;
    }

    function crearSelect($lista) {
        $select = "<div class='box'><select name='tipoDocumento'>";
        foreach ($lista as $valor){
            $select = $select.'<option value="'.$valor.'">'.$valor.'</option>';
        }
        $select = $select.'</select></div>';
        return  $select;
    }

    function crearInputsText($lista) {
        $inputs = "";
        foreach ($lista as $valor){
            $texto = "<label>".$valor."</label>";
            $inputs = "<div class='user-box'> <input type='text' name='".$valor."'>".$texto."<br></div>".$inputs;
        }
        return  $inputs;
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

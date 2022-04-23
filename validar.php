<?php
    if(isset ($_POST["submit"])){
        if(empty($id_Asociado)){
            echo '<script>alert("Debe ingresar el cuil")</script>';
        }else{
            if($id_Asociado>99999999999 || $id_Asociado<10000000000){
                echo '<script>alert("El CUIL ingresado es incorrecto")</script>';
            }
        }
    }
?>
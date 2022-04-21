<?php
    if(isset ($_POST["submit"])){
        if(empty($cuil)){
            echo '<script>alert("Debe ingresar el cuil")</script>';
        }else{
            if($cuil>99999999999 || $cuil<10000000000){
                echo '<script>alert("El CUIL ingresado es incorrecto")</script>';
            }
        }
    }
?>
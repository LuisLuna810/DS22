<?php  
    $id = $_POST["cuil-socio"];
    session_start();
    $_SESSION ['id'] = $id;
    include_once("asociados.php");
    
    
    $ing_Asociado = new Asociados;
    $ing_Asociado->id_Asociado = $id;   
    $ing_Asociado->ingresar();
    

    

?>
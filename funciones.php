<?php
    $cuil=$_POST["cuil"];

    if (!empty($cuil)) {
        header('Location: index.php');   
    }else{
        echo '<script language="javascript">alert("CUIL INGRESADO ERRONEO");</script>';
    }
?>
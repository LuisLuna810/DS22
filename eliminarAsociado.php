<?php 
include_once("asociados.php");
$id = $_GET["id"];
if ($id == null || $id = '') {
    echo "ACCESO DENEGADO";
    die();
}
$eliminarAsociado = new Asociados;
$eliminarAsociado->id_Asociado = $_GET['id'];
$eliminarAsociado->eliminarAsociado();
?>






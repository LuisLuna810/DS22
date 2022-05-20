<?php
    require_once("conexion.php");
    class Donaciones extends Conexion{
        
        public $donar;

        public function donaciones($condicion){
            $condicion = $this->donar;
            if ($condicion == 0){
                echo "<H2>NO TIENE PERMITIDO REALIZAR DONACIONES</H2>";
            }else {
                echo "<H2>HABILITADO PARA REALIZAR DONACIONES</H2>";
            }
        }
    }
?>

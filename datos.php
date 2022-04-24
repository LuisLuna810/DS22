<?php
    require_once("conexion.php");
    class Asociados extends Conexion{
        public $id_Asociado;
        public $nombre;
        public $apellido;
        public $es_Donante;
        public $fecha_Nacimiento;

        public function insertar(){
            $this->conectar_DB();
            $query = mysqli_prepare($this->enlace,"INSERT INTO asociado VALUES (?,?,?,?,?)");
            $query->bind_param("issis",$this->id_Asociado, $this->nombre, $this->apellido, $this->es_Donante, $this->fecha_Nacimiento);
            $query->execute();

            #$verificar =mysqli_prepare($this->enlace, "SELECT ? FROM asociados");
            #$verificar->bind_param("i",$this->id_Asociado)
            
            if(!$query->execute()){
                echo "<h3>DATOS REGISTRADOS CORRECTAMENTE</h3> <br>";
            }else{
                echo "<h3>ERROR: Los datos no se registraron correctamente </h3> <br>";
            }
        }
    }

?>
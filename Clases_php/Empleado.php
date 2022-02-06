<?php
    require_once("Usuario.php");
    class Empleado extends Usuario{
        private $Num_plaza;
        protected $puesto;
        function __construct( $nombre,  $apellido,  $Edad, $email, $puesto, $Num_plaza){
            parent::__construct($nombre,  $apellido,  $Edad, $email);
            $this-> puesto = $puesto;
            $this-> Num_plaza= $Num_plaza;
        } 

        public function getpuesto():string{
            return $this->puesto;
        }

        public function getNum_plaza(){
            return $this->Num_plaza;
        }
        public function getDatos(){
            $datos="
                Tipo de Usuario: {$this->TipoUsuario}         <br>
                Nombre: {$this->Nombre}<br>
                Apellido: {$this->Apellido}<br>
                Edad: {$this->Edad}<br>
                Puesto: {$this->puesto}
                  ";
            return $datos;
        }

        public function calsueldo($Horas,$pagoxhora){
            $sueldo = $Horas * $pagoxhora;
            return $sueldo;
        }
        
    }
?>

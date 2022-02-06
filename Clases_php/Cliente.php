<?php
    require_once("Usuario.php");

    class Cliente extends Usuario{
        private $clv_Cliente;
        protected $Empleado = false;
        function __construct( $nombre,  $apellido,  $Edad, $email, $clv_Cliente){
            parent::__construct($nombre,  $apellido,  $Edad, $email);
            $this-> clv_Cliente=$clv_Cliente;
        } 

        public function getClave_Cliente():string{
            return $this->clv_Cliente;
        }


        public function getDatos(){
            $datos="
                Tipo de Usuario:{$this->TipoUsuario}<br>
                Clave: {$this->clv_Cliente}<br>
                Nombre: {$this->Nombre}<br>
                Apellido: {$this->Apellido}<br>
                Edad: {$this->Edad}<br>
                
            ";
            return $datos;
        }


    }

?>

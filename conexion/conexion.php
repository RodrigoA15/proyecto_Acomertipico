<?php
    class conexion{
        protected $db;
        private $driver  ="mysql";
        private $host = "localhost";
        public $based = "adsi_2338368";
        private $usuario = "root";
        private $contrasena = "";

        public function __construct()
        {
            try {
                $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->based}",
                $this->usuario, $this->contrasena);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al conectarse a la base de datos" .$e->getMessage();
            }
        }
    }




?>
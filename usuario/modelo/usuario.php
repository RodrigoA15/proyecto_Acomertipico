<?php
    require_once("../../conexion/conexion.php");
    session_start();

    class usuario extends conexion{
        
        public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function login($email, $password){
            $tabla = $this->db->prepare("SELECT email, password FROM usuario
            WHERE email= :email AND password = :password");
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();

            if ($tabla->rowCount()==1){
                $loginUsuario = $tabla->fetch();
                $_SESSION['email']= $loginUsuario['email'];
                echo "inicio de sesion satisfactorio";
            }else{
                echo "Fallo al iniciar sesion verifique sus datos sapoperro";
            }
        }
    }


?>
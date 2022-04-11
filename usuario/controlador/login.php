<?php
    require_once("../modelo/usuario.php");

    if (isset($_REQUEST["btn_enviar"])==1) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $loginUsuario = new usuario();
        $loginUsuario->login($email, $password);

        if (isset($loginUsuario)==1) {
            header('Location: ../vista/perfil.php');
        }else{
            header('Location: ../../Index.php');
        }
    }
?>
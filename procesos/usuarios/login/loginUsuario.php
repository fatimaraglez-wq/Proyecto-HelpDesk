<?php
    session_start();

        //$usuario = isset($_POST['login']) ? $_POST['login'] : "";
        //$password = isset($_POST['password']) ? $_POST['password'] : "";

        $usuario = $_POST['login']; 
        $password = $_POST['password'];

        include "../../../clases/Usuarios.php";

        $Usuarios = new Usuarios();
        echo $Usuarios->loginUsuario($usuario, $password);

?>
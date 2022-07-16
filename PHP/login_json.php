<?php
require_once 'login.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //LLAMA A LA FUNCION COMPROBAR USUARIO, SI NO COINCIDE CON NINGUNO EN LA BASE DE DATOS RETORNA FALSE, SINO INICIA SESSION Y RETORNA TRUE
    $usu = comprobar_usuario($_POST["usuario_log"], $_POST["clave_log"] );
    if ($usu === FALSE){
        echo "FALSE";

    }else{
        session_start();
        $_SESSION['usuario'] = $_POST["usuario_log"];
        $_SESSION['clave'] = $_POST["clave_log"];
        echo "TRUE";
    }
    
}
?>
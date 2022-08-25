<?php

function comprobar_usuario($usuario, $clave){
    $db = new PDO("mysql:@eu-cdbr-west-03.cleardb.net/heroku_8a34a067c8d1005". "bf711ef804d762", "6f2f459b");
    $ins = "select CodUsu,Usuario from Usuarios where  Usuario = " . "'$usuario'" . " and Contraseña = " . "'$clave'";
    $resul = $db->query($ins);
    if ($resul->rowCount() === 1) {
        return $resul->fetch();
    } else {
        return FALSE;
    }
}

<?php

//CONEXION CON LA BASE DE DATOS
function leer_config($ficheroXML, $esquema){

    $config = new DOMDocument();
    $config->load($ficheroXML);
    $res = $config->schemaValidate($esquema);

    if ($res == FALSE) {
        throw new InvalidArgumentException("Revisa ficheros de configuración.");
    }
    
    $datos = simplexml_load_file($ficheroXML);
    $ip = $datos->xpath("//ip");
    $nombre = $datos->xpath("//nombre");
    $usuario = $datos->xpath("//usuario");
    $clave = $datos->xpath("//clave");
    $cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
    $resul = [];
    $resul[] = $cad;
    $resul[] = $usuario[0];
    $resul[] = $clave[0];

    return $resul;
}

//COMPRUEBA QUE EL USUARIO Y LA CONTRASEÑA DEL FORMULARIO LOGIN COINCIDE CON ALGUNO EXISTENTE EN LA BASE DE DATOS
function comprobar_usuario($usuario, $clave){
    $res = leer_config(dirname(__FILE__) . "\configuracion.xml", dirname(__FILE__) . "\configuracion.xsd");
    $db = new PDO($res[0], $res[1], $res[2]);
    $ins = "select CodUsu,Usuario from Usuarios where  Usuario = " . "'$usuario'" . " and Contraseña = " . "'$clave'";
    $resul = $db->query($ins);


    if ($resul->rowCount() === 1) {
        return $resul->fetch();
    } else {
        return FALSE;
    }
}
<?php
//CONEXION CON BASE DE DATOS
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

//QUERY ALTA USUARIO CON LOS PARAMETROS MEDIANTE alta_usuario_json.php y alta_usuario.js
function alta_usuario_enviar($usuario, $clave, $nombre, $apellidos, $email, $fecha_nac, $direccion,$cp, $pais, $hoy){
    $res = leer_config(dirname(__FILE__) . "\configuracion.xml", dirname(__FILE__) . "\configuracion.xsd");
    $db = new PDO($res[0], $res[1], $res[2]);
    $ins = "INSERT INTO Usuarios (Usuario,Contraseña,Nombre,Apellido,Email,Fecha_nac,Direccion,Cp,Pais,Fecha_alta)
                VALUES ('$usuario'," . "'$clave'," . "'$nombre'," . "'$apellidos'," . "'$email'," . "'$fecha_nac'," . "'$direccion'," . "'$cp'," . "'$pais'," . "'$hoy'" . ");";
    $resul = $db->query($ins);
    if (!$resul) {
        return FALSE;
    } else {
        return $resul;
    }
}


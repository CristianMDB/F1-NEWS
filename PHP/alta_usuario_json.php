<?php

require "alta_usuario.php";

$hoy = date('Y-m-d h:i:s'); //VARIABLE CON LA FECHA DE HOY

//LLAMA A LA FUNCION alta_usuario_enviar CON LOS PARAMETROS QUE LE LLEGAN DEL FORMULARIO DE REGISTRO DESDE alta_usuario.js
alta_usuario_enviar($_POST['usuario'], $_POST['clave'], $_POST['nombre'], $_POST['apellidos'],$_POST['email'],$_POST['fecha_nac'],$_POST['direccion'],
                     $_POST['cp'], $_POST['pais'], $hoy);
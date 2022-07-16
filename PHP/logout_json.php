<?php
session_start();
$_SESSION =array();
session_destroy(); // ELIMINA LA SESION
setcookie(session_name(),123, time()-1000); // ELIMINA EL USUARIO
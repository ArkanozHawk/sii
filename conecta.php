<?php

$usuario = "root";
$contrasena = "digi3.0";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "infocel";


$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos ) or die ("No se ha podido conectar al servidor de Base de datos");
mysqli_set_charset($conexion, 'latin1');
?>
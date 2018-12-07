<?php
include("../conecta.php");

$nickname = $_GET['nickname'];
$pass = $_GET['pass'];
$nombre = $_GET['nombre'];
$apellidoP = $_GET['apellidoP'];
$apellidoM = $_GET['apellidoM'];

$inserta ="INSERT INTO usuarios (nickname, pass, nombre, apellidoP, apellidoM) VALUES('$nickname', '$pass', '$nombre', '$apellidoP', '$apellidoM')";

$res = mysqli_query($conexion, $inserta);
if($res)
    {
       echo "añadido registro de la base de datos<br>";
       ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
       exit;
    }
    else
    {
    	echo "no se ha podido agregar el registro, puede ser que el usuario ya exista.<br>";
    	ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
    	exit;
    }

?>
<?php
include("../conecta.php");

$nickname = $_GET['nickname'];
$pass = $_GET['pass'];

$consulta = "SELECT pass FROM usuarios WHERE nickname = '$nickname'";

$res = mysqli_query($conexion, $consulta);
$result = mysqli_fetch_array($res);
$resultado = $result['pass'];

if($resultado == $pass)
    {
       echo "El usuario $nickname se ha logueado correctamente<br>";
       ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
       exit;
    }
    else
    {
    	echo "ERROR: la contrase�a es incorrecta.<br>";
    	ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
    	exit;
    }

?>
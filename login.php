<?php
require("conecta.php");

$nickname = $_GET['nickname'];
$pass = $_GET['pass'];

$consulta = "SELECT pass FROM usuarios WHERE nickname = '$nickname'";

$res = mysqli_query($conexion, $consulta);
$result = mysqli_fetch_array($res);
$resultado = $result['pass'];

if($resultado == $pass)
    {
      echo "usuario: $nickname<br>contraseņa: $pass<br>";
       echo "El usuario $nickname se ha logueado correctamente<br>";
       ECHO "<a href=usuarios/altaEquipo.html>Registrar Equipo</a><br>";
       ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
       exit;
    }
    else
    {
    	echo "ERROR: la contraseņa es incorrecta.<br>";
    	ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
    	exit;
    }

?>
<?php
include("../conecta.php");

$idArticulo = $_GET['idArticulo'];

$consulta = "DELETE FROM articulos WHERE idArticulo = $idArticulo";

$res = mysqli_query($conexion, $consulta);
if($res)
    {
       echo "Registro Eliminado de la base de datos<br>";
       ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
       exit;
    }
    else
    {
    	echo "no se ha podido Eliminar el registro.<br>";
    	ECHO "<a href=delete.html>regresar</a><br>";
    	exit;
    }

?>
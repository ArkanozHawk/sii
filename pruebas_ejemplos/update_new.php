<?php
include("../conecta.php");

$idArticulo = $_GET['idArticulo'];
$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$cantidad = $_GET['cantidad'];
$costo = $_GET['costo'];

$consulta = "UPDATE articulos SET nombre = '$nombre', descripcion = '$descripcion', cantidad = $cantidad, costo = $costo WHERE idArticulo = $idArticulo";
$res = mysqli_query($conexion, $consulta);
if($res)
    {
      echo "$nombre<br>";
       echo "añadido registro de la base de datos<br>";
       ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
       exit;
    }
    else
    {
      echo "$nombre<br>";
    	echo "no se ha podido agregar el registro.<br>";
    	ECHO "<a href=update.html>regresar</a><br>";
    	exit;
    }

?>
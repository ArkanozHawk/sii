<?php
include("../conecta.php");




$nombre = $_GET['nombre'];
$marca = $_GET['marca'];
$tamaño = $_GET['tamaño'];
$resolucion = $_GET['resolucion'];
$cam_primaria = $_GET['cam_primaria'];
$cam_secundaria = $_GET['cam_secundaria'];
$tam_bat = $_GET['tam_bat'];
$procesador = $_GET['procesador'];
$memoria = $_GET['memoria'];
$almacenamiento = $_GET['almacenamiento'];
$imagen = $_GET['imagen'];

$inserta ="INSERT INTO equipos (idEquipo, nombre, marca, tamaño, resolucion, cam_primaria, cam_secundaria, tam_bat, procesador, memoria, almacenamiento, imagen) VALUES('', '$nombre', '$marca', '$tamaño', '$resolucion', '$cam_primaria', '$cam_secundaria', '$tam_bat', '$procesador', '$memoria', '$almacenamiento', '$imagen')";

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
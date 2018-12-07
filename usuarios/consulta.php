<?php
include("../conecta.php");

$idArticulo = $_GET['idArticulo'];

$consulta = "SELECT * FROM articulos WHERE idArticulo = '$idArticulo'";

$res = mysqli_query($conexion, $consulta);
$result = mysqli_fetch_array($res);
$nombre = $result['nombre'];
$descripcion = $result['descripcion'];
$cantidad = $result['cantidad'];
$costo = $result['costo'];
$imagen = $result['imagen'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Producto Consultado</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<center><h1>Producto Consultado.</h1></center>
	<section id="Tabla">
		<div class="container">
			<table border=1 align="center">
				<tr>
					<td><b>Código de Producto</b></td>
					<td><b>Artículo</b></td>
					<td><b>Descripción</b></td>
					<td><b>Cantidad</b></td>
					<td><b>Costo</b></td>
					<td><b>Imagen</b></td>
				</tr>
				<tr align="center">
					<td><?php echo "$idArticulo"?></td>
					<td><?php echo "$nombre"?></td>
					<td><?php echo "$descripcion"?></td>
					<td><?php echo "$cantidad"?></td>
					<td><?php echo "$$costo"?></td>
					<td><img src=<?php echo "imagenes/$imagen"?> border="0" height="200"></td>
				</tr>
			</table>
			<a href=javascript:history.go(-1)><button type="button" class="btn btn-primary">regresar</button></a>
			<br>
			<?php echo exit; ?>
		</div>
	</section>
</body>
</html>
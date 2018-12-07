
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Productos</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<center><h1>Lista de Productos.</h1></center>
	<section id="Tabla">
		<div class="container">
			<table border=1 align="center">
				<tr>
					<td><b>Código</b></td>
					<td><b>Artículo</b></td>
					<td><b>Descripción</b></td>
					<td><b>Cantidad</b></td>
					<td><b>Costo</b></td>
				</tr>
				<?php
					include("../conecta.php");

					$consulta = "SELECT * FROM articulos";

					$res = mysqli_query($conexion, $consulta);

					while($result = mysqli_fetch_array($res))
					{
						$idArticulo = $result['idArticulo'];
						$nombre = $result['nombre'];
						$descripcion = $result['descripcion'];
						$cantidad = $result['cantidad'];
						$costo = $result['costo'];

						echo "
							<tr align='center'>
								<td>$idArticulo</td>
								<td>$nombre</td>
								<td>$descripcion</td>
								<td>$cantidad</td>
								<td>$$costo</td>
							</tr>
						";
					}
				?>	
			</table>
			<br><br>
			<center><a href="index.html"><button type="button" class="btn btn-primary">Volver al Inicio</button></a></center>
			<br>
			<?php echo exit; ?>
		</div>
	</section>
</body>
</html>
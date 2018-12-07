<?php
include("../conecta.php");

$idArticulo = $_GET['idArticulo'];

$consulta = "SELECT * FROM articulos WHERE idArticulo = $idArticulo";

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
  <title>Eliminando datos</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
  <section id="Formulario">
    <div class="container">
      <form action="delete_new.php">
        <div class="form-group">
          <label for="idArticulo">Código del Producto:</label>
          <input type="text" readonly class="form-control-plaintext" id="idArticulo" name="idArticulo" value="<?php echo $idArticulo ?>">
        </div>
        <div class="form-group">
          <label for="nombre">Artículo:</label>
          <input type="text" readonly class="form-control-plaintext" id="nombre" name="nombre" value="<?php echo $nombre ?>">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción del Producto:</label>
          <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo "$nombre"?>" readonly>
        </div>
        <div class="form-group">
          <label for="cantidad">Cantidad:</label>
          <input type="text" class="form-control" name="cantidad" id="cantidad" value="<?php echo "$cantidad"?>" readonly>
        </div>
        <div class="form-group">
          <label for="costo">Costo:</label>
          <input type="text" class="form-control" name="costo" id="costo" value="<?php echo "$$costo"?>" readonly>
        </div>
        <div class="form-group">
          <label for="imagen">Imagen del Producto:</label><br>
          <img src="<?php echo "imagenes/$imagen"?>" border="0" height="200"><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Eliminar</button>
        <a href="index.html"><button type="button" class="btn btn-primary">Volver al Menú</button></a>
      <br><br>
      </form>
    </div>
  </section>
</body>
</html>
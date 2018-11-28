<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
include("../conecta.php");

$idArticulo = $_GET['idArticulo'];

$consulta = "SELECT * FROM articulos WHERE idArticulo = '$idArticulo'";

$res = mysqli_query($conexion, $consulta);
$result = mysqli_fetch_array($res);
$imagen = $result['imagen'];
$nombre = $result['nombre'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Actualizando datos</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
  <section id="Encabezado">
    <div class="container">
      <center><h1>Editar Imagen de Productos.</h1></center>
    </div>
  </section>
  <section id="Formulario">
    <div class="container">
      <form action="update_image_new.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="idArticulo">Código del Producto:</label>
          <input type="text" readonly class="form-control-plaintext" id="idArticulo" name="idArticulo" value="<?php echo $idArticulo ?>">
        </div>
        <div class="form-group">
          <label for="idArticulo">Artículo:</label>
          <input type="text" readonly class="form-control-plaintext" id="nombre" name="nombre" value="<?php echo $nombre ?>">
        </div>
        <div class="form-group">
          <label for="nombre">Imagen actual:</label>
          <br><br>
          <img src="imagenes/<?php echo "$imagen"?>" height="200" border="0">
        </div>
        <div class="form-group">
          <label for="imagen">Subir Nueva Imagen:</label>
          <input type="file" class="form-control-file" id="imagen" name="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <br><br>
      <a href="index.html"><button type="button" class="btn btn-primary">Volver al Menú</button></a>
      <br>
      </form>
    </div>
  </section>
</body>
</html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
      <center><h1>Editar Productos.</h1></center>
    </div>
  </section>
  <section id="Formulario">
    <div class="container">
      <form action="update_new.php">
        <div class="form-group">
          <label for="idArticulo">Código del Producto:</label>
          <input type="text" readonly class="form-control-plaintext" id="idArticulo" name="idArticulo" value="<?php echo $idArticulo ?>">
        </div>
        <div class="form-group">
          <label for="nombre">Artículo:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre ?>">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo "$descripcion"?>">
        </div>
        <div class="form-group">
          <label for="cantidad">Cantidad:</label>
          <input type="text" class="form-control" name="cantidad" id="cantidad" value="<?php echo "$cantidad"?>">
        </div>
        <div class="form-group">
          <label for="costo">Costo:</label>
          <input type="text" class="form-control" name="costo" id="costo" value="<?php echo "$costo"?>">
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
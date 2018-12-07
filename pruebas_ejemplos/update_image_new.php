<?php
include("../conecta.php");
$idArticulo = $_POST['idArticulo'];
//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	//$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos)){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "imagenes/" . $_FILES['imagen']['name'];
		//comprovamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado)
			{
				$imagen = $_FILES['imagen']['name'];
				//insertamos/guardamos el nombre de la imagen en la tabla.
				$consulta = "UPDATE articulos SET imagen = '$imagen' WHERE idArticulo = $idArticulo";
				$res = mysqli_query($conexion, $consulta);
				if($res)
				{
					echo "$idArticulo<br>";
					echo "$imagen<br>";
					echo "añadido registro de la base de datos<br>";
					ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
					//exit;
				}
				else
				{
					echo "$idArticulo<br>";
					echo "$imagen<br>";
					echo "no se ha podido agregar el registro.
					<br>";
					ECHO "<a href=javascript:history.go(-1)>regresar</a><br>";
					//exit;
				}
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido.";
	}
}
?>
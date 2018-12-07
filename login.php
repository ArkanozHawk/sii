<?php
session_start();
include("conecta.php");

$nickname = $_GET['nickname'];
$pass = $_GET['pass'];

$consulta = "SELECT * FROM usuarios WHERE nickname = '$nickname'";

$result = mysqli_query($conexion, $consulta);

if($result->num_rows > 0){
}
  $row = $result->fetch_array(MYSQLI_ASSOC);
  if ($pass == $row['pass']) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $row['nickname'];
    header ("Location: inicio.php");
  } else { 
      echo'<div class="alert alert-danger">
                <strong>Error!</strong> Usuario y/o password incorrectos.
                <a href=href=javascript:history.go(-1)" class="alert-link">Intentar de nuevo! </a>
            </div>';
    }
?>

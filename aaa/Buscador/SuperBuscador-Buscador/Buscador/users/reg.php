<?php

include 'conexion.php';

$nombre = $_POST['usuario'];
$contraseño = $_POST['contraseña'];
echo $nombre;

$command = "Insert INTO users(nombre, contraseña) VALUES ('$nombre','$contraseño')";
$envio_sql = $conexion->query($command);

?>
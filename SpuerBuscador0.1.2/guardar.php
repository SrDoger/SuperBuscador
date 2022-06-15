<?php
  include("conexion.php");

  $nombre = $_POST['nombre'];
  $pwd = md5($_POST['pwd']);
  $consulta_sql = "INSERT INTO empleado (nombre, pwd) VALUES ('$nombre', '$pwd')";
  $envio_consulta_sql = $conn->query($consulta_sql);
  header("Location:login.php");

 ?>

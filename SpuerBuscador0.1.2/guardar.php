<?php
  include("conexion.php");

  $nombre = $_POST['nombre'];
  $pwd = md5($_POST['pwd']);
  //$pwd = $_POST['pwd'];
//$consulta_sql = "INSERT INTO empleado (nombre, pwd) VALUES ('".$nombre."', '".$pwd."')";
  $sql = "INSERT INTO usuarios (nombre, pwd) VALUES ('".$nombre."','".$pwd."')";
  $envio_consulta_sql = $conn->query($sql);
  header("Location:login_register.php");

 ?>

<?php
    include("conexion.php");
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = "INSERT INTO registerylogin (nombre, pwd) VALUES ('$username','$password')";
    $envio = $conexion->query($query);
    header("Location:login.php");
?>

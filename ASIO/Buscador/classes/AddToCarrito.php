<?php
require_once("Conexion.php");
require_once("Session.php");
$carrito = new Carrito();
$session = new session();
$carrito->addCarrito($_POST["productoID"], $_SESSION["id"]);
$carrito->addCarrito($_POST["productoID"], 12); //to do la conexion con session 
?>
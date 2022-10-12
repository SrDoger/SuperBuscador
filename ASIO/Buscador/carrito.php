<?php
require_once("Conexion.php");
$carrito = new Carrito();

//$carrito->addCarrito($_POST["productoID"], $_SESSION["ID"]);
$carrito->addCarrito($_POST["productoID"], 12); //to do la conexion con session 
?>
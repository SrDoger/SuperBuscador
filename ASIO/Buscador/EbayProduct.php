<?php
include("Buscadores.php");

$ebay = new ebay();

$ebay->getProduct($_POST['element']);
?>

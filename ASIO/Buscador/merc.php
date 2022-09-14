<?php
require("Buscadores.php");

$merc = new merc();

$merc->getProduct($_POST["element"]);
?>
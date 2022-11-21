<?php

require_once("classes/Buscadores.php");
require_once("classes/Conexion.php");

$user = new usuario();
$user->SaveSearch($_POST['element']);
if (isset($_POST['ebay'])) {
  $ebay = new ebay();
  $ebay->Search($_POST['element']);
}
if (isset($_POST['merc'])) {
  $merc = new merc();
  $merc->Search($_POST['element']);
}
?>
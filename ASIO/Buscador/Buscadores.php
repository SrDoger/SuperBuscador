<?php

require_once("classes/Buscadores.php");
echo $_POST['ebay']. $_POST['merc'];
if (isset($_POST['ebay'])) {
  $ebay = new ebay();
  $ebay->Search($_POST['element']);
}
if (isset($_POST['merc'])) {
  $merc = new merc();
  $merc->Search($_POST['element']);
}
?>
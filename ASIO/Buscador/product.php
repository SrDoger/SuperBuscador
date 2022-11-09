<?php
include("classes/Buscadores.php");

if(isset($_POST['api'])){
    if($_POST['api'] == "ebay"){
        $ebay = new ebay();
        $ebay->getProduct($_POST['element']);
    }
    else if($_POST['api'] == "merc"){
        $merc = new merc();
        $merc->getProduct($_POST['element']);
    }
    
}
?>

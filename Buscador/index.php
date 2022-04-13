<?php
    $mlid = $_GET['element'];
    $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/'.$mlid), true);
  //  $descr = json_decode(file_get_contents('https://api.mercadolibre.com/items/'$mlid'/description'), true);
  //    $descripcion = json_decode(file_get_contents('https://api.mercadolibre.com/items/'.$mlid),true);

    echo $data['title'];  
    echo '<br>';
    echo '<img src="', $data['thumbnail'], '">' ;
   // echo '<h2>Descripcion </h2>';
    //echo $descripcion['descriptions'];
    echo '<br>';
    echo '<p>Precio: '.$data['price'],'$</p>';    
 /*   foreach($descripcion['descriptions'] as $ma){
        echo $ma . '<br>';
        }

    echo file_get_contents('https://api.mercadolibre.com/items/'.$mlid'/descriptions');
      

    */
    
?>
<?php

    if (isset($_POST['mercadolibre'])){

        $mlid = str_replace(" ", "%20", $_POST['element']);
        $data = json_decode(file_get_contents('https://api.mercadolibre.com/sites/MLA/search?q='.$mlid), true);

        $valor = 0;
        foreach ($data["results"] as $i)
        {
            $valor += 1;
            foreach ($i as $a["id"])
            {

                $mlid = $a["id"];
                
                $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/'.$mlid), true);
                echo '<div>';
                print $a["id"];     
                echo '<br>';
                echo $data['title'];  
                echo '<br>';
                echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['thumbnail'], '">' ;
                echo '<br>';
                echo '<p>Precio: '.$data['price'],'$</p>';
                
                echo '<br>';
                echo '<div class="imgSecundarias">';
                foreach ($data['pictures'] as $j){   
                    //echo '<p>'.$j['url'], '</p>';
                // echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['url'], '">' ;
                
                    //to do: poner las imagenes extra  
                }
                echo '</div>';
                echo '<div class="atributos">';
                foreach($data['attributes'] as $aux){
                    $string = $aux['name'].': '.$aux['value_name'];
                    print_r($string);
                    
                    echo '<br>';
                    
                }
                echo '</div>';;
                echo '<hr>';
                echo '</div>';;
                break;
                
            }
            if($valor >= 10){
                break;
            }
            
        }
    }
  

/*
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
    

    





    $mlid = $a["id"];
                
    $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/'.$mlid), true);
    echo '<div>';
    print $a["id"];     
    echo '<br>';
    echo $data['title'];  
    echo '<br>';
    echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['thumbnail'], '">' ;
    echo '<br>';
    echo '<p>Precio: '.$data['price'],'$</p>';
    echo '<a class="mercadolink" href="'.$data['permalink'],'">', 'link a Mercado libre</a>';
    echo '<br>';
    echo '<div class="imgSecundarias">';
    foreach ($data['pictures'] as $j){   
        //echo '<p>'.$j['url'], '</p>';
    // echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['url'], '">' ;

        //to do: poner las imagenes extra  
    }
    echo '</div>';
    echo '<div class="atributos">';
    foreach($data['attributes'] as $aux){
        $string = $aux['name'].': '.$aux['value_name'];
        print_r($string);
        
        echo '<br>';
                 
    echo file_get_contents('https://api.mercadolibre.com/items/'.$mlid'/descriptions');
      

    
    */

?>
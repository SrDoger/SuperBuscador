<?php

    $mlid = $_GET['element'];
    $mlid = str_replace(" ", "%20", $mlid);
    
    print_r($mlid);

    $data = json_decode(file_get_contents('https://api.mercadolibre.com/sites/MLA/search?q='.$mlid), true);
    echo $data["query"];
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
            echo '<img style="height: 200px; width: 200px;" src="', $data['thumbnail'], '">' ;
            echo '<br>';
            echo '<p>Precio: '.$data['price'],'$</p>';
            echo '<a href="'.$data['permalink'],'">', 'link a Mercado libre</a>';
            echo '<br>';
            echo '<div class="imgSecundarias">';
            foreach ($data['pictures'] as $j){   
                echo '<p>'.$j['url'], '</p>'; 
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
 
?>
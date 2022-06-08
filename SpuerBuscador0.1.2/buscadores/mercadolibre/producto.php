<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="productoML">
        <?php
            //$productId = $_POST['id'];
            $productId = 'MLA1131114173 ';
            $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/'.$productId), true);
            echo '<h1>'.$data['title'],'</h1>';
            echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['thumbnail'], '">' ;
            echo '<p>Precio: '.$data['price'],'$</p>';
            echo '<a class="mercadolink" href="'.$data['permalink'],'">', 'link a Mercado libre</a>';
            echo '<div class="imgSecundarias">';
            foreach ($data['pictures'] as $j){   
                //echo '<p>'.$j['url'], '</p>';
                echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $j['url'], '">' ;
            
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
        ?>
    </div>
</body>
</html>
























































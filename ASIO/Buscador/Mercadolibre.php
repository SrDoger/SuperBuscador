
<?php
class merc
{

    function Search()
    {
        if (isset($_POST['mercadolibre'])) {
            echo '<div id="mercadolibre">';
            $mlid = str_replace(" ", "%20", $_POST['element']);
            $data = json_decode(file_get_contents('https://api.mercadolibre.com/sites/MLA/search?q=' . $mlid, '&Minimum-price=3000'), true);

            $valor = 0;
            foreach ($data["results"] as $i) {
                if ($valor >= 10) {

                    break;
                }
                foreach ($i as $a["id"]) {
                    $mlid = $a["id"];
                    $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/' . $mlid), true);
                    if ($valor >= 10) {
                        break;
                    }
                    if ($_POST['maxPrice'] >= $data['price'] && $_POST['minPrice'] <= $data['price']) {
                        $valor += 1;
                        echo '<div class="containerMerc">';


                        //print $a["id"];
                        echo '<br>';

                        echo
                        '
                            <form action="MerclibreProduct.php" method="post">
                                <input type="text" name="element" value="' . $data['id'], '" hidden>
                                <input type="submit" value="producto">
                            </form>
                            
                            <h2>' . $data['title'], '</h2>
                            <br>
                            <img class="imgPrincipal" src="', $data['thumbnail'], '">
                            <br>
                            <a href=' . $data['permalink'], '>Link a Mercado Libre</a>
                            <br>
                            <p>Precio:' . $data['price'], '$</p>';

                        echo '<br>';
                        echo '<div class="imgSecundarias">';

                        echo '</div>';

                        echo '<hr>';
                        echo '</div>';
                        break;
                    } else {
                        break;
                    }
                }
            }
            echo '</div>';
        }

        /*echo '<div class="atributos">';
                    foreach($data['attributes'] as $aux){
                        $string = $aux['name'].': '.$aux['value_name'];
                        print_r($string);
                        
                        echo '<br>';
                        
                    }
                    echo '</div>';;*/

        /* foreach ($data['pictures'] as $j) {
                            //echo '<p>'.$j['url'], '</p>';
                            // echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['url'], '">' ;
        
                            //to do: poner las imagenes extra  
                        }*/
    }
    function OneProduct($productId)
    {
        $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/' . $productId), true);
        echo '<h1>' . $data['title'], '</h1>';
        echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['thumbnail'], '">';
        echo '<p>Precio: ' . $data['price'], '$</p>';
        echo '<a class="mercadolink" href="' . $data['permalink'], '">', 'link a Mercado libre</a>';
        echo '<div class="imgSecundarias">';
        foreach ($data['pictures'] as $j) {
            //echo '<p>'.$j['url'], '</p>';
            echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $j['url'], '">';

            //to do: poner las imagenes extra  
        }
        echo '</div>';
        echo '<div class="atributos">';
        foreach ($data['attributes'] as $aux) {
            $string = $aux['name'] . ': ' . $aux['value_name'];
            print_r($string);

            echo '<br>';
        }
        echo '</div>';
        echo '<hr>';
        echo '</div>';
    }


    function getValores($productId)
    {
        /** Se le pide el id del producto y retorna Nombre, Precio y ID del producto pedido */
        //$productId = $_POST['element'];
        $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/' . $productId), true);

        $lista = array();

        array_push($lista, $data['id']);
        array_push($lista, "MERCADOLIBRE"); 
        array_push($lista, $data['title']);
        array_push($lista, $data['price']);        
       
        return $lista;
    }
}
?>
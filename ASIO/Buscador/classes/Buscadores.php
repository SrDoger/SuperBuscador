<?php
require_once("Conexion.php");
class merc
{
  function getJsonProduct($productId)
  {
    $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/' . $productId), true);
    return $data;
  }

  function Search($palabraClave)
  {
    $productId = str_replace(" ", "%20", $palabraClave);
    $data = json_decode(file_get_contents('https://api.mercadolibre.com/sites/MLA/search?q=' . $productId, '&Minimum-price=3000'), true);

    $html = '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
             <div id="mercadolibre">';
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
          $html .=
            '<div class="containerMerc">
                                <br>
                                <form action="product.php" method="post">
                                    <input type="text" value = "merc" name="api" hidden>
                                    <input type="text" name="element" value="' . $data['id'] . '" hidden>
                                    <input type="submit" value="producto">
                                </form>
                                
                                <span class="material-symbols-outlined" onclick="sendtocarrito(' . "'" . $data['id'] . "'" . ')">shopping_cart</span>
                                <h2>' . $data['title'] . '</h2>
                                <br>
                                <img class="imgPrincipal" src="' . $data['thumbnail'] . '">
                                <br>
                                <a href=' . $data['permalink'] . '>Link a Mercado Libre</a>
                                <br>
                                <p>Precio:' . $data['price'] . '$</p>
                                <br>
                                <div class="imgSecundarias">
                            </div>
                            <hr>
                        </div>';
          break;
        } else {
          break;
        }
      }

      $html .= '</script>';
      echo $html;
    }
    echo "</div>
    <script>
      function sendtocarrito(id)
      {
        var theObject = new XMLHttpRequest();
        theObject.open('POST', 'carrito.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        theObject.send('productoID='.concat(id));
       
      }
      </script>"; //to do SESSION id user
  }

  function getProduct($productId)
  {
    $data = $this->getJsonProduct($productId);
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
    $data = $this->getJsonProduct($productId);

    $lista = array();

    array_push($lista, $data['id']);
    array_push($lista, "MERCADOLIBRE");
    array_push($lista, str_split($data['title'], 36)[0]);
    array_push($lista, $data['price']);

    return $lista;
  }
}

class ebay
{
  function Search($palabraClave)
  {
    // error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging
    // API request variables
    $endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
    $version = '1.0.0';  // API version supported by your application
    $appid = 'raghusin-ebaycurv-PRD-59f29112f-6ad6655b';  // Replace with your own AppID
    $globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)

    $query = $_POST['element'];  // You may want to supply your own query

    $pgn = 'Pagination.PageNumber';
    $safequery = urlencode($palabraClave);  // Make the query URL-friendly
    $i = '0';  // Initialize the item filter index to 0

    // Create a PHP array of the item filters you want to use in your request
    $filterarray =
      array(
        array(
          'name' => 'MinPrice',
          'value' => $_POST['minPrice'] / 200,
          'paramName' => 'Currency',
          'paramValue' => 'USD'
        ),
        array(
          'name' => 'MaxPrice',
          'value' => $_POST['maxPrice'] / 200,
          'paramName' => 'Currency',
          'paramValue' => 'USD'
        ),
        array(
          'name' => 'FreeShippingOnly',
          'value' => 'false',
          'paramName' => '',
          'paramValue' => ''
        ),
        array(
          'name' => 'ListingType',
          'value' => array('AuctionWithBIN', 'FixedPrice', 'StoreInventory'),
          'paramName' => '',
          'paramValue' => ''
        ),
      );

    // Generates an indexed URL snippet from the array of item filters
    function buildURLArray($filterarray)
    {
      global $urlfilter;
      global $i;
      // Iterate through each filter in the array
      foreach ($filterarray as $itemfilter) {
        // Iterate through each key in the filter
        foreach ($itemfilter as $key => $value) {
          if (is_array($value)) {
            foreach ($value as $j => $content) { // Index the key for each value
              $urlfilter .= "&itemFilter($i).$key($j)=$content";
            }
          } else {
            if ($value != "") {
              $urlfilter .= "&itemFilter($i).$key=$value";
            }
          }
        }
        $i++;
      }
      return "$urlfilter";
    } // End of buildURLArray function
    $start = time();
    // Build the indexed item filter URL snippet
    buildURLArray($filterarray);

    if (isset($_GET["xx"])) {
      $xx = $_GET["xx"];
    } else {
      $xx = '2';
    }
    // echo "<input type='hidden' value='$xx' id='pgno'>";
    // Construct the findItemsByKeywords HTTP GET call 
    $apicall = "$endpoint?";
    $apicall .= "OPERATION-NAME=findItemsByKeywords";
    $apicall .= "&SERVICE-VERSION=$version";
    $apicall .= "&SECURITY-APPNAME=$appid";
    $apicall .= "&GLOBAL-ID=$globalid";

    $apicall .= "&keywords=$safequery";
    $apicall .= "&paginationInput.entriesPerPage=10";
    $apicall .= "&paginationInput.pageNumber=" . $xx;
    $resp = simplexml_load_file($apicall);

    if ($resp->ack == "Success") {

      $results = '';

      foreach ($resp->searchResult->item as $item) {
        $end = time();
        $pic   = $item->galleryURL;
        $link  = $item->viewItemURL;
        $title = $item->title;
        $itemid = $item->itemId;
        $subtitle = $item->subtitle;
        $paymentMethod = $item->paymentMethod;


        if ($paymentMethod == 'PayPal')
          $paymentMethod = "<img src='i/paypal.png'>";
        foreach ($resp->searchResult->item->sellingStatus as $value) {
          $price = $item->sellingStatus->currentPrice;
        }

        foreach ($resp->paginationOutput as $value) {
          $Pageno = $resp->paginationOutput->pageNumber;
          $totalEntries = $resp->paginationOutput->totalEntries;

          $totalPage = $resp->paginationOutput->totalPages;
        }
        $price *= 200;
        $results .= "
        
      <div id='containerEbay'>
      <form action='product.php' method='post'>
        <input type='submit' value='producto'>
        <input type='text' value = 'ebay' name='api' hidden>
        <input type='text' name='element' value='$itemid' hidden>
        </form>
        
      <h2>$title</h2>
            $itemid
        <img src=\"$pic\"><br>
        <a href='$link\'>Link a Ebay</a>
        <p>$subtitle</p>
        <p>Price $$price</p>
        <hr>
      </div>";
      }
    }

    echo "<div class='ebay'>$results</div>";
  }

  function getProduct($productId)
  {

    $apicall = 'https://api.ebay.com/buy/browse/v1/item/';
    $appid = 'raghusin-ebaycurv-PRD-59f29112f-6ad6655b';  // Replace with your own AppID

    $i = '0';  // Initialize the item filter index to 0


    $start = time();

    $apicall .= urlencode("v1|" + $productId + "|0");
    //$apicall .= "&SECURITY-APPNAME=$appid";*/

    echo '<a href="' . $apicall, '" >link xml</a><br>
    <p>' . $productId, '</p> <br>';
    $resp = simplexml_load_file($apicall);

    if ($resp->ack == "Success") {
      echo "funciona flaco alfin :D";
    } else {
      echo "no funciona :(";
    }
    /*
      $results = '';
      foreach ($resp->searchResult->item as $item)
      {
      $end = time();
      $pic   = $item->galleryURL;
      $link  = $item->viewItemURL;
      $title = $item->title;
      $id = $item->itemId;
      $subtitle = $item->subtitle;
      $paymentMethod = $item->paymentMethod;

      $price *= 200;
      $results .= "
      
      <div id='productoebay'>
        <h2>$title</h2>
        <img src=\"$pic\"><br>
        <a href='$link\'>Link a Ebay</a>
        <p>$subtitle</p>
        <p>Price $$price</p>
        <hr>
      </div>";
          }
        }
      }

      echo "<div class='ebay'>$results</div>";
    */
  }

  function getvalores()
  {
    //to do      
  }
}

if (isset($_POST['ebay'])) {
  $ebay = new ebay();
  $ebay->Search($_POST['element']);
}
if (isset($_POST['merc'])) {
  $merc = new merc();
  $merc->Search($_POST['element']);
};

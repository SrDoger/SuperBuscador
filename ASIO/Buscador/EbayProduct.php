<?php

$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'raghusin-ebaycurv-PRD-59f29112f-6ad6655b';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)

$referenceId = $_POST['element'];  // You may want to supply your own query

$pgn = 'Pagination.PageNumber';
$safequery = urlencode($referenceId);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0


$start = time();

$apicall = "$endpoint?";
$apicall .= "&ProductID=$referenceId";
$apicall .= "&SERVICE-VERSION=$version";
$apicall .= "&SECURITY-APPNAME=$appid";
$apicall .= "&GLOBAL-ID=$globalid";

$apicall .= "&keywords=$safequery";

echo '<a href="'.$apicall,'" >link xml</a><br>
<p>'.$referenceId,'</p> <br>';
$resp = simplexml_load_file($apicall);

if ($resp->ack == "Success") {
  echo "funciona flaco alfin :D";
}
  else{
    echo "no funciona :(" ;
  }
/*
  $results = '';
  foreach ($resp->searchResult->item as $item) {
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
?>
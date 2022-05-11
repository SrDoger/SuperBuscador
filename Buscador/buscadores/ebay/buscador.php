<?php
// error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging
// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'raghusin-ebaycurv-PRD-59f29112f-6ad6655b';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)

$query = $_POST['element'];  // You may want to supply your own query

$pgn='Pagination.PageNumber';
;
$safequery = urlencode($query);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0

// Create a PHP array of the item filters you want to use in your request
$filterarray =
  array(
    array(
    'name' => 'MaxPrice',
    'value' => '25',
    'paramName' => 'Currency',
    'paramValue' => 'USD'),
    array(
    'name' => 'FreeShippingOnly',
    'value' => 'true',
    'paramName' => '',
    'paramValue' => ''),
    array(
    'name' => 'ListingType',
    'value' => array('AuctionWithBIN','FixedPrice','StoreInventory'),
    'paramName' => '',
    'paramValue' => ''),
  );

// Generates an indexed URL snippet from the array of item filters
function buildURLArray ($filterarray) {
  global $urlfilter;
  global $i;
  // Iterate through each filter in the array
  foreach($filterarray as $itemfilter) {
    // Iterate through each key in the filter
    foreach ($itemfilter as $key =>$value) {
      if(is_array($value)) {
        foreach($value as $j => $content) { // Index the key for each value
          $urlfilter .= "&itemFilter($i).$key($j)=$content";
        }
      }
      else {
        if($value != "") {
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
  $xx=$_GET["xx"];

}else{  
    $xx= '2';
}
 echo "<input type='hidden' value='$xx' id='pgno'>";
// Construct the findItemsByKeywords HTTP GET call 
$apicall = "$endpoint?";
$apicall .= "OPERATION-NAME=findItemsByKeywords";
$apicall .= "&SERVICE-VERSION=$version";
$apicall .= "&SECURITY-APPNAME=$appid";
$apicall .= "&GLOBAL-ID=$globalid";

$apicall .= "&keywords=$safequery";
$apicall .= "&paginationInput.entriesPerPage=5";
$apicall .= "&paginationInput.pageNumber=".$xx;
$apicall .= "$urlfilter";
// Load the call and capture the document returned by eBay API
$resp = simplexml_load_file($apicall);


 



// echo "<pre> ";
// echo buildURLArray($filterarray);
// echo $resp;
// print_r($resp);
 // echo "</pre>";

// Check to see if the request was successful, else print an error
if ($resp->ack == "Success") {
  
  $results = '';
  // If the response was loaded, parse it and build links  
  // echo "<pre>";
  // print_r($resp->searchResult->item);

  // echo "</pre>";
  foreach($resp->searchResult->item as $item) {
// echo $resp->itemSearchURL;
  $end = time();
    $pic   = $item->galleryURL;
    $link  = $item->viewItemURL;
    $title = $item->title;
    $subtitle = $item->subtitle;
    $paymentMethod = $item->paymentMethod;

    
    if ($paymentMethod == 'PayPal')
      $paymentMethod = "<img src='i/paypal.png'>";
    
// echo "<pre>";
// print_r($resp);
// echo "</pre>";

    foreach ($resp->searchResult->item->sellingStatus as $value) { // Access that Arry from FOreach Loop 
          $price = $item->sellingStatus->currentPrice;
    }

    foreach ($resp->paginationOutput as $value) {
      $Pageno = $resp->paginationOutput->pageNumber;
      $totalEntries = $resp->paginationOutput->totalEntries;

      $totalPage = $resp->paginationOutput->totalPages;
    }
  
    $results .= "<div class='col-md-12' style='border-left:4px solid black; border-bottom: 1px solid #bcc; margin-top:2%;'><div class='col-md-3'><center><img src=\"$pic\" style='max-width: 100%;margin:1%;'></center></div><div class='col-md-9' ><h2> <a href='$link\' target='blank'>$title</a></h2><h5> $subtitle </h5> <h3>Price $$price  </h3><p align='right'>$paymentMethod</p></div></div>";
  

  }

?>

<?php 


}
// If the response does not indicate 'Success,' print an error
else {
  $results  = "<h3>Oops! The request was not successful. Make sure you are using a valid ";
  $results .= "AppID for the Production environment.</h3>";
}
?>

<!-- Build the HTML page with values from the call response -->
<DIV class="col-md-8 col-md-offset-3">
    <?php echo $results;?>
    <div class="clearfix"></div>


</DIV>

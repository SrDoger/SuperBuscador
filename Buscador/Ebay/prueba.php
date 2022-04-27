<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Merchandising Tutorial Sample</title>
<style type="text/css">body { font-family: arial,sans-serif; font-size: small; } </style>
</head>
<body>
<?php
  // Turn on all errors, warnings and notices for easier PHP debugging
  error_reporting(E_ALL);

  // Define global variables
  $m_endpoint = 'http://svcs.ebay.com/MerchandisingService?';  // Merchandising URL to call
  $appid = 'YourAppID';  // You will need to supply your own AppID
  $responseEncoding = 'XML';  // Type of response we want back

    // Define global variables and settings
    $m_endpoint = 'http://svcs.ebay.com/MerchandisingService?';  // Merchandising URL to call
    $appid = 'YourAppID';  // You will need to supply your own AppID
    $responseEncoding = 'XML';  // Type of response we want back
  
    // Create a function for the getMostWatchedItems call
    function getMostWatchedItemsResults ($selectedItemID = '', $cellColor = '') {
  
    } // End of getMostWatchedItemsResults function
    // Create a function for the getMostWatchedItems call
  function getMostWatchedItemsResults ($selectedItemID = '', $cellColor = '') {
    global $m_endpoint;
    global $appid;
    global $responseEncoding;

    // Construct getMostWatchedItems call with maxResults and categoryId as input
    $apicalla  = "$m_endpoint";
    $apicalla .= "OPERATION-NAME=getMostWatchedItems";
    $apicalla .= "&SERVICE-VERSION=1.0.0";
    $apicalla .= "&CONSUMER-ID=$appid";
    $apicalla .= "&RESPONSE-DATA-FORMAT=$responseEncoding";
    $apicalla .= "&maxResults=3";
    $apicalla .= "&categoryId=293";

    // Load the call and capture the document returned by eBay API
    $resp = simplexml_load_file($apicalla);

  } // End of getMostWatchedItemsResults function
 // Load the call and capture the document returned by eBay API
 $resp = simplexml_load_file($apicalla);

 // Check to see if the response was loaded, else print an error
 if ($resp) {
   // Set return value for the function to null
   $retna = '';

 } else {
   // If there was no response, print an error
   $retna = "Dang! Must not have got the getMostWatchedItems response!<br>";
   $retna .= "Call used was: $apicalla";
 }  // End if response exists

 // Return the function's value
 return $retna;

} // End of getMostWatchedItemsResults function
 // Load the call and capture the document returned by eBay API
 $resp = simplexml_load_file($apicalla);

 // Check to see if the response was loaded, else print an error
 if ($resp) {
   // Set return value for the function to null
   $retna = '';

 // Verify whether call was successful
 if ($resp->ack == "Success") {

   // If there were no errors, build the return response for the function
   $retna .= "<h1>Top 3 Most Watched Items in the ";
   $retna .=  $resp->itemRecommendations->item->primaryCategoryName;
   $retna .= " Category</h1> \n";

   // Build a table for the 3 most watched items
   $retna .= "<!-- start table in getMostWatchedItemsResults --> \n";
   $retna .= "<table width=\"100%\" cellpadding=\"5\" border=\"0\"><tr> \n";

   // For each item node, build a table cell and append it to $retna
   foreach($resp->itemRecommendations->item as $item) {

     // Determine which price to display
     if ($item->currentPrice) {
     $price = $item->currentPrice;
     } else {
     $price = $item->buyItNowPrice;
     }

     // For each item, create a cell with imageURL, viewItemURL, watchCount, currentPrice
     $retna .= "<td $thisCellColor valign=\"bottom\"> \n";
     $retna .= "<img src=\"$item->imageURL\"> \n";
     $retna .= "<p><a href=\"" . $item->viewItemURL . "\">" . $item->title . "</a></p>\n";
     $retna .= 'Watch count: <b>' . $item->watchCount . "</b><br> \n";
     $retna .= 'Current price: <b>$' . $price . "</b><br><br> \n";
     $retna .= "</td> \n";
   }
   $retna .= "</tr></table> \n<!-- finish table in getMostWatchedItemsResults --> \n";

   } else {
       // If there were errors, print an error
       $retna = "The response contains errors<br>";
       $retna .= "Call used was: $apicalla";

 }  // if errors

 } else {
   // If there was no response, print an error
   $retna = "Dang! Must not have got the getMostWatchedItems response!<br>";
   $retna .= "Call used was: $apicalla";
 }  // End if response exists

 // Return the function's value
 return $retna;

} // End of getMostWatchedItemsResults function
 // Return the function's value
 return $retna;

} // End of getMostWatchedItemsResults function

  // Display the response data
  print getMostWatchedItemsResults('', '');

?>
</body>
</html>
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
  $s_endpoint = "http://open.api.ebay.com/shopping?";  // Shopping URL to call
  $cellColor = "bgcolor=\"#dfefff\"";  // Light blue background used for selected items 
  $m_endpoint = 'http://svcs.ebay.com/MerchandisingService?';  // Merchandising URL to call
  $appid = 'YourAppID';  // You will need to supply your own AppID
  $responseEncoding = 'XML';  // Type of response we want back

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

        // Set the cell color blue for the selected most watched item
        if ($selectedItemID == $item->itemId) {
          $thisCellColor = $cellColor;
        } else {
          $thisCellColor = '';
        }

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
        $retna .= "<FORM ACTION=\"" . $_SERVER['PHP_SELF'] . "\" METHOD=\"POST\"> \n";
        $retna .= "<INPUT TYPE=\"hidden\" NAME=\"Selection\" VALUE=\"$item->itemId\"> \n";
        $retna .= "<INPUT TYPE=\"submit\" NAME=\"$item->itemId\" ";
        $retna .= "VALUE=\"Get Details and Related Category Items\"> \n";
        $retna .= "</FORM> \n";
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


  // Use itemId from selected most watched item as input for a GetSingleItem call
  function getSingleItemResults ($selectedItemID) {
    global $s_endpoint;
    global $appid;
    global $responseEncoding;
    global $cellColor;

    $retnb  = '';

    // Construct the GetSingleItem call 
    $apicallb  = "$s_endpoint";
    $apicallb .= "callname=GetSingleItem";
    $apicallb .= "&version=563";
    $apicallb .= "&appid=$appid";
    $apicallb .= "&itemid=$selectedItemID";
    $apicallb .= "&responseencoding=$responseEncoding";
    $apicallb .= "&includeselector=Details,ShippingCosts";

    // Load the call and capture the document returned by eBay API
    $resp = simplexml_load_file($apicallb);
    
    // Check to see if the response was loaded, else print an error
    if ($resp) {

       // If there is a response check for a picture of the item to display
      if ($resp->Item->PictureURL) {
      $picURL = $resp->Item->PictureURL;
      } else {
      $picURL = "http://pics.ebaystatic.com/aw/pics/express/icons/iconPlaceholder_96x96.gif";
      }

      // Check for shipping cost information
      if ($resp->Item->ShippingCostSummary->ShippingServiceCost) {
      $shippingCost = "\$" . $resp->Item->ShippingCostSummary->ShippingServiceCost;
      } else {
      $shippingCost = "Not Specified";
      }

      // Build a table of item and user details for the selected most watched item
      $retnb .= "<!-- start table in getSingleItemResults --> \n";
      $retnb .= "<table width=\"100%\" cellpadding=\"5\"><tr> \n";
      $retnb .= "<td $cellColor width=\"50%\">\n";
      $retnb .= "<div align=\"left\"> <!-- left align item details --> \n";
      $retnb .= "Current price: <b>\$" . $resp->Item->ConvertedCurrentPrice . "</b><br> \n";
      $retnb .= "Shipping cost: <b>" . $shippingCost . "</b><br>\n";
      $retnb .= "Time left: <b>" . getPrettyTimeFromEbayTime($resp->Item->TimeLeft) . "</b><br> \n";
      $retnb .= "</div></td> \n";
      $retnb .= "<td $cellColor><div align=\"left\"> <!-- left align item details --> \n";
      $retnb .= "Seller ID: <b>" . $resp->Item->Seller->UserID . "</b><br> \n";
      $retnb .= "Feedback score: <b>" . $resp->Item->Seller->FeedbackScore . "</b><br> \n";
      $retnb .= "Positive Feedback: <b>" . $resp->Item->Seller->PositiveFeedbackPercent . "</b><br>\n";
      $retnb .= "</div></td></tr></table> \n<!-- finish table in getSingleItemResults --> \n"; 

    } else {
    // If there was no response, print an error
    $retnb = "Dang! Must not have got the GetSingleItem response!";  
    }  // if $resp

    return $retnb;

  } // End of getSingleItemResults function 


  // Use itemId from selected most watched item as input for a getRelatedCategoryItems call
  function getRelatedCategoryItemsResults ($selectedItemID) {
    global $m_endpoint;
    global $appid;
    global $responseEncoding;

    // Construct the getRelatedCategoryItems call
    $apicallc  = "$m_endpoint";
    $apicallc .= "OPERATION-NAME=getRelatedCategoryItems";
    $apicallc .= "&SERVICE-VERSION=1.0.0";
    $apicallc .= "&CONSUMER-ID=$appid";
    $apicallc .= "&RESPONSE-DATA-FORMAT=$responseEncoding";
    $apicallc .= "&maxResults=3";
    $apicallc .= "&itemId=$selectedItemID";

    // Load the call and capture the document returned by eBay API
    $resp = simplexml_load_file($apicallc);
    
    // Check to see if the response was loaded, else print an error
    if ($resp) {

      $retnc = '';
    
    // Verify whether call was successful
    if ($resp->ack == "Success") {

        // If there were no errors, build a table for the 3 related category items
        $retnc .= "<!-- start table in getRelatedCategoryItemsResults --> \n";
        $retnc .= "<table width=\"100%\" cellpadding=\"5\" border=\"0\" bgcolor=\"#FFFFA6\"><tr> \n";
        $retnc .= "<td colspan=\"3\"><b>eBay shoppers that liked items in the selected ";
        $retnc .= "item's category also liked items like the following from related categories:</b>";
        $retnc .= "</td></tr><tr> \n";
        
        // If the response was loaded, parse it and build links  
        foreach($resp->itemRecommendations->item as $item) 
        {
        // For each item node, build a link and append it to $retnc
        $retnc .= "<td valign=\"bottom\"> \n";
        $retnc .= "<div align=\"center\"> <!-- center align item details --> \n";
        $retnc .= "<img src=\"$item->imageURL\"> \n";
        $retnc .= "<p><a href=\"" . $item->viewItemURL . "\">" . $item->title . "</a></p> \n";
        $retnc .= "</div></td> \n";
        } // foreach
        $retnc .= "</tr></table> \n<!-- finish table in getRelatedCategoryItemsResults --> \n";

    } else {
      // If there were errors, print an error
      $retnc  = "The response contains errors<br>";
      $retnc .= "Call used was: $apicallc";
    }  // if errors

    } else {
      // If there was no response, print an error
      $retnc = "Dang! Must not have got the getRelatedCategoryItems response! <br> $apicallc";
    }  // if $resp
  
    return $retnc;
  
  }  // End of getRelatedCategoryItemsResults function


  // Make returned eBay times pretty
  function getPrettyTimeFromEbayTime($eBayTimeString){
    // Input is of form 'PT12M25S'
    $matchAry = array(); // null out array which will be filled
    $pattern = "#P([0-9]{0,3}D)?T([0-9]?[0-9]H)?([0-9]?[0-9]M)?([0-9]?[0-9]S)#msiU";
    preg_match($pattern, $eBayTimeString, $matchAry);
    
    $days  = (int) $matchAry[1];
    $hours = (int) $matchAry[2];
    $min   = (int) $matchAry[3];  // $matchAry[3] is of form 55M - cast to int 
    $sec   = (int) $matchAry[4];
    
    $retnStr = '';
    if ($days)  { $retnStr .= " $days day"   . pluralS($days);  }
    if ($hours) { $retnStr .= " $hours hour" . pluralS($hours); }
    if ($min)   { $retnStr .= " $min minute" . pluralS($min);   }
    if ($sec)   { $retnStr .= " $sec second" . pluralS($sec);   }
    
    return $retnStr;
  } // function

  function pluralS($intIn) {
    // if $intIn > 1 return an 's', else return null string
    if ($intIn > 1) {
      return 's';
    } else {
      return '';
    }
  } // function

    // Display the response data
  // If button clicked for most watched item, display details and related category items
  if (isset($_POST['Selection']))  {
    $selectedItemID = $_POST['Selection'];
    print getMostWatchedItemsResults($selectedItemID, $cellColor);
    print getSingleItemResults($selectedItemID);
    print getRelatedCategoryItemsResults($selectedItemID);
  } else {
  // If button not clicked, show only most watched items
    print getMostWatchedItemsResults('', '');
  }

?>

</body>
</html>
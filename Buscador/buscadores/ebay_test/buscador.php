<?php
 /*   include 'ebay_api.php';
    $api = new ebay_api();
    $productId = $_GET['element'];

    //echo $api->GetEbayTime();
    $item_id = $api->GrabItemID($productId);
    $product_information = $api->si($item_id, "0", true);

    
    // Basic Call Example
    $ebay_time = $api->GetEbayTime();
    print (Sebay_time . "\n");
    // GetSingleItem Call (Product Information)
    $product_information = $api->GetSingleItem($item_id, "0", true);
    print($product_information['Converted Currency ID']."\n");
    print($product_information['Converted Current Price']."\n");
    echo $product_information[ 'Views']."\n";
//    print($api->curr2sym($product_information(['CurrentPriceCurrencyID']) . " " . $product_information['CurrentPrice'] . "\n");

"http://open.api.ebay.com/shopping?" +
                "callname=GetSingleItem" +
                "&responseencoding=JSON" +
                "&appid=" + YOUR_APP_ID
                "&siteid=0" +
                "&ItemID=" + itemId +
                "&IncludeSelector=ItemSpecifics" +
                "&version=829"
                + "&callbackname=JSON_CALLBACK";

                "http://open.api.ebay.com/shopping?callname=GetSingleItem&responseencoding=JSON&appid=AgAAAA**AQAAAA**aAAAAA**KFVgYg**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4aiDpmDqA2dj6x9nY+seQ**5OYFAA**AAMAAA**J13h4uHUww8MrHjgDUKoCQrAKyUh+3SqpdTP8wP14Pk8IwAdMYwF5d53smdD1TSIz4YYGl8+6ezwKMekHKY7mFydYjLGNBq/NtQrAo2MgKRDhPAyQe0IcKGQKilq6IgnptD3vKgG0weYCDqCsS/7rr0PMVznvWQ8AEolxh8hx8waP0eZku0ob9g44rvwrw36ge3XJSmxmfyHSW7vqB5edCNW54F+b8ez8tDdcw2hODf1mCTHjKgTZ4nmmNApsZ1YiswpD4kIUoRBxDqroTAt4H5m+zmIc0+Uz5Nam2FAAoaan/v1jGyq75+wwrgwYSNDOSpmMVGNSGYheP1iYcurQCWhlDfqUxWNWsLLrBljvut5lZ2le647QpKugrj5roJHyd7hgQRtDIn8pN86siy4npN66G8rSIU3yggNGjgyYuPrdfml8aLobuqD4VHiAkHEq4Rs28TKQ1/uIl3SkKT1HCui3AfTDyImVQpWx4t/ZF5iPJBQ309nfegA8pq1xvj8QSdroeEcBJKGt4j/wyragUCoxVt9hx2DB/AjrF/VYi7x/S2j6g5nzWoVXE/VmMWV2X9sURNVhtq679Y8ZnbAGQevI5bH1eW5G1fXKuayi7iG9dkII+Y4B9Rz+tTy1y41hwsTsij/3gp/ILSlVwiB2ZCbguxYMRzt7AwsoiGaXxrPnFRcWm+p4qDrrvk6rp2veeLyuzzU/XWdh7ebgwACo48HIf1mIyEXrAxf/xAlZfNDYJbk1DEH9VeNAEyYPFo1&siteid=0&ItemID=124613323901&IncludeSelector=ItemSpecifics&version=829&callbackname=JSON_CALLBACK
*/?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo $_POST['ebay'];
    if (isset($_POST['ebay'])) {

        $input = str_replace(" ", "%20", $_POST['element']);
        $token = 'v^1.1#i^1#p^1#r^0#f^0#I^3#t^H4sIAAAAAAAAAOVYbWwURRjutdeShi9DGlFBc66oSN29/bjb21u5i9eW0iO0V3pt0w8Nzu7O9pbu7R47s7SnEmsTa4y/0ZiI1hgMxAABExNIDCpK4scPw1cUEiAqCvoHCSgaUeeupVwroYW7mCben8vOvO877/PM+zEz7FBV9YqRppHf5nvmlI8OsUPlHg83l62uqqxdUFF+T2UZWyDgGR1aNuQdrji3EoG0mZHbIMrYFoK+wbRpITk/GKFcx5JtgAwkWyANkYxVORlrXivzDCtnHBvbqm1SvnhDhApwogIEPshrCoQgoJFR65rNdjtChTlJFwEnhEIhkRN1ncwj5MK4hTCwcITiWZ6n2SDNBto5SeYFmZeYIM/1UL5O6CDDtogIw1LRvLtyXtcp8PXmrgKEoIOJESoajzUmE7F4w6qW9pX+AlvRcR6SGGAXTf6qtzXo6wSmC2++DMpLy0lXVSFClD86tsJko3LsmjO34X6eaoVQCSUhzAXUkBoQlZJQ2Wg7aYBv7kduxNBoPS8qQwsbODsdo4QNZQNU8fhXCzERb/Dl/ta5wDR0AzoRalVdrDvW2kpFY6YJrGbbopFBJ+u6aJ4Pk5hSBI0OKoAL8YHw+BJjdsYJnrJGvW1pRo4u5GuxcR0k/sKprHAFrBChhJVwYjrO+VIgx7PX2ONCPbntHNs/F6es3I7CNKHAl/+cnvsJbYwdQ3ExnLAwdSJPToQCmYyhUVMn81E4HjiDKEKlMM7Ifv/AwAAzIDC20+fnWZbzdzWvTaopmAbUhGwu143pFWgjD0WFRBMZMs5miC+DJEqJA1YfFRUkMSRJ47xPdis6dfRfAwWY/ZNzoVS5oUrhYDAc5ligiIoulKTMRMfD05/zAyogS6eB0w9xxgQqpFUSZ24aOoYmC0GdF0hu0poY1ulAWNdpJaiJNKdDyEKoKGpY+n+kyEyDPAlVB+ISRnkJIjzRwvNuXPTHUwOr4vGOdfXBui63p7anzVH7EquB0pji2wIbW1usVd2RmebBDcHXmwZhpp2sX2oCcrleHAlNNsJQKwpeUrUzsNU2DTU7uzZYcLRW4OBsnZsl30lomuSvKKixTCZeylpdApAzLhO3h7jU3ek/70w3RIVyITu7UOX0ETEAMgaT6z2Maqf9NiCHjtzQeqTmcp147ZtWkAj5FTfL9LkQYeKJRk59M1YySBlnSBvTZq4y1iQJiJmrkCuF5qr4thbKd2OGsGn0pTC6pTUHiyFFcc3+ooLOIFeFWRVyBO4YbkMbO+MzefAM2qQyDkS265DrDZPIHXzb7X5okcMEdmzThE4nV3QZTaddDBQTzrZ6WoLqYoBiTzreYc/eEuPixCAnSpLIFodNzZ9l1s+2nlC6LngLNxn/5BeVaFn+xw17PmCHPfvKPR42xNJcLftIVUWHt2IehUgdYRCwNMUeZAygM6SEWQC7DmT6YTYDDKe8ymOcOKpeKXjLGX2SvWviNae6gptb8LTDLr0+U8ktXDyf59kgG+AkXuClHvaB67Ne7k5vzaGhjxe8XbsndeJs73s13d4zV7VXVrPzJ4Q8nsoyEnhl4ta/fYH60z/u3xznzpT9Ejx5AJ9b/NXyozuZrf3LXmIOLzzedipc/enJnQ85S57Z83To4q5No9+4G/3v7Ot9Ob30yufwwSWdjfM8LdUHv//w53W/fnJ4+HLN+V6paWfvYwdU3RkdeWX3nPej2/kjTc4afPCPjalFghE/dfX3fdtbYjtGjz1/7IsG70fbmHvtnuSjX28f6j94qL9uEYKB5U+oz2USu19T9h/Xu9nPvivv3Ozb0WHUP/zGjotbTm+gv5TWC382771vxL/nXWvbi4HHO9bUXOg5/5a8zbv2/qd+CP/1+q5njwQufXvhVf7Nu88kuC3doRf0xhXtXWmrq/qyUH1H86WfxLPa1rFt/AfpTRd+ZRMAAA==';
        $marketplace;

        $call = 'https://api.sandbox.ebay.com/buy/browse/v1/item_summary/';
        $call .= 'search?q=' . $input;
        $call .= '&limit=3';
        $call .= '&security-app=' . $token;
        $call .= '&global-id=EBAY_US';

        $apicall = "$endpoint?"; // URL from ABove

        $apicall .= "OPERATION-NAME=findItemsByKeywords";

        $endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';
        $version = '1.0.0';
        $appid = 'raghusin-ebaycurv-PRD-59f29112f-6ad6655b';
        $globalid = 'EBAY-US';

        $query = "ebay";

        $apicall .= "$endpoint?";
        $apicall .= "OPERATION-NAME-findItemsBykeywords";
        $apicall .= "&SERVICE-VERSION=$version";
        $apicall .= "&SECURITY-APPNAME=$appid";
        $apicall .= "&GLOBAL-ID=$globalid";
        $apicall .= "&keywords=$safequery";
        $apicall .= "&paginationInput.entriesPerPage=5";
        $apicall .= "&paginationInput.pageNumber-" . $xx;
        $apicall .= "$urlfilter";

        $data = simplexml_load_file($call);
        print_r($data);
        echo '<a href="' . $call, '">Link piola que no funca xd</a>';
    }

    ?>

</body>

</html>
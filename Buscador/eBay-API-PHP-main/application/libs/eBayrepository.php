<?php
class eBayrepository 
{
    private $token;
    private $tokenExpires;
    private $authorization;
    
    public function __construct(string $auth)
    {
        $this->authorization = $auth;
    }

    // App token is obtained using developer's AppID:CertID. Concatenate with colon and do base64.
    // A token expires in about two hours. User tokens are stored in database and last about a year.
    public function getAppToken()
    {
        $token = 'unknown';
        // Do we already have a valid token?
        if (isset($_SESSION['Token']) && $_SESSION['Expire'] > time())
        {
            $token = $_SESSION['Token'];
        }
        else {
            // Use cURL program to obtain a token
            unset($out);
            $cmdOptions = ' -sS -X POST https://api.ebay.com/identity/v1/oauth2/token '
                . '-H "Content-Type: application/x-www-form-urlencoded" '
                . '-H "Authorization: Basic ' . $this->authorization . '" '
                . '-d "grant_type=client_credentials&scope=https%3A%2F%2Fapi.ebay.com%2Foauth%2Fapi_scope"';
            // Do not use escapeshellarg() here. It really messes up your command line.
            exec(CURL_PGM . $cmdOptions . " 2>&1", $out, $status);
            $expires = 0;
            $val = '';
            if ($status == 0) 
            {
                $val = json_decode($out[0]);
                $token = $val->access_token;
                $expires = $val->expires_in;
                $_SESSION['Token'] = $token;
                // Expire our token two minutes before it actually does
                // Currently a token lasts two hours.
                $_SESSION['Expire'] = time() + $expires - 120;
            }
            else
            {
                // Should raise an exception here
                print_r($out);
            }
        }
        return $token;
    }

    // ACTION: for ajax to get all categories that contain term.
    public function searchCategories($term)
    {
        // Get a fresh token
        $token = $this->getAppToken();
        unset($out);
        $fmt = 'https://api.ebay.com/commerce/taxonomy/v1/category_tree/0/get_category_suggestions?q=%s';
        $cmd = sprintf($fmt, $term);
        $options = " -sS -X GET ";
        $headers = ' -H "Content-Type: application/json" '
                  . '-H "Authorization:Bearer ' . $token . '"';
                //  . '-H "Accept-Encoding:application/gzip"';
        // Create a request
        exec(CURL_PGM . $options . $cmd . $headers . " 2>&1", $out, $status);

        $val = '';
        $response = [];
        if ($status == 0) 
        {
            $val = json_decode($out[0]);
            foreach($val->categorySuggestions as $suggestion)
            {
                $catID = $suggestion->category->categoryId;
                $catName = $suggestion->category->categoryName;
                $anscestor = '';
                foreach($suggestion->categoryTreeNodeAncestors as $parent)
                {
                    $anscestor = $parent->categoryName . "-->" . $anscestor;   
                }
                $fullName = $anscestor . $catName;
                $response[] = array('catid'=>$catID, 'desc'=>$fullName);
            }
        }
        else
        {
            // Should raise an exception here
            foreach($out as $line)
            {
                $response[] = array('catid'=>0, 'desc'=>$line);
            }
        }
        return $response;
    }

    function getItemAspects($catID)
    {
        // Get a fresh token
        $token = $this->getAppToken();
        unset($out);
        $fmt = 'https://api.ebay.com/commerce/taxonomy/v1/category_tree/0/get_item_aspects_for_category?category_id=%s';
        $cmd = sprintf($fmt, $catID);
        $options = " -sS -X GET ";
        $headers = ' -H "Content-Type: application/json" '
                  . '-H "Authorization:Bearer ' . $token . '"';
                //  . '-H "Accept-Encoding:application/gzip"';
        // Create a request
        exec(CURL_PGM . $options . $cmd . $headers . " 2>&1", $out, $status);

        $val = '';
        if ($status == 0) 
        {
            $val = json_decode($out[0]);
        }
        return $val;
    }

}
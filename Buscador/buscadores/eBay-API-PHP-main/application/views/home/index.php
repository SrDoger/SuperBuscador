<?php
// Basic site information.
$PageTitle="API Setup";
// Add tags for page header section
function customPageHeader(){?>
<?php }
include_once(PROJECT_ROOT . '/application/views/_templates/header.php');
?>
<!-- Start of page body ----------------------------------------->
<h1>eBay API Setup</h1>
    <!-- main content output -->
    <div>
    <p>Demonstration of 
    <a href='/home/categories'>search eBay categories</a>,  
    <a href='/home/specifics'>get item aspects</a>, 
    and <a href='/home/tokens'>OAuth tokens.</a> Use these examples to 
    implement other API calls.</p>
    <p>Make sure you have made the necessary modifications to DemoConstants.php and /.htaccess.
    You need to have curl installed on your webserver. You need a hashed copy of your eBay 
    developer authorization token in the DemoConstants.php file. Use your production keys, not
    your sandbox keys. eBay provides limited functionality for the sandbox API calls.</p> 
    <p>The API calls included here use the Client credentials grant flow. You need to base64 
    encode your eBay client id and eBay client secret concatenated as 'client_id:client_secret'
    You can do this from the command line or use one of many websites that let you encode 
    strings. The resultant string is known as your Authorization Token. Paste this value into 
    the DemoConstants.php file.  Keep the string secure. It is used to generate short-lived 
    application access tokens.  A valid access token is required on every API call that obtains
    information from eBay.</p>
    <ul>
        <li><a href='https://curl.se/' target="_blank" rel="noopener noreferrer">Curl Program</a></li>
        <li><a href='https://developer.ebay.com/my/keys' target="_blank" rel="noopener noreferrer">
        Your eBay developer keys</a></li>
        <li><a href='https://developer.ebay.com/api-docs/static/oauth-base64-credentials.html'
        target="_blank" rel="noopener noreferrer">Info on base64 Authorization Tokens</a></li>
    </ul>
    </div>
<!-- End of page body ------------------------------------------>
<?php
// Add tags for page footer 
function customPageFooter() { ?>
<!-- Custom JavaScript for this site -->
<script>
</script>
<?php }
include_once(PROJECT_ROOT . '/application/views/_templates/footer.php');
?>
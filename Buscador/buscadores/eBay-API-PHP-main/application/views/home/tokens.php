<?php
// Demonstrate eBay token handling.
$PageTitle="eBay Tokens";
// Make our token more readable
$token = 'There is no valid token. Select a category on other demo page and a token will be created.';
$expDate = '';

if (isset($_SESSION['Token']))
{
    $token = $_SESSION['Token'];
    $expire = $_SESSION['Expire'];
    $expDate = $expire . ' (' . date("d F Y H:i:s", $expire) . ')';
}
// Add tags for page header section
function customPageHeader(){?>
<?php }
include_once(PROJECT_ROOT . '/application/views/_templates/header.php');
?>
<!-- Start of page body ----------------------------------------->
<h1>eBay Token Management</h1>
    <!-- main content output -->
    <div>
    <p>Demo of API call to obtain client authorization.<br><a 
     href='https://developer.ebay.com/api-docs/static/oauth-client-credentials-grant.html' 
     target="_blank" rel="noopener noreferrer">Documentation</a>
    </p>
   
    <div class=form-group>
    <label for="tokenVal">Current Token:</label>
    <textarea class="form-control" rows="5" id="tokenVal"><?php echo $token ?></textarea>
    </div>
    <div class="form-group">
    <label for="tokenExp">Token Expires:</label>
    <input type="text" class="form-control" id="tokenExp" value="<?php echo $expDate ?>">
    </div>
    <div class="form-group">
    <p>Tokens are created only when they are needed. This demo stores the token returned by
    eBay in a session variable. It is reused for all API calls. The token is refreshed only 
    if it used near its expiration time or if the session variable is cleared. eBay returns
    the number of seconds the token is good for. We convert that to an expiration date with:
    time() + numSeconds - 120. We subtract two minutes to give a margin so we don't try
    to reuse an expired token.</p>
    </div>
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
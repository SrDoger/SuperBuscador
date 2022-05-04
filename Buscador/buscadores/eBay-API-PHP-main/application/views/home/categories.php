<?php
// Demonstrate use of eBay Category Search.
$PageTitle="eBay Categories";
// Add tags for page header section
function customPageHeader(){?>
<?php }
include_once(PROJECT_ROOT . '/application/views/_templates/header.php');
include_once(PROJECT_ROOT . '/application/views/catModal.php'); 
?>
<!-- Start of page body ----------------------------------------->
<h1>Search eBay Categories</h1>
    <!-- main content output -->
    <div>
     <p>Demo of API call get_category_suggestions.<br><a 
     href='https://developer.ebay.com/api-docs/commerce/taxonomy/resources/methods' 
     target="_blank" rel="noopener noreferrer">Documentation</a></p>
     </div>
    <div class="text-center">
    <button type="button" class="btn btn-lg btn-primary" 
    data-toggle="modal" data-target="#categoryModal">Select</button>
    <p id='curCategory' class="m-2">Click Select to select a category.</p>
     </div>
<!-- End of page body ------------------------------------------>
<?php
// Add tags for page footer 
function customPageFooter() { ?>
<!-- Code for category search modal -->
<script type="text/javascript" src="<?php echo SITE_BASE; ?>js/catModal.js"></script>
<!-- Code for this page only -->
<script type="text/javascript" src="<?php echo SITE_BASE; ?>js/categories.js"></script>
<?php }
include_once(PROJECT_ROOT . '/application/views/_templates/footer.php');
?>
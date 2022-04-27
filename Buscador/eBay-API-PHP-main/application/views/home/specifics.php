<?php
// Demonstrate eBay Item Specifics.
$PageTitle="Item Specifics";
// Add tags for page header section
function customPageHeader(){?>
<?php }
include_once(PROJECT_ROOT . '/application/views/_templates/header.php');
include_once(PROJECT_ROOT . '/application/views/specificsModal.php'); 
?>
<!-- Start of page body ----------------------------------------->
<h1>eBay Item Specifics</h1>
    <!-- main content output -->
    <div>
    <p>Demo of API call get_item_aspects_for_category.<br><a 
     href='https://developer.ebay.com/api-docs/commerce/taxonomy/resources/methods' 
     target="_blank" rel="noopener noreferrer">Documentation</a>
    </p>
    </div>

    <div>
    <label for="CategoryID">Sample Categories:</label>
    <div class="input-group">
    <select class="form-control custom-select" id="CategoryID" name="CategoryID">
    <?php
    foreach($categories as $category)
    {   
        echo "<option value=" . $category['catid'] . ">" . $category['desc'] . "</option>";
    }
    ?>
    </select>
    <span class=input-group-btn>
    <button type="button" class="btn btn-md btn-primary mx-2" data-toggle="modal" data-target="#itemSpecifics">Get Specifics</button>
    </span>
    </div>
    <p class="m-2">Select a category then click Get Specifics. 
    Item aspects change depending on the category selected. Not all eBay categories have item aspects.
    </div>
<!-- End of page body ------------------------------------------>
<?php
// Add tags for page footer 
function customPageFooter() { ?>
<!-- Custom JavaScript for this site -->
<script>
$(document).ready(function() {
    // Item specifics modal is opening
    $('#itemSpecifics').on('show.bs.modal', function (e) {
        var category = $('#CategoryID');
        var item = 0;
        $('#itemSpecifics .modal-body').load(siteBase + '/process/loadSpecifics/' + item + '/' + category.val(), function() {
            $('#specMaster').trigger('change');
        });
    });
});
</script>
<?php }
include_once(PROJECT_ROOT . '/application/views/_templates/footer.php');
?>
<!-- Show item specifics in the body of the specificsModal.php page -->
<h2 id='formTitle'></h2>
<div class="row py-2">
<div class='col-sm-6'><!-- Start column 1 -->
<select name="specMaster" id="specMaster" class="selectpicker form-control" size="8" onchange=showField(this.selectedIndex)>  
<?php
$count = 0;
// Populate the list of specifics - specMaster
foreach ($itemSpecifics as $specific) { 
    $selected = $count==0 ? " selected>" : ">";
    echo("<option value='" . $specific->specificKey . "'" . $selected . $specific->displayKey . "</option>");
    $count+=1;
}
?>
</select>
</div><!-- End first column -->
<div class='col-sm-6'><!-- Start second column -->
<div id='specificForm'>
<input type="hidden" id="itemRID" name="itemRID" value="<?php echo $itemRID ?>">
<input type="hidden" id="specSize" name="specSize" value="<?php echo $count ?>">
<?php
// Loop on all fields. Use a unique class for each so we can
// turn them on and off individually.
$count = 0;
foreach ($itemSpecifics as $specific) { 
    echo "<div id='row-" . $count . "' class='form-group'>";
    // We are making a list of key value pairs. The hidden field is our key.
    echo "<input type='hidden' id='key-" . $count . "' name='key-" . $count . "' value='" . $specific->specificKey . "'>"; 
    // The value field can be of several types depending on the field. Some things are common to all:
    $common = " name='value-" . $count . "' id='value-" . $count . "' ";

    // Show a prompt for the user
    echo '<h5>' . $specific->userPrompt . '</h5>';
   
    // Check what type of field we are making. It can be a drop
    // down, a selection box, or a text box.
    if (property_exists($specific, 'suggestedValues') && count($specific->suggestedValues) > 0)
    {
        // We are making either a drop down or a multi-select listbox
        if ($specific->isMulti)
        {
            // The user can select multiple values. We need the field name to end with [] so php
            // post will interpret it as an array.
            echo "<select name='value-" . $count . "[]' id='value-" . $count . "' multiple class='form-control custom-select'>";
            $closeTag = '</select>';

        }
        elseif ($specific->isFreeForm)
        {
            // The user can select from a list or enter a free form value
            echo "<input type='text' class='form-control custom-select' autocomplete='off'" . $common . "list='list-" . $count . "'>";
            echo '<datalist id=list-' . $count . '>';
            $closeTag = '</datalist>';
        }
        else
        {
            // The user must select a value from a list. For now we are letting
            // the user enter a value because eBay does not seem to have aspectMode
            // set correctly everywhere.
            echo "<input type='text' class='form-control custom-select' autocomplete='off'" . $common . "list='list-" . $count . "'>";
            echo '<datalist id=list-' . $count . '>';
            $closeTag = '</datalist>';
        }
        // Create the select list
        foreach ($specific->suggestedValues as $choice) {
            echo '<option>' . $choice . '</option>';
        }
        echo $closeTag;
    }
    else 
    {
        // The user will enter a scalar value
        if ($specific->maxLength > 0)
        {
            echo "<input type='text' class='form-control'" . $common . "maxlength='" . $specific->maxLength . "'>";
        }
        else 
        {
            echo "<input type='text' class='form-control'" . $common . ">";
        }
    }
    echo "</div>";
    $count+=1;
}
?>
</div><!-- specificForm -->
</div><!-- End second column -->
</div>  

// javascript specific to the category.php page
//
$(document).ready(function() {
    // Category search modal has closed 
    $('#categoryModal').on('hidden.bs.modal', function (e) {
        // If the user clicked the ok button, populate the category dropdown
        // with the newly selected item.
        var selectedID = $('#categoryModal #selectedID');
        var selectedDesc = $('#categoryModal #selectedDesc');
        if (selectedID.val().length > 0) 
        {
            // Update the category dropdown with our new values
            var catText = $('#curCategory');
            catText.text('You selected category ' + selectedID.val() + ': ' + selectedDesc.val());
        }
        // Clear the values from the modal
        selectedID.val('');
        selectedDesc.val('');
    });
});

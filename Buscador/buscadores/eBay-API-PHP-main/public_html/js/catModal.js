const catID = $('#categoryID');
// JQuery support for the catModal dialog.
$(document).ready(function(){
    // Search button click
    $('#btnSearch').click(function(){
        var term = encodeURIComponent($('#searchWord').val().trim());
        if (term)
        {
            var results = $('#catDesc');
            catID.val('');
            results.empty();
            $.getJSON(siteBase + '/process/searchCategories', {term: term}, function(data){
                for (var x = 0; x < data.length; x++) {
                    results.append(new Option(data[x].desc, data[x].catid));
                }
            });  
        }  
    });
    // OK Button click - close the dialog
    $("#catbtn_ok").click(function (e) {
        var selectedVal = $('select#catDesc').val();
        var selectedDesc = $('select#catDesc :selected').text(); 
        // Add the item to the category drop down and make it the current item.
        $('#selectedID').val(selectedVal);
        $('#selectedDesc').val(selectedDesc);
        $('#categoryModal').modal('hide');
    });
    // Show new category id when the user selects a description
    $('select#catDesc').on('change', function (){
        catID.val($(this).val());
    });

});

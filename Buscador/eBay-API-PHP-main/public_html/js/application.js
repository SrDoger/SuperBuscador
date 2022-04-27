// Set the navigation to active for the current page
$(document).ready(function(){
    $('a').each(function(){
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('active'); 
            $(this).parents('li').addClass('active');
        }
    });
});
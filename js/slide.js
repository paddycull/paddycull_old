$(document).scroll(function () {
    var y = $(this).scrollTop();
    // Show element after user scrolls past 
    // the top edge of its parent 
    $('.fade').each(function () {
        var t = $(this).parent().offset().top;
        var t = t -250;
        if (y > t) {
            $(this).fadeIn();
        }
    });
});
function onSubmit(token) {
    document.getElementById("contact-form").submit();
}

!function($) {
    var height;
    $("a#page-1-cta").on("click", function() {
        height = $(window).height(), $("html, body").animate({
            scrollTop: height + "px"
        }, 1100);
    });
}(jQuery);
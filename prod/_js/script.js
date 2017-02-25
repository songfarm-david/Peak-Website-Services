var hashTagActive = "";

$(".scroll-link").on("click touchstart", function(event) {
    if (hashTagActive != this.hash) {
        event.preventDefault();
        var dest = 0;
        dest = $(this.hash).offset().top > $(document).height() - $(window).height() ? $(document).height() - $(window).height() : $(this.hash).offset().top, 
        $("html,body").animate({
            scrollTop: dest
        }, 1100, "swing"), hashTagActive = this.hash;
    }
}), function($) {
    function scrollSpy(window_top_pos, threshold) {
        var threshold = 800;
        window_top_pos > threshold ? $(header).addClass("fixed-nav") : $(header).removeClass("fixed-nav");
    }
    var header = $("body >header"), ticking = !1;
    window.addEventListener("scroll", function(e) {
        var windowScrollTop = $(window).scrollTop();
        ticking || window.requestAnimationFrame(function() {
            scrollSpy(windowScrollTop), ticking = !1;
        }), ticking = !0;
    });
}(jQuery), $(window).scroll(function() {
    var el, pos = "", winTop = $(window).scrollTop();
    if (0 != $("#special").length) {
        var el = $("#special"), pos = $(el).offset().top;
        pos < winTop + 600 && $(el).addClass("rotate");
    }
    $(".service-quality").each(function() {
        var pos = $(this).offset().top, winTop = $(window).scrollTop();
        pos < winTop + 800 && $(this).addClass("fadeInUp");
    });
});
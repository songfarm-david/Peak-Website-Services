/**
* Helper scripts
*/
(function ($) {

	var navbar = $("nav.navbar");

	$("nav button.navbar-toggle").on("click", function(){
		$(navbar).toggleClass("nav-bg-color-active");
	})

})(jQuery);

/**
* Scrollspy
*/
(function ($) {

	var header = $("body >header"),
			threshold,
			ticking = false;

	function scrollSpy(window_top_pos, threshold) {
		var threshold = 800;
		if (window_top_pos > threshold) {
			$(header).addClass("fixed-nav");
		} else {
			$(header).removeClass("fixed-nav");
		}
	}
	window.addEventListener('scroll', function(e) {
		var windowScrollTop = $(window).scrollTop();
	  if (!ticking) {
	    window.requestAnimationFrame(function() {
	      scrollSpy(windowScrollTop);
	      ticking = false;
	    });
	  }
	  ticking = true;
		var height = $("#landing-page").height();
		if (windowScrollTop > (height / 2)) {
			$("#about #about-intro").addClass('fadeInUp');
			$("#key-list").addClass('fadeInRight');
		}
	});

})(jQuery);


/**
* Smooth Scrolling
*/
(function($) {

	var trigger = $("#landing-page>i.fa.fa-angle-down").on("click", function() {
		var height = $("#landing-page").height();
		console.log(height);
		$("html, body").animate({ scrollTop: height + "px" }, 750);
		// $('body').scrollTop(height).offset().top;
		// $('body').animate({
    //       scrollTop: $(height).offset().top
    //     }, 1000);
	})

})(jQuery);

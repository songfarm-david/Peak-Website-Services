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
			if (Modernizr.cssanimations) {
				$("#about #about-intro").addClass('fadeInUp');
				$("#key-list").addClass('fadeInRight');
				var timer = setTimeout(function(){
					$("#about-cta").addClass('fadeInUp');
				}, 2000);
			}
		}
	});

})(jQuery);

/**
* Smooth Scrolling
*/
(function($) {
	var trigger, height;
	$(".fa.fa-angle-down").on("click", function() {
		height = $(window).height();
		$("html, body").animate({ scrollTop: height + "px" }, 750);
	})

})(jQuery);

// (function($) {
	// modernizr checks:
	// CSS3
	if (Modernizr.cssanimations) {
	  console.log("is supported");
	} else {
		console.log("not supported");
	}
// })(jQuery);

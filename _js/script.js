

/**
* Scrollspy
*/
(function ($) {

	var header = $("body >header"),
			ticking = false;

	function scrollSpy(window_top_pos) {
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
	});

})(jQuery);

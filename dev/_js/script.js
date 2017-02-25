/**
* Helper scripts
*/

/**
* Smooth Scrolling
*/
var hashTagActive = "";
$(".scroll-link").on("click touchstart" , function (event) {
	if(hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
		event.preventDefault();
		//calculate destination place
		var dest = 0;
		if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
			dest = $(document).height() - $(window).height();
		} else {
			dest = $(this.hash).offset().top;
		}
		//go to destination
		$('html,body').animate({
			scrollTop: dest
		}, 1100, 'swing');
		hashTagActive = this.hash;
	}
});

/**
* Add fixed-nav class to navigation bar
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
		// var height = $("#landing-page").height();
		// if (windowScrollTop > (height / 2)) {
		// 	if (Modernizr.cssanimations) {
		// 		$("#about #about-intro").addClass('fadeInUp');
		// 		$("#key-list").addClass('fadeInRight');
		// 		var timer = setTimeout(function(){
		// 			$("#about-cta").addClass('fadeInUp');
		// 		}, 2000);
		// 	}
		// }
	});
})(jQuery);

$(window).scroll(function() {
	var el, pos = "";
  var winTop = $(window).scrollTop();

	// if id="special" exists on page
	if ( $("#special").length != 0 ) {
		var el = $("#special");
		var pos = $(el).offset().top;
		if (pos < winTop + 600) {
			$(el).addClass("rotate");
		}
	}

  $(".service-quality").each(function(){
    var pos = $(this).offset().top;
    var winTop = $(window).scrollTop();
    if (pos < winTop + 800) {
      $(this).addClass("fadeInUp");
    }
  });
});

// (function ($) {
//
// 	var navbar = $("nav.navbar");
//
// 	$("nav button.navbar-toggle").on("click", function(){
// 		$(navbar).toggleClass("nav-bg-color-active");
// 	})
//
// })(jQuery);

// (function($) {
// 	//modernizr checks:
// 	//CSS3
// 	if (Modernizr.cssanimations) {
// 	  console.log("is supported");
// 	} else {
// 		console.log("not supported");
// 	}
// 	var acc = $("#faq>#accordion-container").accordion({
// 		header: "dt",
// 		heightStyle: "content"
// 	});
// 	$(acc).accordion( "option", "header", "dt" );
// })(jQuery);

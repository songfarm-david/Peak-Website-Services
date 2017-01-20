/**
* Helper scripts
*/

/**
* Function for Google ReCAPTCHA - (called from contact.php)
*/
var contactForm = document.getElementById("contact-form");

function submitForm() {
	var xhttp = new XMLHttpRequest();
	url = contactForm.action;
	data = $(contactForm).serialize();
	// prepare open method
	xhttp.open("post", url, true);
	//Send the proper header information along with the request
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// xhttp.setRequestHeader("Content-length", params.length);
	// xhttp.setRequestHeader("Connection", "close");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     console.log(this.responseText);
		 // handle response here
    }
  };
  xhttp.send(data);
}

$( contactForm ).submit(function( event ) {
	event.preventDefault();
	submitForm(contactForm);
	// NOTE: comment out captcha functionality
	// grecaptcha.reset();
	// grecaptcha.execute();
});

// function onSubmit(token) {
// 	// $( contactForm ).trigger('submit');
// 	submitFormPHP(contactForm);
// };

/**
* Smooth Scrolling
*/
(function($) {
	var trigger, height;
	$("a#page-1-cta").on("click", function() {
		height = $(window).height();
		$("html, body").animate({ scrollTop: height + "px" }, 1100);
	})

})(jQuery);









// (function ($) {
//
// 	var navbar = $("nav.navbar");
//
// 	$("nav button.navbar-toggle").on("click", function(){
// 		$(navbar).toggleClass("nav-bg-color-active");
// 	})
//
// })(jQuery);

/**
* Scrollspy
*/
// (function ($) {
//
// 	var header = $("body >header"),
// 			threshold,
// 			ticking = false;
//
// 	function scrollSpy(window_top_pos, threshold) {
// 		var threshold = 800;
// 		if (window_top_pos > threshold) {
// 			$(header).addClass("fixed-nav");
// 		} else {
// 			$(header).removeClass("fixed-nav");
// 		}
// 	}
// 	window.addEventListener('scroll', function(e) {
// 		var windowScrollTop = $(window).scrollTop();
// 	  if (!ticking) {
// 	    window.requestAnimationFrame(function() {
// 	      scrollSpy(windowScrollTop);
// 	      ticking = false;
// 	    });
// 	  }
// 	  ticking = true;
// 		var height = $("#landing-page").height();
// 		if (windowScrollTop > (height / 2)) {
// 			if (Modernizr.cssanimations) {
// 				$("#about #about-intro").addClass('fadeInUp');
// 				$("#key-list").addClass('fadeInRight');
// 				var timer = setTimeout(function(){
// 					$("#about-cta").addClass('fadeInUp');
// 				}, 2000);
// 			}
// 		}
// 	});
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

/**
* Helper scripts
*/

/**
* Function for Google ReCAPTCHA - (called from contact.php)
*/
var contactForm = document.getElementById("contact-form");
var redirectUrl = "https://peakwebsites.ca/index.php";

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
			var successMsg;
			var response = JSON.parse(this.responseText);

			// get target element
			var target = document.getElementById("confirmation-msg").querySelector("p");
			var targetParent = document.getElementById("confirmation-msg");

			var outputResponse = function() {
				targetParent.className = "";
				target.innerHTML = response[1];
			}

			// expecting positive integer (1)
			if (response[0] > 0) {
				// success
				outputResponse();
				setTimeout(function() {
					targetParent.className = "hide";
					// redirect to hompage
					window.location = redirectUrl;
				}, 3000);
			} else {
				// failure
				outputResponse();
				setTimeout(function() {
					targetParent.className = "hide";
					// redirect to hompage
					location.reload();
				}, 4000);
			}
    }
  };
  xhttp.send(data);
}

$( contactForm ).submit(function( event ) {
	event.preventDefault();
	// NOTE: comment out captcha functionality
	grecaptcha.reset();
	grecaptcha.execute();
});

function onSubmit(token) {
	submitForm(contactForm);
};

/**
* Smooth Scrolling
*/
// (function($) {
// 	var height;
// 	$("a.scroll-link").on("click", function() {
// 		height = $(window).height();
// 		$("html, body").animate({ scrollTop: height + "px" }, 1100);
// 		return;
// 	})
//
// })(jQuery);

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

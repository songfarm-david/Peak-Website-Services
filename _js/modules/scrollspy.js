var scrollSpy = (function() {

	// create instance
	var instance;

	// call init
	function init() {

		// any private methods and variables
		var aPrivate = "Shh..";

		function privateMethod() {
			console.log("Something private");
		}

		var privateRandomNumb = Math.random();

		// return something from the init function
		return {

			// outgoing, public variables and methods
			publicMethod: function() {
				console.log("jiggle me titties");
			},
			publicProperty: "moonshine nigger",
			getRandNum: function() {
				return privateRandomNumb;
			}

		}
	}

	// before final return
	return {
		// do a check for an instance already
		getInstance: function() {
			if (!instance) {
				instance = init();
			}
			return instance;
		}
	}

});

/* Usage */
var scrollspy = scrollSpy.getInstance();
var scrollSpyDupe = scrollSpy.getInstance();
console.log(scrollSpy.getRandNum() === scrollSpyDupe.getRandNum() );


/**
* Scrollspy
*
*/
// var anchors = [],
// 		elems = [],
// 		nav = $("#nav-primary > li > a"), // get just the a links
// 		windowScrollTop = 0,
// 		ticking = false;
// get main navigation a tags
// for (var i = 0; i < nav.length; i++) {
// 	if (nav[i].hash !== "") {
// 		anchors.push(nav[i]);
// 	}
// }
// extract hash fragments from a tag hrefs
// for (var i = 0; i < anchors.length; i++) {
// 	var href = anchors[i].href;
// 	var index = href.indexOf("#");
// 	elems.push(href.substring(index));
// }
// function scrollSpy(window_top_pos) {
// 	for (var i = 0; i < nav.length; i++) {
// 		var offset = 20;
// 		var threshold = 640;
// 		var el_offset = $(elems[i]).offset().top;
// 		if (window_top_pos > (el_offset - offset)
// 			&& window_top_pos < (el_offset + offset)) {
// 			if (nav[i].hash == elems[i]) {
// 				$('#nav-primary li.active').removeClass('active');
// 				$(nav[i]).parent().addClass('active');
// 			}
// 		}
// 		if (window_top_pos < threshold) {
// 			$('#nav-primary li.active').removeClass('active');
// 		}
// 	}
// }
// window.addEventListener('scroll', function(e) {
// 	var windowScrollTop = $(window).scrollTop() + 100;
// 	if (!ticking) {
// 		window.requestAnimationFrame(function() {
// 			scrollSpy(windowScrollTop);
// 			ticking = false;
// 		});
// 	}
// 	ticking = true;
// });
// Reference: http://www.html5rocks.com/en/tutorials/speed/animations/

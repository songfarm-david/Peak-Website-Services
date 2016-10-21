(function(){

	$('#preloader').fadeOut('slow',function(){$(this).remove();});

	var newsletterArticle = $("#ticket-newsletter");
	var ticketTrigger = $('#ticket');

	$(ticketTrigger).on('click', function() {
		$(newsletterArticle).toggleClass('open');
		if (!$(newsletterArticle).hasClass('open')) {
			$(newsletterArticle).animate({
				right: '-12.8%'
			});
			return;
		}
		$(newsletterArticle).animate({
			right: 0
		});
	})

})();

// (function($){
//
// 	/* NOTE: change this to whatever site root is */
// 	var root = '/theme.professional/';
// 	var liveRoot = "svs.songfarm.ca/" + root;
// 	// bypass this script if outside of root folder
// 	if (window.location.pathname.lastIndexOf('/') > root.length
// 	|| window.location.pathname.lastIndexOf('/') > liveRoot.length) {
// 		return;
// 	}
//
// 	// gather curPanel triggers
// 	var panelTriggers = document.getElementById('areas-of-practice').getElementsByTagName('li');
// 	var panelContent = document.getElementById('areas-of-practice-content').getElementsByTagName('div');
//
// 	/**
// 	* Function for toggling curPanel
// 	*
// 	* @param curPanel (object) the newly clicked item
// 	* @param prevPanel (object) the previously clicked item
// 	*/
// 	function togglePanel(curPanel) {
// 		var prevPanel = {},
// 				isSetPanel = false;
//
// 		if (isSetPanel) {
// 			return;
// 		} else {
// 			// detect current active trigger
// 			for (var i = 0; i < panelTriggers.length; i++) {
// 				// if item has class active and is not the clicked item
// 				if (panelTriggers[i].className == 'active' && panelTriggers[i] != curPanel) {
// 					prevPanel = panelTriggers[i];
// 					isSetPanel = true;
// 				}
// 			}
// 		}
// 		// add class active to current panel, remove class from prev panel
// 		curPanel.className = "active";
// 		prevPanel.className = "";
//
// 		for (var i = 0; i < panelContent.length; i++) {
// 			if (panelContent[i].getAttribute("name") == curPanel.getAttribute("name")) {
// 				panelContent[i].className += " active";
// 			} else {
// 				panelContent[i].className = "content";
// 			}
// 		}
//
// 	} // end of togglePanel
//
// 	// attach event listener to triggers
// 	for (var i = 0; i < panelTriggers.length; i++) {
// 		// if gt IE9
// 		if (panelTriggers[i].addEventListener) {
// 		  panelTriggers[i].addEventListener("click", function() { togglePanel(this); }, false);
// 		}
// 		// if < IE9
// 		else if (panelTriggers[i].attachEvent)  {
// 		  panelTriggers[i].attachEvent("onclick", function() {
// 				togglePanel(event.srcElement || event.target);
// 			});
// 		}
// 	} // end of: loop
//
// 	/*
// 		prevent default link action on #expertise ul li > a when in tablet size or greater
// 		*/
// 	var throttle = function(type, name, obj) {
// 		obj = obj || window;
// 		var running = false;
// 		var func = function() {
// 			if (running) { return; }
// 			running = true;
// 			requestAnimationFrame(function() {
// 				obj.dispatchEvent(new CustomEvent(name));
// 				running = false;
// 			});
// 		};
// 		obj.addEventListener(type, func);
// 	};
// 	throttle("resize","optimizedResize");
// 	var offset = 18,
// 			hrefs = [],
// 			links = document.getElementById('areas-of-practice').getElementsByTagName('a'),
// 			windowWidth = document.documentElement.clientWidth;
//
// 	for (var i = 0; i < links.length; i++) {
// 		if (links[i].href !== "") {
// 			hrefs.push(links[i].href);
// 		}
// 	}
//
// 	function disableLinks() {
// 		for (var i = 0; i < links.length; i++) {
// 			links[i].removeAttribute('href');
// 		}
// 	}
//
// 	function enableLinks() {
// 		for (var i = 0; i < links.length; i++) {
// 			links[i].href = hrefs[i];
// 		}
// 	}
//
// 	window.addEventListener("optimizedResize", function() {
// 		windowWidth = document.documentElement.clientWidth;
// 		if (windowWidth + offset > 929) {
// 			disableLinks();
// 		} else {
// 			enableLinks();
// 		}
// 	});
//
// 	// on load, disable links if viewport greater than 929
// 	if (windowWidth + offset > 929) {
// 		disableLinks();
// 	}
//
// 	/*
// 	* Smooth Scrolling
// 	*/
//   $("#nav-primary a").on('click', function(e) {
//   	if (this.hash !== "") {
// 			e.preventDefault();
// 			// var func = function(){
//       // 	window.location.hash = "";
//       // }
// 			var hash = this.hash;
// 			var offset = 0;
// 			if (hash == '#about') {
// 				offset = -85;
// 			}
// 			if (hash == '#expertise') {
// 				offset = -85;
// 			}
// 			$('html, body').animate({
// 				scrollTop: $(hash).offset().top + offset
// 			}, 850);
//     } // end if
//   });
//
// })(jQuery);

/**
* Scrollspy
*/
// (function ($) {
//
// 	$("#about").addClass("invisible");
//
// 	var anchors = [],
// 			// need a way to find/detect nav + active links (links with hash/hrefs)
// 			nav = $("#nav-primary > li > a"), // get just the a links
// 			windowScrollTop = 0,
// 			ticking = false;
//
// 	// loop through navigation get main navigation a tag href/hash values
// 	for (var i = 0; i < nav.length; i++) {
// 		var href,
// 				index;
// 		// if hash value isn't nothing/empty
// 		if (nav[i].hash !== "") {
// 			href = nav[i].href;
// 			index = href.indexOf("#");
// 			anchors.push(href.substring(index));
// 		}
// 	}
//
// 	function scrollSpy(window_top_pos) {
// 		var offset 		= 100; // in px
// 		var clear_pos = 500; // in px
// 		var elemOffset;
// 		for (var i = 0; i < nav.length; i++) {
// 			elemOffset = $(anchors[i]).offset().top;
// 			if ( window_top_pos > (elemOffset - offset) ) {
// 				console.log(anchors[i]);
// 				if (nav[i].hash == anchors[i]) {
// 					$('#nav-primary li.active').removeClass('active');
// 					$(nav[i]).parent().addClass('active');
// 				}
// 			}
// 			if (window_top_pos < clear_pos) {
// 				$('#nav-primary li.active').removeClass('active');
// 			}
// 			if (anchors[i] == "#about" && (elemOffset - clear_pos) < window_top_pos) {
// 				$("#about").removeClass("invisible").addClass("slideInLeft");
// 			}
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
// 	});
//
// 	// Reference: http://www.html5rocks.com/en/tutorials/speed/animations/
// })(jQuery);

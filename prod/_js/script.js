var hashTagActive="";$(".scroll-link").on("click touchstart",function(a){if(hashTagActive!=this.hash){a.preventDefault();var b=0;b=$(this.hash).offset().top>$(document).height()-$(window).height()?$(document).height()-$(window).height():$(this.hash).offset().top,$("html,body").animate({scrollTop:b},1100,"swing"),hashTagActive=this.hash}}),function(a){function b(b,d){var d=800;b>d?a(c).addClass("fixed-nav"):a(c).removeClass("fixed-nav")}var c=a("body >header"),d=!1;window.addEventListener("scroll",function(c){var e=a(window).scrollTop();d||window.requestAnimationFrame(function(){b(e),d=!1}),d=!0})}(jQuery),$(window).scroll(function(){var a,b="",c=$(window).scrollTop();if(0!=$("#special").length){var a=$("#special"),b=$(a).offset().top;b<c+600&&$(a).addClass("rotate")}$(".service-quality").each(function(){var a=$(this).offset().top,b=$(window).scrollTop();a<b+800&&$(this).addClass("fadeInUp")})});
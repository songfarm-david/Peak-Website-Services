function submitForm() {
    var xhttp = new XMLHttpRequest();
    url = contactForm.action, data = $(contactForm).serialize(), xhttp.open("post", url, !0), 
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), xhttp.onreadystatechange = function() {
        if (4 == this.readyState && 200 == this.status) {
            var response = JSON.parse(this.responseText), target = document.getElementById("confirmation-msg").querySelector("p"), targetParent = document.getElementById("confirmation-msg"), outputResponse = function() {
                targetParent.className = "", target.innerHTML = response[1];
            };
            response[0] > 0 ? (outputResponse(), setTimeout(function() {
                targetParent.className = "hide", window.location = redirectUrl;
            }, 3e3)) : (outputResponse(), setTimeout(function() {
                targetParent.className = "hide", location.reload();
            }, 4e3));
        }
    }, xhttp.send(data);
}

function onSubmit(token) {
    submitForm(contactForm);
}

var contactForm = document.getElementById("contact-form"), redirectUrl = "https://peakwebsites.ca/index.php";

$(contactForm).submit(function(event) {
    event.preventDefault(), grecaptcha.reset(), grecaptcha.execute();
});

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
    var winTop = $(window).scrollTop(), el = $("#special"), pos = $(el).offset().top;
    console.log(el, winTop), pos < winTop + 600 && $(el).addClass("rotate"), $(".service-quality").each(function() {
        var pos = $(this).offset().top, winTop = $(window).scrollTop();
        pos < winTop + 800 && $(this).addClass("fadeInUp");
    });
});
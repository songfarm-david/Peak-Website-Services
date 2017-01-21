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
}), function($) {
    var height;
    $("a#page-1-cta").on("click", function() {
        height = $(window).height(), $("html, body").animate({
            scrollTop: height + "px"
        }, 1100);
    });
}(jQuery);
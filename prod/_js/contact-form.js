function submitForm() {
    var xhttp = new XMLHttpRequest(), data = $(contactForm).serialize();
    url = contactForm.action, xhttp.onreadystatechange = function() {
        function outputResponse() {
            modalParent.className = "", modal.innerHTML = response[1];
        }
        if (4 == this.readyState && 200 == this.status) {
            var modal, modalParent, response = JSON.parse(this.responseText);
            modal = document.getElementById("confirmation-msg").querySelector("p"), modalParent = document.getElementById("confirmation-msg"), 
            0 != response[0] ? (outputResponse(), setTimeout(function() {
                modalParent.className = "hide", window.location = redirectUrl;
            }, 3e3)) : (outputResponse(), setTimeout(function() {
                modalParent.className = "hide", location.reload();
            }, 4e3));
        }
    }, xhttp.open("post", url, !0), xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), 
    xhttp.send(data);
}

function onSubmit(token) {
    submitForm();
}

var contactForm = document.getElementById("contact-form"), redirectUrl = "https://peakwebsites.ca/";

$(contactForm).submit(function(event) {
    event.preventDefault(), grecaptcha.reset(), grecaptcha.execute();
});
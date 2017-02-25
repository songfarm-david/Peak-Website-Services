/**
* Contact Form Script
* Peak Websites
* Feb 24, 2017
*/

	var contactForm = document.getElementById("contact-form"),
			redirectUrl = "https://peakwebsites.ca/";

	function submitForm() {

		// create new XMLHttpRequest object,
		// get and serialize form data,
		// retrieve form processing url
		var xhttp = new XMLHttpRequest(),
				data = $(contactForm).serialize();
				url = contactForm.action;

	  xhttp.onreadystatechange = function() {

	    if (this.readyState == 4 && this.status == 200) {

				var response = JSON.parse(this.responseText),
						modal,
						modalParent;

				// get modal element
				modal = document.getElementById("confirmation-msg").querySelector("p"),
				modalParent = document.getElementById("confirmation-msg");

				/**
				*	remove hide class from modal and
				* insert response text into modal element
				*/
				function outputResponse() {
					modalParent.className = "";
					modal.innerHTML = response[1];
				}

				// expecting positive integer (1)
				if (response[0] != 0) {
					// success
					outputResponse();
					setTimeout(function() {
						modalParent.className = "hide";
						// redirect to hompage
						window.location = redirectUrl;
					}, 3000);
				} else {
					// failure
					outputResponse();
					setTimeout(function() {
						modalParent.className = "hide";
						// redirect to hompage
						location.reload();
					}, 4000);
				}

	    } // end of this.readyState == 4 && this.status == 200

	  }; // end of xhttp.onreadystatechange = function()

		// prepare open method
		xhttp.open("post", url, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send(data);

	} // end of function submitForm()

	// When form is submitted
	$( contactForm ).submit( function( event ) {
		// prevent submission
		event.preventDefault();
		// reset and execute recaptcha
		grecaptcha.reset();
		grecaptcha.execute();
	});

	// captcha callback function
	function onSubmit( token ) {
		submitForm(); //contactForm
	};

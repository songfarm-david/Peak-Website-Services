<?php
$title = "Contact | Peak Website Services";
$description = "Contact Peak Website Services for a free estimate regarding Website Development Services, Website Maintenance Services, Website Optimization Services and more";
$redirect_target = "https://peakwebsites.ca";
$service_selection = isset($_GET['service_type']) ? $_GET['service_type'] : "";
$canonical = "https://peakwebsites.ca/
contact.php";
$h1 = $title;
?>
<!-- NOTE: in this page I want to touch on that they will get back an assessment from me that will include some cool stuff. Or.. where can I do that?? See 'Free Assessment on content.md' -->
<?php require_once('_includes/header.php') ?>

	<main id="contact-main">

		<h1>Got a question for me? Let's chat.</h1>
		<!-- <p>Website Management</p> -->
		<!-- Web Service Questionnaire -->
		<section>
			<h2 class="hide">Contact Form</h2>
			<!-- NOTE: this path will need to be changed before deployment -->
			<form id="contact-form" name="contact-form" action="../process-form.php" method="post">
				<fieldset>
					<legend class="at-only">Web Service Questionnaire</legend>
					<div class="row">
						<div class="col col-6">
							<label for="name">
								<input type="text" name="name" value="" placeholder="Name">
							</label>
						</div>
						<div class="col col-6">
							<label for="email">
								<input type="email" name="email" value="" placeholder="Email*" required>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col col-6">
							<label for="phone">
								<input type="phone" name="phone" placeholder="Phone">
							</label>
						</div>
						<div class="col col-6">
							<label for="website">
								<input type="text" name="website" placeholder="Website (if applicable)">
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col col-12">
							<label for="message">
								<textarea name="message" rows="1" placeholder="Tell us about your project"></textarea>
							</label>
						</div>
					</div>
					<label for="captcha">
						<button	type="submit" class="g-recaptcha" data-sitekey="6LcoshEUAAAAAFpTCW8ehR9mWxYBI-c-cu1tVWUx" data-callback="onSubmit" name="captcha">
							Send
						</button>
					</label>

					<!-- NOTE: the input type="submit" has been disabled to allow for Google ReCAPTCHA.
								The above button relies on a custom callback function to process the form -->
					<input type="submit" name="submit" value="Send">
					<input type="hidden" name="redirect_value" value="<?php echo $redirect_target; ?>">
					<input type="hidden" name="service_reference" value="<?php echo $service_selection; ?>">
				</fieldset>

			</form>
			<!-- NOTE: add a captcha -->
		</section>

			<!-- NOTE: stylized google map of bear mountain/langform -->

	</main>
<?php require_once('_includes/footer.php') ?>

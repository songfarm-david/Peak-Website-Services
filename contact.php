<?php
$title = "Contact Peak Website Services";
$description = "";
?>
<?php require_once('_includes/header.php') ?>
	<header>
		<h1 class="h3 hide">Contact Peak Website Services</h1>
		<?php include_once('_includes/navigation.php') ?>
	</header>
	<main id="contact-main">
		<div class="row">
			<div class="col col-8">
				<p>
					Got a question for us? Get in touch. Let's chat.
				</p>
				<form id="contact-form" action="index.html" method="post">
					<div class="row">
						<div class="col col-12">
							<span>Which service(s) are you interested in?</span>
							<label for="Website Creation">Website Creation
								<input type="checkbox" name="service" value="Website Creation" id="Website Creation">
							</label>
							<label for="Website Maintenance">Website Maintenance
								<input type="checkbox" name="service" value="Website Maintenance" id="Website Maintenance">
							</label>
							<label for="Website Optimization">Website Optimization
								<input type="checkbox" name="service" value="Website Optimization" id="Website Optimization">
							</label>
							<span>What is your preferred method of contact?</span>
							<label for="phone">Phone
								<input type="radio" name="contact-method" value="Phone" id="phone">
							</label>
							<label for="Email">Email
								<input type="radio" name="contact-method" value="Email">
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col col-6">
							<label for="name">
								<input type="text" name="name" value="" placeholder="Name">
							</label>
						</div>
						<div class="col col-6">
							<label for="email">
								<input type="email" name="email" value="" required placeholder="Email*">
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
								<input type="text" name="website" placeholder="Website">
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col col-12">
							<label for="message">
								<textarea name="message" rows="1" placeholder="You're on the mic. What's your beef?"></textarea>
							</label>
						</div>
					</div>
					<label for="send" class="at-only">Send</label>
					<input type="submit" name="send" value="Send">
				</form>
				<!-- NOTE: add a captcha -->
				<!-- NOTE: stylized google map of bear mountain/langform -->
			</div>
		</div>
	</main>
<?php require_once('_includes/footer.php') ?>

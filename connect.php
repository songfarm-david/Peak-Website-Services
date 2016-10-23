<?php require_once('_includes/header.php') ?>

	<header>
		<h1 class="h3 hide">Connect | Peak Website Services</h1>
		<?php include_once('_includes/navigation.php') ?>
	</header>

	<main id="contact-main">

		<div class="row">
			<div class="col col-8">
				<p>
					Wondering how I might be of service to you?
				</p>
				<p>
					I invite you to reach out me. Call me at <span class="phone-contact"><a href="#">905-592-2141</a></span> or fill out <a href="#contact-form">a simple form</a>.
				</p>
				<form id="contact-form" action="index.html" method="post">
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

						<label for="send"></label>
						<input type="submit" name="send" value="Send">

				</form>

				<!-- NOTE: add a captcha -->


				<!-- NOTE: stylized google map of bear mountain/langform -->


			</div>
		</div>


	</main>

<?php require_once('_includes/footer.php') ?>

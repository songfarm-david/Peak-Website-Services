<?php require_once('_includes/header.php') ?>
<?php
$h2 = "Contact West Coast Wealth Management";
$pageId = "contact-header-hero"; ?>

<!-- start contact page -->

	<main id="contact-page" class="container">
		<?php include('_includes/theme/header-hero.php'); ?>
		<section id="contact-methods">
			<h3 class="at-only">Contact Methods</h3>
			<section id="contact-form">
				<h3 class="">Contact Form</h3>
				<form class="" action="" method="post">
					<label for="name">Name <span>(required)</span>
						<input type="text" name="name" value="" placeholder="Name">
					</label>
					<label for="phone">Phone <span>(required)</span>
						<input type="phone" name="name" value="" placeholder="Phone">
					</label>
					<label for="email">Email
						<input type="phone" name="name" value="" placeholder="Phone">
					</label>
					<label>Please get in touch:
						<textarea name="name" rows="8" cols="40"></textarea>
					</label>
				</form>
			</section>
			<article id="call-us">
				<h3>Call Us</h3>
				<p>
					<span><i class="fa fa-phone"></i> <a href="tel:2501534567">(250) 123-4567</a></span>
				</p>
			</article>
			<article id="location-map">
				<h3>Location</h3>
				<div id="map">
					<!-- map here -->
					<iframe width="" height="" frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJa3gfXoR0j1QRl5DsYnGdEcU&key=AIzaSyBqQYqpFlKldgk3QcDlfWgmc9kHRcjfedU" allowfullscreen></iframe>
				</div>
				<div id="address">
					<span class="address">P.O Box V5N 1P9</span><br>
					<span class="address">123 Granville Street, Suite 700</span><br>
					<span class="address">Victoria, BC V7Y 1G5</span><br>
				</div>
			</article>
		</section>
		<?php require_once('_includes/footer.php') ?>
	</main>
<?php require_once('_includes/foot.php') ?>

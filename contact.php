<?php require_once('_includes/header.php') ?>
<?php
$h2 = "Contact West Coast Wealth Management";
$pageId = "contact-header-hero";
?>

	<main id="contact-form" class="container">
		<?php include('_includes/theme/header-hero.php'); ?>
		<section id="contact-methods">
			<h3 class="">Contact Us</h3>
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
			<article id="call-us">
				<h3>Call Us</h3>
				<p>
					<span>Call us at: <a href="tel:2501534567">(250) 123-4567</a></span>
				</p>
			</article>
		</section>

		<?php require_once('_includes/footer.php') ?>

	</main>

<?php require_once('_includes/foot.php') ?>

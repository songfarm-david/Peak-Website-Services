<?php
$title = "Website Services | Peak Website Services";
$description = "Peak Website Services include: website development services, website maintenance services, website optimization services, and more";
$h1 = "Peak Website Services";
$h2 = "";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

<main id="website-services">

	<!-- Website Services Display -->
	<div class="container">
		<p>Whatever step you're on, we have a <em>Website Service</em> designed to get you where you're going.</p>

		<div id="service-display">
			<section>
				<h3 class="hide">Website Development Services</h3>
				<p class="h3">Development</p>
				<p>Do you need a website? Does your existing website need a facelift? Let us tailor a website for you that's built for today.</p>
			</section>
			<section>
				<h3 class="hide">Website Maintenance Services</h3>
				<p class="h3">Maintenance</p>
				<p>You have more important things to do then worry about your website. Hosting to domain names to security, we've got you covered.</p>
			</section>
			<section>
				<h3 class="hide">Website Optimization Services</h3>
				<p class="h3">Optimization</p>
				<p>Rise above the competition and get found in the crowded internet marketplace. We'll help to put you in front of your core audience.</p>
			</section>
		</div>

	</div>


	<!-- <section>
		<h3 class="at-only">Contact Us</h3>
		<div class="container-alt">
			<p class="h3">Not sure what you need?	<br><span><a href="/contact.php">Contact Us</a> for a free assessment.</span></p>
		</div>
	</section> -->

</main>

<?php require_once('../_includes/footer.php') ?>

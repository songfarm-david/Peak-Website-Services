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
		<h1>Whatever step you're on, we have a Website&nbsp;Service designed to get you where you're going.</h1>

		<div id="service-display">
			<div class="row">
				<div class="col col-4">
					<section data-id="service-development" class="service-section">
						<h3 class="hide">Website Development Services</h3>
						<p class="green" data-name="service-title">Development</p>
						<p data-name="service-info">Do you need a website? Does your existing website need a facelift? Let me tailor make a state-of-the-art website for you.</p>
						<a href="/website-services/website-development-services.php" class="green">Learn More</a>
					</section>
				</div>

				<div class="col col-4">
					<section data-id="service-maintenance" class="service-section">
						<h3 class="hide">Website Maintenance Services</h3>
						<p class="blue" data-name="service-title">Maintenance</p>
						<p data-name="service-info">You have more important things to do then worry about your website. Secure hosting to domain names to security, we've got you covered.</p>
						<a href="/website-services/website-maintenance-services.php" class="blue">Learn More</a>
					</section>
				</div>

				<div class="col col-4">
					<section data-id="service-optimization" class="service-section">
						<h3 class="hide">Website Optimization Services</h3>
						<p class="purple" data-name="service-title">Optimization</p>
						<p data-name="service-info">Rise above the crowd and get noticed. We've got the tools and knowledge to help you stand out in the noisy internet marketplace.</p>
						<a href="/website-services/website-optimization-services.php" class="purple">Learn More</a>
					</section>
				</div>
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

<?php
$title = "Website Services | Peak Website Services";
$description = "Peak Website Services include: website development services, website maintenance services, website optimization services, and more";
$h1 = "Peak Website Services";
$h2 = "";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<main id="website-services">

		<section>
			<h1>Wherever you're at, we can help you to get you where you're going.</h1>
			<div id="service-display" itemscope itemtype="https://schema.org/Service">
				<meta itemprop="brand" content="Peak Websites">
				<meta itemprop="provider" content="Peak Websites">
				<meta itemprop="serviceType" content="Websites Services">
				<div class="row">
					<div class="col col-4">
						<a href="/website-services/website-development-services.php">
							<section data-id="service-development" class="service-section">
								<h2 class="hide">Website Development Services</h2>
								<h3 class="green-bg" data-name="service-title">Development</h3>
								<p>Do you need a website? Does your existing website need a facelift? Let me tailor make a state-of-the-art website for you.</p>
								<button class="green-bg">Learn More</button>
							</section>
						</a>
					</div>

					<div class="col col-4">
						<a href="/website-services/website-maintenance-services.php">
							<section data-id="service-maintenance" class="service-section">
								<h2 class="hide">Website Maintenance Services</h2>
								<h3 class="blue-bg" data-name="service-title">Maintenance</h3>
								<p>You have more important things to do then worry about your website. Secure hosting to domain names to security, we've got you covered.</p>
								<button class="blue-bg">Learn More</button>
							</section>
						</a>
					</div>

					<div class="col col-4">
						<a href="/website-services/website-optimization-services.php">
							<section data-id="service-optimization" class="service-section">
								<h2 class="hide">Website Optimization Services</h2>
								<h3 class="purple-bg" data-name="service-title">Optimization</h3>
								<p>Rise above the crowd and get noticed. We've got the tools and knowledge to help you stand out in the noisy internet marketplace.</p>
								<button class="purple-bg">Learn More</button>
							</section>
						</a>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php require_once('../_includes/footer.php') ?>

<!-- <section>
	<h2 class="at-only">Contact Us</h2>
	<div class="container-alt">
		<p class="h2">Not sure what you need?	<br><span><a href="/contact.php">Contact Us</a> for a free assessment.</span></p>
	</div>
</section> -->

<?php
$title = "Website Maintenance Services | Peak Website Services";
$description = "Affordable website maintenance services, website hosting and management services and more for small business owners. Website maintenance plans available, too.";
$h1 = "Website Maintenance Services";
$h2 = "Website Maintenance Service";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<main>

		<!-- service -->
		<section class="bg-image" id="maintenance">
			<h2 class="hide"><?php echo $h2; ?></h2>
			<div class="service">
				<p class="service-title">Take the load off having an online presence</p>
				<p>Maintaining a website can be a lot of work! That's why we provide a service that handles all the day-to-day website maintainence so you can focus on the more important things.</p>

			</div>
		</section><!-- #maintenance -->

		<section class="service-types">

		</section>

		<section class="price-section">
			<h3>Maintenance Pricing Packages</h3>
			<div class="price-plans">
				<div class="price-plan">
					<p class="price-plan-name">Molehill</p>
					<div class="price-plan-price">
						$50 per month billed annually or $58 month to month
					</div>
				</div>
				<div class="price-plan">

				</div>
			</div>

		</section>

		<p class="call-to-action">Let us help you take hold of your website. <a href="/contact.php">Contact Us Today</a>.</p>

	</main>

<?php require_once('../_includes/footer.php') ?>

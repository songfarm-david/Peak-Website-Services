<?php
$title = "Website Services | Peak Website Services";
$description = "Peak Website Services include: website development services, website maintenance services, website optimization services, and more";
$h1 = "Peak Website Services";
$h2 = "Website Services";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<!-- Website Services -->
	<section id="website-services">
		<h2 class="hide"><?php echo $h2; ?></h2>
		<div class="container">
			<p class="h2">
				Choose from our Website Services:
			</p>
		</div>
		<!-- services -->
		<div id="service-container">

			<!-- website creation services -->
			<div class="grow-left">
				<h3>Website Development Services</h3>
				<a href="website-development-services.php"><span class="at-only">Select</span></a>
			</div>

			<!-- website maintenance services -->
			<div class="grow-center">
				<h3>Website Maintenance Services</h3>
				<a href="website-maintenance-services.php"><span class="at-only">Select</span></a>
			</div>

			<!-- website optimization services -->
			<div class="grow-right">
				<h3>Website Optimization Services</h3>
				<a href="website-optimization-services.php"><span class="at-only">Select</span></a>
			</div>

		</div><!--/ end services -->

		<!-- <section>
			<h3>See our Frequently Asked Questions</h3>
			<p>

			</p>
		</section> -->
	</section>

<?php require_once('../_includes/footer.php') ?>

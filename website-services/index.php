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
			<div>
				<h3>Website<br> <span class="sea-green">Development</span> <span class="at-only">Services</span></h3>
				<p>
					Add on to your existing or create something that's all your own.
				</p>
				<a href="website-development-services.php">Website Development Services</a>
			</div>
			<!-- website maintenance services -->
			<div>
				<h3>Website<br> <span class="cedar-chest">Maintenance</span> <span class="at-only">Services</span></h3>
				<p>
					Let us handle the technical stuff while you handle your business.
				</p>
				<a href="website-maintenance-services.php">Website Maintenance Services</a>
			</div>
			<!-- website optimization services -->
			<div>
				<h3>Website<br> <span class="electric-blue">Optimization</span> <span class="at-only">Services</span></h3>
				<p>
					Optimize your online presence for optimal results.
				</p>
				<a href="website-optimization-services.php">Website Optimization Services</a>
			</div>
		</div><!--/ end services -->
	</section>

<?php require_once('../_includes/footer.php') ?>

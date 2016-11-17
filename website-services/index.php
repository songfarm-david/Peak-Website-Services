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
				<h3>Website Development Services</h3>
				<!-- <p class="service-byline">
					Add on to your existing or create something that's all your own.
				</p> -->
				<!-- <span class="divider"><img src="/peak/_images/ornate-separator.svg" alt="" /></span> -->
				<!-- <a href="website-development-services.php">Select</a> -->
			</div>
			<!-- website maintenance services -->
			<div>
				<h3>Website Maintenance Services</h3>
				<!-- <p class="service-byline">
					Let us handle the technical stuff while you handle your business.
				</p> -->
				<!-- <span class="divider"><img src="/peak/_images/ornate-separator.svg" alt="" /></span> -->
				<!-- <a href="website-maintenance-services.php">Select</a> -->
			</div>
			<!-- website optimization services -->
			<div>
				<h3>Website Optimization Services</h3>
				<!-- <p class="service-byline">
					Optimize your online presence for optimal results.
				</p> -->
				<!-- <span class="divider"><img src="/peak/_images/ornate-separator.svg" alt="" /></span> -->
				<!-- <a href="website-optimization-services.php">Select</a> -->
			</div>
		</div><!--/ end services -->
	</section>

<?php require_once('../_includes/footer.php') ?>

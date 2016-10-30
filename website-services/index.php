<?php
$title = "Peak | Website Services";
$description = "Peak Website Services include: website creation services, website maintenance services, website optimization services, and more";
$h1 = "Peak Website Services";
$h2 = "Peak Website Services";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<!-- Website Services -->
	<section id="website-services">
		<div class="container">
			<h2><?php echo $h2; ?></h2>
			<p class="message">
				Whatever stage of the life-cycle of your business, we've got a service for you.
			</p>
		</div>
		<!-- services -->
		<div class="row">
			<!-- website creation services -->
			<div class="col col-4">
				<h3>Website<br> Development <span class="at-only">Services</span></h3>
				<ul>
					<li>New Site Creation</li>
					<li>Site Remodels</li>
					<li>E-Commerce, Blog</li>
					<li>Content Management System</li>
					<li>Online Store Creation</li>
				</ul>
				<a href="/peak/website-services/website-development-services.php">View Website Development Services</a>
			</div>
			<!-- website maintenance services -->
			<div class="col col-4">
				<h3>Website<br> Maintenance <span class="at-only">Services</span></h3>
				<ul>
					<li>New Site Creation</li>
					<li>Site Remodels</li>
					<li>E-Commerce, Blog</li>
					<li>Content Management System</li>
					<li>Online Store Creation</li>
				</ul>
				<a href="/peak/website-services/website-maintenance-services.php">View Website Maintenance Services</a>
			</div>
			<!-- website optimization services -->
			<div class="col col-4">
				<h3>Website<br> Optimization <span class="at-only">Services</span></h3>
				<ul>
					<li>New Site Creation</li>
					<li>Site Remodels</li>
					<li>E-Commerce, Blog</li>
					<li>Content Management System</li>
					<li>Online Store Creation</li>
				</ul>
				<a href="/peak/website-services/website-optimization-services.php">View Website Optimization Services</a>
			</div>
		</div><!--/ end services -->
	</section>

<?php require_once('../_includes/footer.php') ?>

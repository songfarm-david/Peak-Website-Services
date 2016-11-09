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
		<!-- services -->
		<div id="service-container">
			<!-- website creation services -->
			<div>
				<h3>Website<br> <span class="sea-green">Development</span> <span class="at-only">Services</span></h3>
				<ul>
					<li>New Website Creation</li>
					<li>Existing Website Redesign</li>
					<li>Website Integrations (eCommerce, Blog)</li>
					<li>Personal &amp; Corporate Branding</li>
					<li>Logo &amp; Graphic Design</li>
				</ul>
				<a href="website-development-services.php">Website Development Services</a>
			</div>
			<!-- website maintenance services -->
			<div>
				<h3>Website<br> <span class="cedar-chest">Maintenance</span> <span class="at-only">Services</span></h3>
				<ul>
					<li>Website Hosting &amp; Domain Management</li>
					<li>Performance Monitoring and Analytics</li>
					<li>Monthly Performance Reports</li>
					<li>Unrestricted Support</li>
					<li>Easy Content Updates &amp; Management</li>
			</ul>
				<a href="website-maintenance-services.php">Website Maintenance Services</a>
			</div>
			<!-- website optimization services -->
			<div>
				<h3>Website<br> <span class="electric-blue">Optimization</span> <span class="at-only">Services</span></h3>
				<ul>
					<li>Enhanced Search Visibility</li>
					<li>Comprehensive Keyword Strategy</li>
					<li>Marketing Campaign Management</li>
					<li>Pay-Per-Click Campaigns</li>
					<li>Competitive Research &amp; Analysis</li>
				</ul>
				<a href="website-optimization-services.php">Website Optimization Services</a>
			</div>
		</div><!--/ end services -->
	</section>

<?php require_once('../_includes/footer.php') ?>

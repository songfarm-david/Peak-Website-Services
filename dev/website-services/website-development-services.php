<?php
$title = "Website Development Services | Peak Website Services";
$description = "Affordable website design and development services for small business owners and online businesses. Custom website development services for the non-technical.";
$h1 = "Website Development Services";
$h2 = "Website Development Service";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<main>
		<?php //echo $activePage; ?>
		<!-- service -->
		<section class="service" id="development">
			<h2><?php echo $h2; ?></h2>
			<p class="service-title">I make it easy to have a great website</p>
			<p>Whether you want to build on to your existing site or want something altogether new, I make it easy to have what you want.</p>
			<p>All our websites are:</p>
			<ul>
				<li>Designed to Convert</li>
				<li>Responsive Design</li>
				<li>Mobile Friendly</li>
				<li>Securely Encryption</li>
				<li>Search Engine Optimized</li>
				<li>Accessible Website</li>
			</ul>

			<p><a href="">Contact Me</a> to learn more and get a free website assessment.</p>

			<!-- service features -->
			<!-- <div class="service-features" id="website-development"> -->
				<!-- features list -->
				<!-- <ul class="feature-list">
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/dev-icons/built-strong.svg" alt="" />
							<span>Built strong under-the-hood</span>
						</div>
						<p>
							We take pride in developing and designing a beautiful, functional website that works overtime for your business.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/dev-icons/no-page-limit.svg" alt="" />
							<span>Built to Convert</span>
						</div>
						<p>
							We never lose sight that your website is designed to create a connection with your audience and to help them to become customers.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/dev-icons/mobile-friendly-responsive.svg" alt="" />
							<span>Mobile Responsive</span>
						</div>
						<p>
							There's no need to wonder if your website will work and look good on a phone or tablet &mdash; we do that for all our websites.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/dev-icons/seo-enhanced.svg" alt="" />
							<span>Search Engine Enhanced</span>
						</div>
						<p>
							We follow best practices in the web and SEO world to make sure your website is ready to be fired on all cylinders.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/dev-icons/accessible.svg" alt="" />
							<span>Web Accessible</span>
						</div>
						<p>
							We believe that the web should be available to everyone. We take steps to ensure the website we build are accessible to <a href="https://www.w3.org/WAI/intro/aria" target="_blank">Assistive Technologies</a>.
						</p>
					</li>
					<li></li>
				</ul> -->
				<!--/ end of features list -->
			<!-- </div> -->
			<!--/ end of service features -->

		</section><!--/ end of service -->

		<!-- cta -->
		<?php include('../_includes/theme/banner.php'); ?><!--/ end of cta -->

	</main>

<?php require_once('../_includes/footer.php') ?>

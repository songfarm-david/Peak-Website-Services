<?php
$title = "Website Development Services | Peak Website Services";
$description = "Affordable website design and development services for small business owners and online businesses. Custom website development services for the non-technical.";
$h1 = "Website Development Services";
$h2 = "Website Development Service";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<main>

		<!-- service -->
		<section class="service" id="development">

				<h2 class="hide"><?php echo $h2; ?></h2>

				<div>
					<div class="service-intro container">
						<span>Let us build you a beautiful, modern website that <em>works</em>.</span>
						<p>
							We strive, first, to understand your particular needs, then deliver to you an industry up-to-date, mobile-responsive, accessible, and beautifully designed website that is unique to your brand and vision.
						</p>
					</div>
				</div>

					<!-- service features -->
					<section class="service-features container" id="website-development">
						<h3 class="at-only">What's Included?</h3>
						<!-- features list -->
						<ul class="feature-list">
							<li>
								<div class="feature-container">
									<img src="/_assets/svg-icons/dev-icons/built-strong.svg" alt="" />
									<span>Built strong under-the-hood</span>
								</div>
								<p>
									We take pride in developing and designing a beautiful, functional website that works overtime for your business.
								</p>
							</li>
							<li>
								<div class="feature-container">
									<img src="/_assets/svg-icons/dev-icons/no-page-limit.svg" alt="" />
									<span>Updates for Everyone</span>
								</div>
								<p>
									Your website is an extension of your business; we understand that maintaining an online presence means change and being dynamic as to your audience. For that reason, general updates and content changes are on the house.
								</p>
							</li>
							<li>
								<div class="feature-container">
									<img src="/_assets/svg-icons/dev-icons/mobile-friendly-responsive.svg" alt="" />
									<span>Mobile Friendly &amp; Responsive</span>
								</div>
								<p>
									No question about it: mobile browsing is on the rise, which means your website has to look good and function everywhere &mdash; but don't sweat it, crafting mobile-friendly websites is just another day at the office for us.
								</p>
							</li>
							<li>
								<div class="feature-container">
									<img src="/_assets/svg-icons/dev-icons/seo-enhanced.svg" alt="" />
									<span>Search Engine Enhanced</span>
								</div>
								<p>
									Websites need traffic in order to thrive. We build our sites on top of industry leading best-practices to ensure your website can be understood and <a href="/faq.php#index">indexed</a> by all the major search engines.
								</p>
							</li>
							<li>
								<div class="feature-container">
									<img src="/_assets/svg-icons/dev-icons/accessible.svg" alt="" />
									<span>Accessible</span>
								</div>
								<p>
									Think of accessible websites like accessibility ramps for brick-and-mortar establishments. Though, often overlooked by other web companies, we believe that your website should be <a href="https://www.w3.org/WAI/">accessible to everyone</a>.
								</p>
							</li>
							<li>
								<div class="feature-container">
									<img src="/_assets/svg-icons/dev-icons/optimized-conversion.svg" alt="" />
									<span>Optimized for Conversion</span>
								</div>

								<p>
									Because at the end of the day your website is a tool for turning visitors into customers, conversion is at the core of every website we build.
								</p>
							</li>
						</ul><!--/ end of features list -->
					</section><!--/ end of service features -->
			</section><!--/ end of service -->

			<!-- cta -->
			<?php include('../_includes/theme/banner.php'); ?>
			<!--/ end of cta -->

	</main>

<?php require_once('../_includes/footer.php') ?>

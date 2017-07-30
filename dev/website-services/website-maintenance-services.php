<?php
$title = "Website Maintenance Services | Peak Website Services";
$description = "Affordable website maintenance services, website hosting and management services and more for small business owners. Website maintenance plans available, too.";
$h1 = "Website Maintenance Services";
$h2 = "Website Maintenance Service";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<main role="main">
		<!-- service -->
		<section class="hero-panel" id="maintenance-bg">
			<div class="hero-panel-container">
				<div class="hero-panel-inner">
					<h2 class="hide"><?php echo $h2; ?></h2>
					<p class="hero-title">Your Business is Your Business.<br> Our Business is Websites.</p>
					<p class="hero-byline">Expert Maintenance to keep your website online and thriving.</p>
				</div>
			</div>
		</section><!-- #maintenance-bg -->

		<section class="service-container">

			<div class="service-intro-container">
				<div class="service-intro">
					<h3 class="service-title">Website Maintenance Services</h3>
					<p class="service-byline">The stress-free and easy way to have a website</p>
				</div>
			</div>

			<section class="panel">
				<div class="panel-container">
					<div class="service-unit">
						<p>Your website is pivotal to your online success. It's one of the first places a potential customer goes when deciding whether they want to trust and spend their money on you, where they go to get a sense of your credibility and what you're all about.</p>
						<p><em>Don't let them down.</em></p>
						<p>Your website might already have a lot going for it but it's important that it doesn't get stale. Worse yet, that it's hacked and is no longer working for your business.</p>
						<p>Without the right experience and know-how, your website is at risk.</p>
						<p>Don't go it alone.</p>
						<p>We understand that your website is one of your most important assets online and work with you 24/7 to ensure your website is secure, up-to-date, and working to serve your business.</p>
						<p>You can count on us to:</p>
						<ul>
							<li>Be responsible for all the technical details (domain registrations, hosting services, logins and passwords)</li>
							<li>Answer any technical questions you may have</li>
							<li>Provide professional, on-time service</li>
							<li>Solve your online problems</li>
						</ul>
						<br>
						<div class="button-container">
							<a href="#maintenance-pricing" class="service-button">See Website Maintenance Service Plans</a>
						</div>
					</div>
				</div>
			</section>

			<section class="panel color-2">
				<div class="panel-container">
					<div class="service-unit">
						<h4>24/7 Security</h4>
						<p>We regularly monitor and ensure your website is working as expected and protected against online threats.</p>
					</div>
				</div>
			</section>

			<section class="panel">
				<div class="panel-container">
					<div class="service-unit">
						<h4>Regular Back-Ups</h4>
						<p>The last thing you want is to lose your website data. At Peak, we back it up regularly so you never have to worry about losing it all and starting at square one.</p>
					</div>
				</div>

			</section>

			<section class="panel color-2">
				<div class="panel-container">
					<div class="service-unit">
						<h4>Keeping an Eye on your Website</h4>
						<p>We regular check the health and performance of your website so if things start to shift, for better or worse, we are there to take the appropriate action.</p>
						<p>Instead of stressing about your website, you can relax and focus on growing your business.</p>
					</div>
				</div>
			</section>

			<article class="pricing" id="maintenance-pricing">
				<div class="pricing-outer">
					<div class="pricing-inner">
						<h3>Website Maintenance Service Plans</h3>
						<p>Our maintenance pricing model is as follows:</p>
						<div class="pricing-table">
							<div class="pricing-col">
								<h4 class="pricing-title">Molehill</h4>
								<div class="price-container">
									<span class="price-dollar">$</span><span class="price-number">99</span><span class="price-desc">Billed month-to-month</span>
								</div>
								<div class="price-list">
									<ul>
										<li class="check">Daily Website Backups</li>
										<li class="check">24/7 Security</li>
										<li class="check">Software Updates</li>
										<li class="ex">Unlimited Support</li>
										<li class="ex">Health and Performance Report</li>
										<li class="check bolded"><em>1 Hour of Updates</em></li>
									</ul>
								</div>
								<div class="price-addendum">
									Additional website updates billed at <strong>$50/hr</strong>.
								</div>
							</div>
							<div class="pricing-col">
								<h4 class="pricing-title">Mountain</h4>
								<div class="price-container">
									<span class="price-dollar">$</span><span class="price-number">189</span><span class="price-desc">Billed month-to-month</span>
								</div>
								<div class="price-list">
									<ul>
										<li class="check">Daily Website Backups</li>
										<li class="check">24/7 Security</li>
										<li class="check">Software Updates</li>
										<li class="ex">Unlimited Support</li>
										<li class="check">Quarterly Health and Performance Report</li>
										<li class="check bolded"><em>2 Hours of Updates</em></li>
									</ul>
								</div>
								<div class="price-addendum">
									Additional website updates billed at <strong>$40/hr</strong>.
								</div>
							</div>
							<div class="pricing-col">
								<h4 class="pricing-title">Peak</h4>
								<div class="price-container">
									<span class="price-dollar">$</span><span class="price-number">279</span><span class="price-desc">Billed month-to-month</span>
								</div>
								<div class="price-list">
									<ul>
										<li class="check">Daily Website Backups</li>
										<li class="check">24/7 Security</li>
										<li class="check">Software Updates</li>
										<li class="check">Unlimited Support</li>
										<li class="check">Monthly Health and Performance Report</li>
										<li class="check bolded"><em>4 Hours of Updates</em></li>
									</ul>
								</div>
								<div class="price-addendum">
									Additional website updates billed at <strong>$30/hr</strong>.
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <p class="post-text">Need more than 4 hours of updates a month? Contact us for a custom quote.</p> -->
			</article><!-- #maintenance-pricing -->

		</section><!-- .service-container -->

		<section class="cta-container">
			<h3 class="hide">Contact Us</h3>
			<p>Take a load off</p>
			<p class="cta"><a href="/contact.php">Contact Us Today</a></p>
		</section>


	</main>

<?php require_once('../_includes/footer.php') ?>

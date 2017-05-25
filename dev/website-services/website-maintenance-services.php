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
				<p>From hosting your website and registering a domain name to updating content and fixing bugs, working with Peak is like having your own IT guy on speed-dial. We provide you with friendly, personal support for all things online.</p>
				<p>Having a website shouldn't add to your work load. We offer everything you need, all in once place and take the work out of having an online presence.</p>
			</div>
		</section><!-- #maintenance -->

		<section class="service-types">
			<h3>Website Maintenance Services</h3>
			<p>When you've got a business to run, the last thing you want to do is have to worry about whether your website is up-to-date, secure, and protected against data loss.</p>
			<p>Our maintenance services are designed to protect your asset and to ensure that your website keeps on humming!</p>
			<article class="pricing">
				<h4>Maintenance Pricing</h4>
				<p>Our maintenance pricing model is as follow:</p>
				<div class="pricing-table">
					<div class="pricing-col">
						<h4 class="pricing-title">Molehill</h4>
						<div class="price-container">
							<span class="price-dollar">$</span><span class="price-number">49</span><span class="price-desc">Per month billed bi-annually or annually or $56.35 month-to-month.</span>
						</div>
						<div class="price-list">
							<ul>
								<li>Daily Website Backups</li>
								<li>24/7 Security</li>
								<li>Software Updates</li>
								<li>Unlimited Support</li>
							</ul>
						</div>
						<div class="price-addendum">
							Additional development work billed at <strong>$55/hr</strong>.
						</div>
					</div>
					<div class="pricing-col">
						<h4 class="pricing-title">Mountain</h4>
						<div class="price-container">
							<span class="price-dollar">$</span><span class="price-number">149</span><span class="price-desc">Per month billed bi-annually or annually or $171.35 month-to-month.</span>
						</div>
						<div class="price-list">
							<ul>
								<li>Daily Website Backups</li>
								<li>24/7 Security</li>
								<li>Software Updates</li>
								<li>Unlimited Support</li>
								<li class="bolded"><em>2 Hours of Development</em></li>
							</ul>
						</div>
						<div class="price-addendum">
							Additional development work billed at <strong>$45/hr</strong>.
						</div>
					</div>
					<div class="pricing-col">
						<h4 class="pricing-title">Peak</h4>
						<div class="price-container">
							<span class="price-dollar">$</span><span class="price-number">249</span><span class="price-desc">Per month billed bi-annually or annually or $286.35 month-to-month.</span>
						</div>
						<div class="price-list">
							<ul>
								<li>Daily Website Backups</li>
								<li>24/7 Security</li>
								<li>Software Updates</li>
								<li>Unlimited Support</li>
								<li class="bolded"><em>4 Hours of Development</em></li>
							</ul>
						</div>
						<div class="price-addendum">
							Additional development work billed at <strong>$35/hr</strong>.
						</div>
					</div>
				</div>
			</article>
		</section>

		<p class="call-to-action">Let us help you take hold of your website. <a href="/contact.php">Contact Us Today</a>.</p>

	</main>

<?php require_once('../_includes/footer.php') ?>

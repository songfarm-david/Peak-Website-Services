<?php
$title = "Peak Website Services";
$description = "Peak Website Services offers website development services, website maintenance services, and website optimization services for peak performers in business.";
$h1 = $title;
$h2 = "";
$canonical = "https://peakwebsites.ca/";
?>
<?php require_once('_includes/header.php') ?>

	<main>
		<!-- Landing Page -->
		<section id="business-top">
			<!-- TEST: img commented out to reduce requests -->
			<img class="at-only" src="/" alt="The peak of a large, snow-covered mountain on a crisp and cloudy day" />
			<div class="container callout fadeInUp">
				<h1 class="">Put Your Business On&nbsp;<span>Top</span></h1>
				<p>Everything you need to rise above in today's online world.</p>
			</div>
			<a href="#complicated-web" id="down-arrow" class="scroll-link"></a>
		</section><!--/ end of Landing Page -->

		<!-- Page two -->
		<section id="complicated-web" class="fadeInUp">
			<h2>Today's Web Is <em>Complicated</em></h2>
		 	<p>In today's online world, it's important that you make a strong first impression, but having a good website today isn't what it used to be &mdash; making sure it looks good on all devices, is quick and easy to use, and servers your business and your customers &mdash; requires professional attention.</p>
			<div>
				<p id="special" class="">
					<!-- <b>That's where <em>I</em> come in.</b> -->
					<!-- NOTE: encode words into svg image -->
				</p>
			 	<p>Peak Website Services provides everything you need for your online business: <a href="/website-services/website-development-services.php" class="inline-link">development</a>, <a href="/website-services/website-maintenance-services.php" class="inline-link">management</a>, <a href="/website-services/website-optimization-services.php" class="inline-link">optimization</a>.<br> Best of all, you get personal support and attention you can count on.</p>
				<a href="#work-with-us" class="scroll-link" title="Why work with us?">So, why work with Peak Websites?</a>

			</div>

		</section><!--/ end Page two -->

		<!-- Floating Section -->
		<section id="work-with-us">
			<div id="columns" class="">
				<div class="service-quality">
					<h3>Commitment to Quality</h3>
					<div id="quality" class="icon-badges"></div>
					<p>Peak Websites doesn't settle for <em>"just okay"</em>. We go above and beyond the call to provide you with the kind of service you can rely on. <strong>We chose the name Peak Websites for a reason!</strong></p>
				</div>
				<div class="service-quality">
					<h3>Industry Expertise</h3>
					<div id="expertise" class="icon-badges"></div>
					<p>Websites are what we do and part of that means keeping up with the ever-changing world of the web. When you work with us, you can relax and focus on the more important than your website.</p>
				</div>
				<div class="service-quality">
					<h3>Satisfaction Guaranteed</h3>
					<div id="satisfaction" class="icon-badges"></div>
					<p>We want to make the web a better place, and that starts with being a better business. Peak stands behind everything it does and will go the extra mile to make sure you're satisfied. Guaranteed!</p>
				</div>
			</div>
			<a href="contact.php" title="contact form">Elevate Your Online Business Today</a>
		</section><!--/ end Floating Section -->

	</main>

<?php require_once('_includes/footer.php') ?>

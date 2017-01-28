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
				<p>Everything you need to compete in today's online world.</p>
			</div>
			<a href="#complicated-web" id="down-arrow" class="scroll-link"></a>
		</section><!--/ end of Landing Page -->

		<!-- Page two -->
		<section id="complicated-web">
			<h2>Today's Web Is <em>Complicated</em></h2>
		 	<p>In today's online world, it's important that you make a strong first impression, but having a good website today isn't what it used to be &mdash; making sure it works across devices, is quick and easy to use, and makes a great first impression on potential customers can be a full time job!</p>
			<div>
				<p id="special">
					<!-- <b>That's where <em>I</em> come in.</b> -->
					<!-- NOTE: encode words into svg image -->
				</p>
			 	<p>I provide everything you need for your online business: development, management, optimization. All in one place and with personal access to me.</p>
				<a href="#work-with-us" class="scroll-link" title="Why work with us?">So, why work with me?</a>

			</div>

		</section><!--/ end Page two -->

		<!-- Floating Section -->
		<section id="work-with-us">
			<div id="columns" class="">
				<div>
					<h3>Commitment to Quality</h3>
					<div id="quality" class="icon-badges"></div>
					<p>I don't settle for <em>"just okay"</em>. I go above and beyond the call to provide you with the kind of service you can feel good about. <em>I chose the name Peak Websites for a reason!</em></p>
				</div>
				<div>
					<h3>Industry Expertise</h3>
					<div id="expertise" class="icon-badges"></div>
					<p>Websites are what I do and part of that is keeping up with the ever-changing world of the web. When you work with me, you can relax and focus on the more important things.</p>
				</div>

				<div>
					<h3>Satisfaction Guaranteed</h3>
					<div id="satisfaction" class="icon-badges"></div>
					<p>I want to make the web a better place, and that starts with being a better business. I stand behind everything I do and will go the extra mile to make sure you're satisfied. Guaranteed.</p>
				</div>
			</div>
			<a href="contact.php" title="contact form">Elevate Your Online Business Today</a>
		</section><!--/ end Floating Section -->

	</main>

<?php require_once('_includes/footer.php') ?>

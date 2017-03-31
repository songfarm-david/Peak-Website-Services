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
		<section class="bg-image" id="development">
			<div class="service">
				<h2 class="hide"><?php echo $h2; ?></h2>
				<p class="service-title">We make it easy to have what you want</p>
				<p>Whether you are creating your first website or want to improve your existing one, we can deliver to you a professional, beautiful website that suit you and the needs of your business.</p>
			</div>
		</section><!--/ end of service -->

		<section class="service-types">
			<h3>Here are some of the things we can help you with:</h3>
			<ul>
				<li>HTML5 Websites</li>
				<li>WordPress Setup and Management</li>
				<li>Content Management Systems</li>
				<li>E-Commerce</li>
				<li>Social Media Integrations</li>
				<li>Blogs</li>
				<li>Mailing Lists</li>
				<li>Registration Forms</li>
			</ul>
		</section>

		<!-- NOTE: this section might be too fluffy -->
		<!-- <section class="section-temp">
			<h3>About Our Websites</h3>
			<p>When we build a website, we have a few objectives we strive to meet:</p>
			<ol>
				<li>To clearly and robustly meet the demand of the problem; that is to say, solving <em>your unique online business challenge</em> in the most economical and elegant way.</li>
				<li>To code in a clean, compact, and <a href="wai-aria">inclusive</a> way, in-step with current best-practices and to create an application that not only looks beautiful but <em>works</em> on a vast array of viewing devices</li>
				<li>To remain dedicated to ensuring the continued service of our websites, from initial release through to its present state</li>
			</ol>
			<br>
			<a href="/about.php">Learn more about Peak</a>
			<a href="/portfolio/">See our Portfolio</a>
		</section> -->

		<p class="call-to-action">Let&rsquo;s get the ball rolling. <a href="/contact.php">Contact Us Today</a> for a no-pressure chat about your online development needs.</p>

	</main>

<?php require_once('../_includes/footer.php') ?>

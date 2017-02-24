<?php
$title = "Portfolio | Peak Website Services";
$description = "Peak Websites builds and designs websites for the needs of our clients. Some examples include: WordPress and HTML5 websites and custom-built websites, and more.";
$h1 = "Portfolio";
$h2 = "Recent Work";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<main role="main">

		<!-- Portfolio -->
		<section id="portfolio">

			<h1 class="portfolio-main portfolio-main-title"><?php echo $h1; ?></h1>
				<p class="portfolio-main portfolio-main-description">Below are some of the more recent projects from Peak Websites. Click on an image to view the live website.</p>

				<!-- first row -->
				<div class="row portfolio-row">
					<div class="col col-6 portfolio-item">
						<div class="portfolio-desc-container">
							<h3 class="portfolio-title">Canadian In-Floor Radiant Solutions</h3>
							<p class="portfolio-description">This project was a redesign of <a href="#"><abbr title="Canadian In-Floor Radiant Heating">CIRS</abbr> existing website</a>. It was built on top of <a href="#" target="_blank">BootStrap</a> and coded in HTML5 and CSS3. Special attention was dedicated to accessibility testing and ensuring compatibility with <a href="#">WAI-ARIA</a> specifications. It also features custom JavaScript code for the navigation and mobile cost examples widget.</p>
						</div>
						<a href="https://peakwebsites.ca/cirs/" target="cirs_iframe"><div id="cirs" class="portfolio-thumbnail-container"></div></a>
						<iframe src="#" id="cirs_iframe"></iframe>
					</div>
					<div class="col col-6 portfolio-item">
						<div class="portfolio-desc-container">
							<h3 class="portfolio-title">Songfarm</h3>
							<p class="portfolio-description">This is a custom website built with HTML5 and JavaScript in the front-end with PHP and MySQL in the back-end. It uses geolocational APIs to track user location, is time-zone aware, and features a custom registration and event system that automatically notifies users via email of news and upcoming events.</p>
						</div>
						<a href="http://songfarm.ca" target="songfarm_iframe"><div id="songfarm" class="portfolio-thumbnail-container"></div></a>
						<iframe src="#" id="songfarm_iframe"></iframe>
					</div>
				</div>

				<!-- second row -->
				<div class="row portfolio-row">
					<div class="col col-6 portfolio-item">
						<div class="portfolio-desc-container">
							<h3 class="portfolio-title">Luna's Canoa Massage</h3>
							<p class="portfolio-description">This site was designed on WordPress and is a simple brochure style website for a Massage Studio in Ecuador. Future plans include integrating a booking system through the website that allows website visitors to book online and be notifid of their bookings.</p>
						</div>
						<a href="http://www.canoamassage.com/" target="luna_iframe"><div id="luna" class="portfolio-thumbnail-container"></div></a>
						<iframe src="#" id="luna_iframe"></iframe>
					</div>
					<div class="col col-6 portfolio-item">
						<div class="portfolio-desc-container">
							<h3 class="portfolio-title">Hollis Wealth</h3>
							<p class="portfolio-description">This site was designed and developed as a draft for a financial planning company. It is a simple website that incorporates all the necessary information. Future development plans include to integrate Social Media networks and launch a complete SEO strategy.</p>
						</div>
						<a href="https://peakwebsites.ca/hollis-wealth/" target="hollis_iframe"><div id="hollis" class="portfolio-thumbnail-container"></div></a>
						<iframe src="#" id="hollis_iframe"></iframe>
					</div>
				</div>

		</section>
		<!--/ end Portfolio -->

	</main>
<?php require_once('../_includes/footer.php') ?>

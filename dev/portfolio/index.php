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
			<h1><?php echo $h1; ?></h1>


				<p>Below are some of the more recent projects I have undertaken. Click on an image to view the live website.</p>

				<div class="row">
					<div class="col col-6">
						<a href="https://peakwebsites.ca/cirs/" target="cirs_iframe"><div id="cirs" class="image-port"></div></a>
						<iframe src="#" id="cirs_iframe"></iframe>
					</div>
					<div class="col col-6">
						<a href="http://songfarm.ca" target="songfarm_iframe"><div id="songfarm" class="image-port"></div></a>
						<iframe src="#" id="songfarm_iframe"></iframe>
					</div>
				</div>

				<div class="row">
					<div class="col col-6">
						<a href="http://www.canoamassage.com/" target="luna_iframe"><div id="luna" class="image-port"></div></a>
						<iframe src="#" id="luna_iframe"></iframe>
					</div>
					<div class="col col-6">
						<a href="https://peakwebsites.ca/hollis-wealth/" target="hollis_iframe"><div id="hollis" class="image-port"></div></a>
						<iframe src="#" id="hollis_iframe"></iframe>

					</div>
				</div>




		</section><!--/ end Portfolio -->

	</main>
<?php require_once('../_includes/footer.php') ?>

<?php
$title = "Portfolio | Peak Website Services";
$description = "";
$h1 = "Portfolio";
$h2 = "Recent Work";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<main role="main">

		<!-- Portfolio -->
		<section id="portfolio">
			<h1 class="hide"><?php echo $h1; ?></h1>

			<!-- Recent Work -->
			<section>
				<h2><?php echo $h2; ?></h2>

				<div class="row">
					<div class="col col-6">
						<div id="cirs" class="image-port"></div>
					</div>
					<div class="col col-6">
						<div id="songfarm" class="image-port"></div>
					</div>
				</div>

				<div class="row">
					<div class="col col-6">
						<div id="luna" class="image-port"></div>
					</div>
					<div class="col col-6">
						<div id="" class="image-port"></div>
					</div>
				</div>



			</section><!--/ end Recent Work -->

		</section><!--/ end Portfolio -->

	</main>
<?php require_once('../_includes/footer.php') ?>

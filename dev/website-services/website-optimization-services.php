<?php
$title = "Website Optimization Services | Peak Website Services";
$description = "Affordable website optimization services, search engine optimization services for small businesses and online businesses. SEO service packages available, too.";
$h1 = "Website Optimization Services";
$h2 = "Website Optimization Service";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<main>

		<!-- service -->
		<section class="service" id="optimization">
			<h2 class="at-only"><?php echo $h2; ?></h2>

			<div class="service-intro container">
				<span>Your website should work <em>for</em> you.</span>
				<p>
					We are a strong proponent of the <em>'work smarter not harder'</em> philosophy and make it easy for you to make smarter decisions by knowing what's important to your customers and what's going on with your website.
				</p>
			</div>

			<!-- service features -->
			<section class="service-features container-alt" id="website-optimization-plan">
				<h3 class="at-only">Website Optimization Plan</h3>
				<!-- features list -->
				<ul class="feature-list">
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/optimize-icons/keyword-strategy.svg" alt="" />
							<span>Keyword Strategy Personalized to Your Business</span>
						</div>
						<p>
							The only way to succeed on the search pages is to leverage your unique angle and learn how that is relevant to the people you want to target.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/optimize-icons/competitor-insights.svg" alt="" />
							<span>Learn About your Competitors</span>
						</div>
						<p>
							Knowing where your competitor is weak and where they are strong helps you capitilize on your own strengths and minimize areas of lesser need.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/optimize-icons/search-visibility.svg" alt="" />
							<span>Optimized Search Visibility</span>
						</div>
						<p>
							Let us turn your website into a peak performer so that you are always where you need to be online.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/optimize-icons/megaphone.svg" alt="" />
							<span>Learn From the Data</span>
						</div>
						<p>
							We provide you with invaluable web analytics about your market, your competitors, and your key opportunities for growth in the technology world.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="../../_assets/svg-icons/optimize-icons/market.svg" alt="" />
							<span>Flexible to Change</span>
						</div>
						<p>
							We are with you for the long haul, hands on the wheel, and voice in your ear, guiding your decisions to elevate your business online.
						</p>
					</li>
					<li>
						&nbsp;
					</li>
				</ul>
			</section><!--/ end of service features -->

		</section>

		<!-- cta -->
		<?php include('../_includes/theme/banner.php'); ?><!--/ end of cta -->

	</main>




<?php require_once('../_includes/footer.php') ?>
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
			<h2 class="hide"><?php echo $h2; ?></h2>
			<div>
				<div class="service-intro container">
					<span>Your website should work <em>for</em> you.</span>
					<p>
						Anyone who's serious about the success of their online business knows the importance of optimizing their web presence for site visitors and search engine visibility.
					</p>
					<p>
						Investing in the health and visibility of your online business better ensures that your website is meeting the demands of your business.
					</p>
					<p>
						<a href="/contact.php?service_type=optimization"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;Get A Quote Today</a>
					</p>
				</div>
			</div>

			<!-- service features -->
			<section class="service-features container" id="website-optimization-plan">
				<h3 class="at-only">Website Optimization Plan</h3>
				<h4 class="hide">What's included:</h4>
				<ul class="feature-list">
					<li>
						<div class="feature-container">
							<img src="/_assets/svg-icons/optimize-icons/keyword-strategy.svg" alt="" />
							<span>Personal Keyword Strategy</span>
						</div>
						<p>
							Build your content around search terms that drive your core audience and optimize traffic to your site to boost conversion.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/_assets/svg-icons/optimize-icons/competitor-insights.svg" alt="" />
							<span>Powerful Competitor Insights</span>
						</div>
						<p>
							Gain an in-depth view into the marketing strategies of your competitors and realize what unique opportunities exist to catalize the growth of your business.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/_assets/svg-icons/optimize-icons/search-visibility.svg" alt="" />
							<span>Optimized Search Visibility</span>
						</div>
						<p>
							Turn your website into a peak performer and capitilize on industry leading techniques to optimize your websites search visibility.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/_assets/svg-icons/optimize-icons/megaphone.svg" alt="" />
							<span>Your Corner of the Web</span>
						</div>
						<p>
							Develop your website's domain authority and set the foundation for consistently strong page ranks to galvanize your place on the web.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/_assets/svg-icons/optimize-icons/market.svg" alt="" />
							<span>Dynamic Marketing Campaigns</span>
						</div>
						<p>
							Remain flexible to shifting market conditions and adjust keyword strategy to adapt to the needs and demands of your customers.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/_assets/svg-icons/optimize-icons/google-analytics.svg" alt="" />
							<span>Google AdWords &amp; Google Analytics</span>
						</div>
						<p>
							Learn about your site visitors actions and develop targeted, efficient and fully managed Adword campaigns to boost your business's bottom line.
						</p>
					</li>
				</ul>
			</section><!--/ end of service features -->

		</section>

		<!-- cta -->
		<?php include('../_includes/theme/banner.php'); ?>
		<!--/ end of cta -->

	</main>




<?php require_once('../_includes/footer.php') ?>

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
						<a href="/peak/contact.php?service_type=optimization"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;Get A Quote Today</a>
					</p>
				</div>
			</div>

			<!-- service features -->
			<section class="service-features container" id="website-optimization-plan">
				<h3 class="at-only">Website Optimization Plan</h3>
				<h4 class="hide">What's included:</h4>
				<ul class="feature-list">
					<li>
						<span>Personal Keyword Strategy</span>
						<p>
							Build your content around search terms that drive your core audience and optimize traffic to your site to boost conversion.
						</p>
					</li>
					<li>
						<span>Powerful Competitor Insights</span>
						<p>
							Gain an in-depth view into the marketing strategies of your competitors and realize what unique opportunities exist to catalize the growth of your business.
						</p>
					</li>
					<li>
						<span>Optimized Search Visibility</span>
						<p>
							Turn your website into a peak performer and capitilize on industry leading techniques to optimize your websites search visibility.
						</p>
					</li>
					<li>
						<span>Your Corner of the Web</span>
						<p>
							Develop your website's domain authority and set the foundation for consistently strong page ranks to galvanize your place on the web.
						</p>
					</li>
					<li>
						<span>Dynamic Marketing Campaigns</span>
						<p>
							Remain flexible to shifting market conditions and adjust keyword strategy to adapt to the needs and demands of your customers.
						</p>
					</li>
					<li>
						<span>Google AdWords &amp; Google Analytics</span>
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

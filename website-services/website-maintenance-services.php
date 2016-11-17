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
		<section class="service" id="maintenance">
			<h2 class="hide"><?php echo $h2; ?></h2>
			<div>
				<div class="service-intro container">
					<span>Take the load off having an online presence.</span>
					<p>
						As the demands of your audience and technology grow and evolve, having someone with a finger on the pulse of your online business allows you the ability to remain fluid to changing market conditions as well as swells in technology.
					</p>
					<p>
						Our Website Maintenance Plans take to worry out of having an online presence so you can focus on running your business. We're your connection to the digital world, and we're only a phone call away.
					</p>
					<p>
						<a href="/contact.php?service_type=maintenance"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;Request A Quote</a>
					</p>
				</div>
			</div>

			<!-- service features -->
			<section class="service-features container" id="website-maintenance-plan">
				<h3 class="at-only">Website Maintenance Plan</h3>
				<p class="h4 hide">
					Everything you need to keep your business online and running smoothly.
				</p>
				<h4 class="hide">What's included:</h4>
				<!-- features list -->
				<ul class="feature-list">
					<li>
						<div class="header-container">
							<img src="/peak/_assets/svg-icons/maint-icons/web-hosting.svg" alt="" />
							<span>Fast, Reliable Web Hosting</span>
						</div>
						<p>
							Let us host your website on our lightning fast and secure Canadian Web Servers. You can relax knowing your website is securely online and your data protected.
						</p>
					</li>
					<li>
						<div class="header-container">
							<img src="/peak/_assets/svg-icons/maint-icons/support.svg" alt="" />
							<span>Support When You Need It</span>
						</div>
						<p>
							The internet is dynamic and so should be your online business. We're just a phone call away whenever inspiration strikes or when you need to change something on your website.
						</p>
					</li>
					<li>
						<div class="header-container">
							<img src="/peak/_assets/svg-icons/maint-icons/contract.svg" alt="" />
							<span>No Contracts. No Restrictions.</span>
						</div>
						<p>
							We think you should be in control of your online business. That means you own everything, including your website and domain name.
						</p>
					</li>
					<li>
						<div class="header-container">
							<img src="/peak/_assets/svg-icons/maint-icons/website-checkup.svg" alt="" />
							<span>Regular Website Check-Ups</span>
						</div>
						<p>
							Monitoring the health and behavior of your site and making sure it's properly crawled and indexed by the search engines means your customers always have a green light to become a customer.
						</p>
					</li>
					<li>
						<div class="header-container">
							<img src="/peak/_assets/svg-icons/maint-icons/analytics.svg" alt="" />
							<span>Website Analytics</span>
						</div>
						<p>
							Keeping track of your website's performance is critical for growth. We'll show you who's coming to your website and what they're doing once they get there.
						</p>
					</li>
					<li>
						<div class="header-container">
							<img src="/peak/_assets/svg-icons/maint-icons/up-arrow.svg" alt="" />
							<span>Monthly Performance Reports</span>
						</div>
						<p>
							See how well your website is performing in our <em>Monthly Performance Reports</em> and learn from the data to make better online business decisions.
						</p>
					</li>
				</ul>
			</section><!--/ end of service features -->
			<!-- service cta -->

		</section><!--/ end of service -->

		<!-- cta -->
		<?php include('../_includes/theme/banner.php'); ?>
		<!--/ end of cta -->

</main>

<?php require_once('../_includes/footer.php') ?>

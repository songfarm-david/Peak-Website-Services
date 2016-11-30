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
						<div class="feature-container">
							<img src="/peak/_assets/svg-icons/maint-icons/web-hosting.svg" alt="" />
							<span>Website Hosting</span>
						</div>
						<p>
							Let us host your website on our state-of-the-art, secure <a href="/peak/faq.php#canadian-hosting">Canadian Web Servers</a>. You can relax knowing your website is securely online and your data protected.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/peak/_assets/svg-icons/maint-icons/support.svg" alt="" />
							<span>Regular Site Maintenance</span>
						</div>
						<p>
							For us, keeping your website online, running smoothly, and functioning as expected is simply par for the course and included in our Maintenance Package.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/peak/_assets/svg-icons/maint-icons/contract.svg" alt="" />
							<span>Online Security</span>
						</div>
						<p>
							Consistent and mindful about security, you can take heart that your website is safe and your online presence is protected
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/peak/_assets/svg-icons/maint-icons/website-checkup.svg" alt="" />
							<span>Insight Reports</span>
						</div>
						<p>
							Because information about your site visitors can be invaluable to your bottom line, we include regular analytics report in our Website Maintenance Package.
						</p>
					</li>
					<li>
						<div class="feature-container">
							<img src="/peak/_assets/svg-icons/maint-icons/analytics.svg" alt="" />
							<span>You're In Control</span>
						</div>
						<p>
							We think you should be in control of your online business. For that reason we make sure you maintain ownership of your website, your domain, and everything involved with your online presence.
						</p>
					</li>
					<li>
						<!-- LARGE CALL TO ACTION HERE -->
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

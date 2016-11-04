<?php
$title = "Peak | Website Maintenance Services";
$description = "Affordable website maintenance services, website hosting and management services and more for small business owners. Website maintenance plans available, too.";
$h1 = "Website Maintenance Services";
$h2 = "Website Maintenance Service";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

<main>

		<!-- service -->
		<section class="service container" id="maintenance">
			<h2 class="hide"><?php echo $h2; ?></h2>
			<div class="service-intro">
				<span>Take the load off having an online presence.</span>
				<p>
					As the demands of your audience and technology grow and evolve, having someone with a finger on the pulse of your online business allows you the ability to remain fluid to changing market conditions as well as swells in technology.
				</p>
				<p>
					Our Website Maintenance Plans take to worry out of having an online presence so you can focus on running your business. We're your connection to the digital world, only a phone call away.
				</p>
				<p>
					<a href="/contact.php?service_type=maintenance">Get a Quote</a>
				</p>
			</div>
			<!-- service features -->
			<section class="service-features" id="website-maintenance-plan">
				<h3>Website Maintenance Plan</h3>
				<p class="h4">
					Everything you need to keep your business online and running smoothly.
				</p>
				<h4 class="hide">What's included:</h4>
				<!-- features list -->
				<ul class="feature-list">
					<li>
						<span>Fast, Reliable Web Hosting</span>
						<p>
							Let us host your website on our lightning fast and secure Canadian Web Servers. You can relax knowing your website is securely online and your data protected.
						</p>
					</li>
					<li>
						<span>Support When You Need It</span>
						<p>
							The internet is dynamic and so should be your online business. We're just a phone call away whenever inspiration strikes or when you need to change something on your website.
						</p>
					</li>
					<li>
						<span>No Contracts. No Restrictions.</span>
						<p>
							We think you should be in control of your online business. That means you own everything, including your website and domain name.
						</p>
					</li>
					<li>
						<span>Regular Website Check-Ups</span>
						<p>
							Monitoring the health and behavior of your site and making sure it's properly crawled and indexed by the search engines means your customers always have a green light to become a customer.
						</p>
					</li>
					<li>
						<span>Website Analytics</span>
						<p>
							Keeping track of your website's performance is critical for growth. We'll show you who's coming to your website and what they're doing once they get there.
						</p>
					</li>
					<li>
						<span>Monthly Performance Reports</span>
						<p>
							See how well your website is performing in our <em>Monthly Performance Reports</em> and learn from the data to make better online business decisions.
						</p>
					</li>
				</ul>
			</section><!--/ end of service features -->
			<!-- service cta -->
			<section class="service-cta">
				<p>
					Working with us is like having your own personal IT guy on staff. And although, we're fluent in geek, we can *usually* explain things so that even a 5 year old would understand.
				</p>
				<p>
					<a href="/contact.php?service_type=maintenance">Start A Website Service Plan</a>
				</p>
			</section>
		</section><!--/ end of service -->


</main>

<?php require_once('../_includes/footer.php') ?>

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
		<section class="service" id="development">
				<h2 class="hide"><?php echo $h2; ?></h2>
				<div>
					<div class="service-intro container">
						<span>Let us build you a beautiful, modern website that <em>works</em>.</span>
						<p>
							Whether you need a brand new website or want to give your existing one a facelift, let us deliver to you a custom designed, user-friendly, and professional website that not only looks great but works great, too.
						</p>
						<p>
							Every website we develop is built on industry standard best-practices and designed to meet your business needs. We stand behind our websites 100% and you can count on that.
						</p>
						<p>
							<a href="/contact.php?service_type=development"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;Contact Us Today</a>
						</p>
					</div>
				</div>

					<!-- service features -->
					<section class="service-features container" id="website-development">
						<h3 class="at-only">What's Included?</h3>
						<!-- features list -->
						<ul class="feature-list">
							<li>
								<span>Built strong under-the-hood</span>
								<p>
									When it comes to designing and developing your website, we are sticklers for industry best-practices. That means your website behaves like it should. And if you do run into a bug, we'll make it right, no questions asked.
								</p>
							</li>
							<li>
								<span>No Page Limits</span>
								<p>
									The ultimate purpose of your website should be to support your online business goals, regardless of the amount of pages required.
								</p>
							</li>
							<li>
								<span>Mobile Friendly &amp; Responsive</span>
								<p>
									No question about it: mobile browsing is on the rise, which means your website has to look good and function everywhere &mdash; but don't sweat it, crafting mobile-friendly websites is just another day at the office for us.
								</p>
							</li>
							<li>
								<span>SEO Enhanced</span>
								<p>
									Websites need traffic in order to thrive. We build our sites on top of industry leading best-practices to ensure your website can be understood and index by all the major search engines.
								</p>
							</li>
							<li>
								<span>Accessible</span>
								<p>
									Think of accessible websites like accessibility ramps for brick-and-mortar establishments. Although, often overlooked by other web companies, we believe that your website should be accessible to everyone.
								</p>
							</li>
							<li>
								<span>Optimized for Conversion</span>
								<p>
									Because at the end of the day your website is a tool for turning visitors into customers, conversion is at the core of every website we build.
								</p>
							</li>
						</ul><!--/ end of features list -->
					</section><!--/ end of service features -->
			</section><!--/ end of service -->

			<!-- cta -->
			<?php include('../_includes/theme/banner.php'); ?>
			<!--/ end of cta -->

	</main>

<?php require_once('../_includes/footer.php') ?>

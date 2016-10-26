<?php
$title = "Peak | Website Development Services";
$description = "Affordable website design and development services for small business owners and online businesses. Custom website development services for the non-technical.";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

	<header>
		<h1 class="hide">Website Development Services</h1>
		<?php include_once('../_includes/navigation.php') ?>
	</header>

	<main class="container service-container">
		<!-- web development service -->
		<section class="intro-service">
			<h2>Website Development Service</h2>
			<span>Let us build you a beautiful, modern website that <em>works</em>.</span>
			<p>
				Whether you need a brand new website or just want to give your existing one a makeover, our professional web developers and designers can design and develop a modern, <a href="/peak/faq#mobile-first">mobile-first</a>, professional website that not only looks good but works for your business.
			</p>
			<p>
				<a href="tel:9055922141">Give us a call</a> to get a quote or <a href="/peak/contact.php">Submit a Questionnaire</a>
			</p>
			<!-- what's included -->
			<section>
				<h3>What's Included?</h3>
				<p>
					We include the following in every website we do:
				</p>
				<ul>
					<li>
						<!-- this point needs a caret or special clause because i can't do that for them ad infinit-->
						<span>No limit on number of pages</span>
						<p>
							We believe a website is done when it's done, that's why we don't go by the page.
						</p>
					</li>
					<li>
						<span>Mobile Friendly &amp; Responsive</span>
						<p>
							Every website we build behaves as expected from device to device and on mobile.
						</p>
					</li>
					<li>
						<span>SEO Enhanced</span>
						<p>
							There are real consequences to not complying with Industry Best Practices...
						</p>
					</li>
					<li>
						<span>Accessible</span>
						<p>
							Your online business should be accessible to everyone. We make sure that it is.
						</p>
					</li>
					<li>
						<span>Conversion Optimized</span>
						<p>
							We realize that the purpose of having a website or online business is to convert customers. We keep that top of mind when developing and designing a custom website for you.
						</p>
					</li>
				</ul>
			</section>
			<!-- additional services -->
			<section id="additional-services">
				<h3>Additional Services</h3>
				<p>
					Apart from our website design and development services, we also offer:
				</p>
				<ul>
					<li><a href="content-creation-services.php">Content Creation Services</a></li>
					<li><a href="personal-and-corporate-branding.php">Personal Branding and Corporate Branding</a> Services and Packages</li>
					<li>Logo &amp; Graphic Design</li>
				</ul>
			</section>
			<!-- pricing -->
			<section>
				<h3>Pricing</h3>
				<p>
					here will we show a pricing table with a few examples. Each example will have a select button which will go to a contact form that will wrap the customer. Make sure to include which selection they chose in the form return.
				</p>
			</section>
		</section>
		<!--/ end of first section -->

		<!-- Website Maintenance -->
		<section>
			<h2>Need Help Getting your Site Online?</h2>
			<p>
				You've "got" a website. Now what?
			</p>
			<p>
				As part of our Website Services, we also offer <a href="#">Website Maintenance Services</a>. Included in this are top-quality <a href="faq#canadian-hosting">Canadian-Hosting</a> and ...
			</p>
		</section>
	</main>



<?php require_once('../_includes/footer.php') ?>

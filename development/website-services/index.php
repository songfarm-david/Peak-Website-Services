<?php
$title = "Website Services | Peak Website Services";
$description = "Peak Website Services include: website development services, website maintenance services, website optimization services, and more";
$h1 = "Peak Website Services";
$h2 = "";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('../_includes/header.php') ?>

<main>

	<!-- Website Services -->
	<section id="website-services" class="service">

		<div class="container">
			<!-- <h2>With You Every Step of the Way</h2>
			<p>We have a website service for every step of your online business journey <br>&mdash; plus, the know-how to help you to reach your summit.</p> -->
			<p>Wherever you are on the path, we have the knowledge and skills to ensure you get where you're going.</p>
		</div>

		<!-- services table -->
		<article id="service-table">
			<h3 class="at-only">Website Services Table</h3>
			<!-- NOTE: table will exist as back-up. A flexbox version will be implemented afterwards. -->
			<table role="table" cellspacing="0">
				<caption class="at-only">Website Services Table</caption>
				<col>
				<col>
				<col>
				<thead>
					<tr>
						<th role="columnheader" scope="col" aria-owns="body-dev-1"><a href="/website-services/website-development-services.php">Development</a></th>
						<th role="columnheader" scope="col" aria-owns="body-maint-1"><a href="/website-services/website-maintenance-services.php">Maintenance</a></th>
						<th role="columnheader" scope="col" aria-owns="body-optim-1"><a href="/website-services/website-optimization-services.php">Optimization</a></th>
					</tr>
					<tr>
						<th>Great for starting your online business off on the right foot.</th>
						<th>Lets you focus on your business. <br>Not your website.</th>
						<th>Perfect for business owners that want to put their website on top.</th>
					</tr>
				</thead>
				<tbody>
					<tr class="include">
						<td>Comes with:</td>
						<td>Includes a minimum of:</td>
						<td>Includes a minimum of:</td>
					</tr>
					<tr>
						<td>Professional Grade</td>
						<td>Domain Name</td>
						<td>Keyword Optimization</td>
					</tr>
					<tr>
						<td>Mobile-Ready &amp; Optimized</td>
						<td>Website Hosting</td>
						<td>Personalize Keyword Strategy</td>
					</tr>
					<tr>
						<td>Blog, eCommerce integrations</td>
						<td>Secured Connection</td>
						<td>Invaluable Competitor Insights</td>
					</tr>
					<tr>
						<td>No Page Limits</td>
						<td>Free Content Updates</td>
						<td>Optimized Website</td>
					</tr>
					<tr>
						<td>Tailored To Your Business</td>
						<td>Regular Website Check-Ups</td>
						<td>Local SEO</td>
					</tr>
					<tr>
						<td>Search Engine Ready</td>
						<td>Regular Website Analytics Reports</td>
						<td>Regular Search Engine Visibility Reports</td>
					</tr>
					<tr>
						<td>No Restrictive Contracts</td>
						<td>Your Own IT Guy On Speed-Dial</td>
						<td>Dedicated SEO Specialist</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td id="foot-dev-1" class="no-bg-tr">
							<a href="/contact.php" class="get-started">Get Started</a>
							<a href="/website-services/website-development-services.php">Learn More</a>
						</td>
						<td id="foot-maint-1" class="no-bg-tr">
							<a href="/contact.php" class="get-started">Get Started</a>
							<a href="/website-services/website-maintenance-services.php">Learn More</a>
						</td>
						<td id="foot-optim-1" class="no-bg-tr">
							<a href="/contact.php" class="get-started">Get Started</a>
							<a href="/website-services/website-optimization-services.php">Learn More</a>
						</td>
					</tr>
				</tfoot>
			</table>
		</article>

	</section>

	<section>
		<h3 class="at-only">Contact Us</h3>
		<div class="container-alt">
			<p class="h3">Not sure what you need?	<br><span><a href="/contact.php">Contact Us</a> for a free assessment.</span></p>
		</div>
	</section>

</main>

<?php require_once('../_includes/footer.php') ?>

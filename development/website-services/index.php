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
			<h2>With You Every Step of the Way</h2>
			<p>We have a website service for every step of your online business journey <br>&mdash; plus, the know-how to help you to reach your summit.</p>
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
						<th role="columnheader" scope="col" aria-owns="body-dev-1"><a href="">Website Development Services</a></th>
						<th role="columnheader" scope="col" aria-owns="body-maint-1"><a href="">Website Maintenance Services</a></th>
						<th role="columnheader" scope="col" aria-owns="body-optim-1"><a href="">Website Optimization Services</a></th>
					</tr>
				</thead>
				<tbody>
					<tr id="intro">
						<td id="body-dev-1">Great for starting your online business off on the right foot.</td>
						<td id="body-maint-1">Lets you focus on your business. <br>Not your website.</td>
						<td id="body-optim-1">Perfect for business owners that want to put their website on top.</td>
					</tr>
					<tr>
						<td class="tr-header">Comes with:</td>
						<td class="tr-header">Includes a minimum of:</td>
						<td class="tr-header">Includes a minimum of:</td>
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
					<!-- if applicable -->
				</tfoot>
			</table>
		</article>

	</section>

</main>

<?php require_once('../_includes/footer.php') ?>

<?php
$title = "Website Services | Peak Website Services";
$description = "Peak Website Services include: website development services, website maintenance services, website optimization services, and more";
$h1 = "Peak Website Services";
$h2 = "";
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php require_once('_includes/header.php') ?>

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
				<th role="columnheader" scope="col" aria-owns="body-dev-1">Website Development</th>
				<th role="columnheader" scope="col" aria-owns="body-maint-1">Website Maintenance</th>
				<th role="columnheader" scope="col" aria-owns="body-optim-1">Website Optimization</th>
			</tr>
		</thead>
		<tbody>
			<tr id="intro">
				<td id="body-dev-1"><a href="/peak/website-services/website-development-services.php">Website development service</a><br> is great for starting your online business off on the right foot.</td>
				<td id="body-maint-1"><a href="/peak/website-services/website-maintenance-services.php">Website maintenance service</a><br> lets you focus on your business. <br>Not your website.</td>
				<td id="body-optim-1"><a href="/peak/website-services/website-optimization-services.php">Website&nbsp;optimization&nbsp;service</a><br> is perfect for business owners that want to put their website on top.</td>
			</tr>
			<tr id="byline">
				<td class="td-no-bg">We strive, first, to understand your particular needs, then deliver to you an industry up-to-date, mobile-responsive, accessible, and beautifully designed website that is unique to your brand and vision.</td>
				<td>Your website is hosted on a quick and secure <em>Canadian webserver</em> and a portion of hours are dedicated each month to ensure that while the internet changes, your website stays <em>healthy</em> and <em>protected</em>.</td>
				<td>We dedicate a portion of hours each month to your business, analyzing keywords and optimizing your online presence.</td>
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
				<td>Blog, eCommerce, Newsletter integrations and more</td>
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

<?php require_once('_includes/footer.php') ?>

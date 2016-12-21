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
			<p>Whatever step you're on, we have a <em>Website Service</em> designed to get you where you're going.</p>
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
						<th role="columnheader" scope="col" aria-owns="body-dev-1" class="green"><a href="/website-services/website-development-services.php">Development</a></th>
						<th role="columnheader" scope="col" aria-owns="body-maint-1" class="blue"><a href="/website-services/website-maintenance-services.php">Maintenance</a></th>
						<th role="columnheader" scope="col" aria-owns="body-optim-1" class="purple"><a href="/website-services/website-optimization-services.php">Optimization</a></th>
					</tr>
					<tr>
						<th>Do you need a website? Does your existing website need a facelift? Let us tailor-make for you a website built for today's world.</th>
						<th>You have more important things to do then worry about a website. From hosting to domain names to security &mdash; we've got you covered.</th>
						<th>Rise above the competition and get found in the crowded internet marketplace. We'll help to put you in front of your core audience.</th>
					</tr>
				</thead>
				<tbody>
					<tr class="include">
						<td>All of our website are:</td>
						<td>Includes a minimum of:</td>
						<td>Includes a minimum of:</td>
					</tr>
					<tr>
						<td id="dev-examples">
							<span class="cost">Cost Examples:</span>
							<span class="example">Ex. 1:</span>
							<span>A Fish-and-Tackle shop would like to update their website with something modern, mobile-friendly and approachable.</span>
							<span>They want a blog they can update themselves. They also want to begin gaining subscribers for a mailing list about store specials and fishing events.</span>
							<span class="price">$1,000&mdash;$1,500</span>
						</td>
						<td>Website Management</td>
						<td>Keyword Optimization</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Domain Management</td>
						<td>Personalize Keyword Strategy</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Secure Hosting</td>
						<td>Invaluable Competitor Insights</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Dedicated Maintenance<br> &amp; Security Checks</td>
						<td>Optimized Website</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Monthly Website Reports</td>
						<td>Local SEO</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Your Own IT Guy</td>
						<td>Regular Search Engine Visibility Reports</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>Dedicated SEO Specialist</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td id="foot-dev-1">
							<span class="table-price">Websites Starting from:</span>
						</td>
						<td id="foot-maint-1">
							<span class="table-price">Plans Starting from:</span>
						</td>
						<td id="foot-optim-1">
							<span class="table-price">Plans Starting from:</span>
						</td>
					</tr>
					<tr>
						<td>$999</td>
						<td>$168/mo.</td>
						<td>$289/mo.</td>
					</tr>
					<tr>
						<td>
							<a href="/contact.php" class="green">Get Started</a>
							<a href="/website-services/website-development-services.php" title="Website Development Service">Learn More</a>
						</td>
						<td>
							<a href="/contact.php" class="blue">Get Started</a>
							<a href="/website-services/website-maintenance-services.php" title="Website Maintenance Service">Learn More</a>
						</td>
						<td>
							<a href="/contact.php" class="purple">Get Started</a>
							<a href="/website-services/website-optimization-services.php" title="Website Optimization Service">Learn More</a>
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

<?php $activePage = $_SERVER['PHP_SELF']; ?>
<nav class="navbar">
	<h2 class="hide">Main Navigation</h2>
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
      <span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
    </button>
	</div>
	<div class="collapse navbar-collapse" id="primary-nav">
		<ul>
			<li><a href="/index.php">Home</a></li>
			<!-- <li>
				<a href="/about.php" class="<?php //echo $class = ($activePage == "about.php") ? "active-link" : ""; ?>">About</a>
			</li> -->
			<li class="dropdown-btn">
				<a href="/website-services/" data-target="#sub-menu-1" data-toggle="">Services</a>
				<div class="collapse navbar-collapse" id="sub-menu-1">
					<ul class="dropdown-content">
						<li><a href="/website-services/website-development-services.php">Website Development</a></li>
						<li><a href="/website-services/website-optimization-services.php">Website Optimization</a></li>
						<li><a href="/website-services/website-hosting-services.php">Website Hosting</a></li>
						<li><a href="/website-services/website-maintenance-services.php">Website Maintenance</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="/portfolio/index.php" class="<?php //echo $class = ($activePage == "/portfolio/index.php") ? "active-link" : ""; ?>">Portfolio</a>
			</li>
			<li>
				<a href="/blog/" class="<?php //echo $class = ($activePage == "/blog/index.php") ? "active-link" : ""; ?>">Blog</a>
			</li>
			<li>
				<a href="/contact.php" class="<?php //echo $class = ($activePage == "/contact.php") ? "active-link" : ""; ?>">Contact</a>
			</li>
		</ul>
	</div>
</nav>

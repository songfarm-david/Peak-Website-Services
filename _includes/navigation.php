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
			<li><a href="/index.php" class="<?php echo $class = ($_SERVER['PHP_SELF'] == "/index.php") ? "active-link" : ""; ?>">Home</a></li>
			<li class="dropdown-btn">
				<a href="/website-services/" data-target="#sub-menu-1" data-toggle="" class="<?php echo $class = ($_SERVER['PHP_SELF'] == "/website-services/index.php") ? "active-link" : ""; ?>">Website Services</a>
				<div class="collapse navbar-collapse" id="sub-menu-1">
					<ul class="dropdown-content">
						<li><a href="/website-services/website-development-services.php">Website Development Services</a></li>
						<li><a href="/website-services/website-maintenance-services.php">Website Maintenance Services</a></li>
						<li><a href="/website-services/website-optimization-services.php">Website Optimization Services</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="/about.php" class="<?php echo $class = ($activePage == "about.php") ? "active-link" : ""; ?>">About</a>
			</li>
			<li>
				<a href="/contact.php"  class="<?php echo $class = ($activePage == "contact.php") ? "active-link" : ""; ?>">Contact</a>
			</li>
		</ul>
	</div>
</nav>

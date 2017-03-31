		<footer>
			<!-- <section id="social-links">
				<h4 class="at-only">Social Links</h4>
				<ul>
					<li><a href="https://twitter.com/peak_websites"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://github.com/songfarm-david/"><i class="fa fa-github" aria-hidden="true"></i></a></li>
					<li><a href="http://stackexchange.com/users/3476745/peak"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/peakwebsiteservices/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
					<li><a href="https://plus.google.com/115140722630024401107" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
				</ul>
			</section> -->
			<div id="copyright">
				<span>&copy; <?php echo date("Y"); ?> Peak Website Services</span>
				<br>
				<span>All Rights Reserved.</span>
			</div>
		</footer>

		<!-- jQuery CDN with Local Fallback -->
		<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	  <script>window.jQuery || document.write('<script src="../node_modules/jquery/dist/jquery.min.js" async defer><\/script>')</script>
		<!-- modernizr-custom -->
		<script type="text/javascript" src="/_js/helper/modernizr-custom.js" async defer></script>
		<!-- custom scripts -->
		<script type="text/javascript" src="/_js/helper/bs-collapse.js"></script>
		<script type="text/javascript" src="/_js/script.js" async defer></script>

		<!-- If current page == contact page, load contact form javascript -->
		<?php	echo $script = $_SERVER['PHP_SELF'] == '/contact.php' ? "<script src=\"_js/contact-form.js\"></script>" : "" ;?>

		<!-- Google Analytics ID tracking since 10/23/2016. -->
		<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='https://www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','UA-86141289-1','auto');ga('send','pageview');
		</script>
		<!-- NOTE: for Grunt Live Reload Server -->
		<script src="//localhost:35729/livereload.js"></script>
	</body>
</html>

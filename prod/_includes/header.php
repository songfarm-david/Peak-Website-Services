<!doctype html><html lang="en" class="no-js"><head><meta charset="utf-8"><title><?php echo $title; ?></title><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="description" content="<?php echo $description; ?>"> <?php echo $canon = ( !empty( $canonical ) ) ? "<link rel=\"canonical\" href=\"" . $canonical . "\">\n" : ""; ?> <script>!function(e){e.className=e.className.replace(/\bno-js\b/,"js")}(document.documentElement)</script><script type="text/javascript">var WebFontConfig={google:{families:["Raleway:300,400,700,800,900"]},timeout:4e3};!function(){var t=document.createElement("script");t.src=("https:"==document.location.protocol?"https":"http")+"://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js",t.async="true",document.head.appendChild(t)}()</script> <?php
			$css;

			// IF IS INDEX PAGE
			if ( $_SERVER['PHP_SELF'] == '/index.php' ) {
				// load critical css.
				$css = fopen("_css/index.css",'r');
				echo '<style>';
				echo fread($css,filesize("_css/index.css"));
				echo '</style>';
				fclose($css);
			}

			/**
				* If Blog
				*/
			if ( $_SERVER['PHP_SELF'] == '/dummyblog/dummyblog.php' ) {
				// load critical css.
				$stylesheet = fopen("../_css/blog.css",'r');
				echo '<style>' . fread( $stylesheet, filesize( "../_css/blog.css" ) ) . '</style>';
				fclose( $stylesheet );
			}

			// IF IS CONTACT PAGE
			if ( $_SERVER['PHP_SELF'] == '/contact.php' ) {
				// load critical css.
				$css = fopen("_css/contact.css",'r');
				echo '<style>';
				echo fread($css,filesize("_css/contact.css"));
				echo '</style>';
				fclose($css);
			}

			// IF Service PAGE
			if ($_SERVER['PHP_SELF'] == '/website-services/index.php') {
				// load critical css.
				$css = fopen("../_css/service-index.css",'r'); // path is relative to /website-services/index.php
				echo '<style>';
				echo fread($css,filesize("../_css/service-index.css")); // path is relative to /website-services/index.php
				echo '</style>';
				fclose($css);
			}

			// IF Service PAGE
			if ($_SERVER['PHP_SELF'] == '/website-services/website-development-services.php' ||
					$_SERVER['PHP_SELF'] == '/website-services/website-maintenance-services.php' ||
					$_SERVER['PHP_SELF'] == '/website-services/website-hosting-services.php' ||
					$_SERVER['PHP_SELF'] == '/website-services/domain-name-registration.php' ||
					$_SERVER['PHP_SELF'] == '/website-services/website-optimization-services.php') {
				// load critical css.
				$css = fopen("../_css/service-pages.css",'r'); // path is relative to /website-services/index.php
				echo '<style>';
				echo fread($css,filesize("../_css/service-pages.css")); // path is relative to /website-services/index.php
				echo '</style>';
				fclose($css);
			}

			// IF Portfolio page
			if ( $_SERVER['PHP_SELF'] == '/portfolio/index.php' ) {
				// load critical css.
				$css = fopen("../_css/portfolio.css",'r'); // path is relative to /website-services/index.php
				echo '<style>';
				echo fread($css,filesize("../_css/portfolio.css")); // path is relative to /website-services/index.php
				echo '</style>';
				fclose($css);
			}
		?> <link rel="image_src" href="_images/branding/peak-website-cover.jpg"><script src="https://www.google.com/recaptcha/api.js" async defer="defer"></script></head><body itemscope itemtype="https://schema.org/WebSite"><!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]--><meta itemprop="about" content="Peak Websites is a professional website services company providing web solutions to small business owners"><meta itemprop="author" content="Peak Websites"><meta itemprop="provider" content="Peak Websites Services"><meta itemprop="keywords" content="website services, website development services, website maintenance services, website optimization services"><header><h1 class="hide"><?php echo $h1; ?></h1><a href="/" rel="home"><img id="brand-logo" src="/_images/logo/peak_logo.png" alt="Peak Websites Logo"> </a> <?php include_once('navigation.php') ?> </header></body></html>
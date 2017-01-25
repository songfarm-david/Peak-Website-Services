<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $canon = (!empty($canonical)) ? "<link rel=\"canonical\" href=\"" . $canonical . "\">\n" : ""; ?>
		<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
		<!-- WebFontLoader -->
		<script type="text/javascript">
		var WebFontConfig = {
			google: {
				families: [ 'Raleway:300,400,700,900' ]
			},
			timeout: 2000
		};
		(function(){
			var wf = document.createElement("script");
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.async = 'true';
			document.head.appendChild(wf);
		})();
		</script>
		<!-- conditional & critical CSS here -->
		<?php
		$css;

			// IF IS INDEX PAGE
			if ($_SERVER['PHP_SELF'] == '/index.php') {
				// load critical css.
				$css = fopen("_css/index.css",'r');
				echo '<style>';
				echo fread($css,filesize("_css/index.css"));
				echo '</style>';
				fclose($css);
			}

			// IF IS CONTACT PAGE
			if ($_SERVER['PHP_SELF'] == '/contact.php') {
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
					$_SERVER['PHP_SELF'] == '/website-services/website-optimization-services.php') {
				// load critical css.
				$css = fopen("../_css/service-pages.css",'r'); // path is relative to /website-services/index.php
				echo '<style>';
				echo fread($css,filesize("../_css/service-pages.css")); // path is relative to /website-services/index.php
				echo '</style>';
				fclose($css);
			}
		?>
		<!-- NOTE: temp style declaration -->
		<!-- <link rel="stylesheet" href="../_css/service-pages.css" media="screen" title="Main Style Sheet"> -->
		<!-- Google ReCAPTCHA  -->
		<script src='https://www.google.com/recaptcha/api.js' async defer></script>
		<!-- <link rel="stylesheet" href="_/css/master.css"> -->
	</head>
	<body>
		<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
<?php //echo $_SERVER['PHP_SELF'] ?>
		<header>
			<h1 class="hide"><?php echo $h1; ?></h1>
			<?php include_once('navigation.php') ?>
		</header>

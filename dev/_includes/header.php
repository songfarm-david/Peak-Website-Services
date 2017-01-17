<!doctype html>
<html lang="en-us" class="no-js">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $canon = (!empty($canonical)) ? "<link rel=\"canonical\" href=\"" . $canonical . "\">\n" : ""; ?>
		<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
		<!-- Google ReCAPTCHA  -->
		<script src='https://www.google.com/recaptcha/api.js' async defer></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">

		<!-- conditional & critical CSS here -->
		<?php
		$css = '';

		// IF IS INDEX PAGE
		if ($_SERVER['PHP_SELF'] == '/peak/dev/index.php') {
			// load critical css.
			$css = fopen("_css/index.css",'r');
			echo '<style>';
			echo fread($css,filesize("_css/index.css"));
			echo '</style>';
			fclose($css);
		}

		// IF IS CONTACT PAGE
		if ($_SERVER['PHP_SELF'] == '/peak/dev/contact.php') {
			// load critical css.
			$css = fopen("_css/contact.css",'r');
			echo '<style>';
			echo fread($css,filesize("_css/contact.css"));
			echo '</style>';
			fclose($css);
		}

		?>

		<!-- <link rel="stylesheet" href="_css/main.css" media="screen" title="Main Style Sheet"> -->

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

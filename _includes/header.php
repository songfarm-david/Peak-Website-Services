<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
	<head>
		<!-- Detects and modifies html class 'no-js' if JavaScript is enabled -->
		<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<?php echo $canon = ($_SERVER['PHP_SELF'] == "/index.php") ? "<link rel=\"canonical\" href=\"http://peakwebsites.ca\">\r" : ""; ?>
		<link rel="stylesheet" href="/peak/_css/main.css" media="screen" title="Main Style Sheet">
		<link href="https://fonts.googleapis.com/css?family=Passion+One:900|Signika" rel="stylesheet">
	</head>
	<body>
		<!--[if lt IE 8]>
				<script src="_js/vendor/html5shiv.js"></script>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<input type="hidden" name="php_self" value="<?php echo $_SERVER['PHP_SELF']; ?>">

		<header>
			<h1 class="hide"><?php echo $h1; ?></h1>
			<?php include_once('navigation.php') ?>
		</header>

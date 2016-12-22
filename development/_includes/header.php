<?php $activePage = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-us" class="no-js">
<!--<![endif]-->
	<head>
		<!-- Detects and modifies html class 'no-js' if JavaScript is enabled -->
		<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="en-us">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		<?php echo $canon = (!empty($canonical)) ? "<link rel=\"canonical\" href=\"" . $canonical . "\">\n" : ""; ?>
		<link rel="stylesheet" href="/peak/development/_css/main.css" media="screen" title="Main Style Sheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
</head>
	<body>
		<!--[if lt IE 8]>
				<script src="_js/vendor/html5shiv.js"></script>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<?php
		// $nav;
		// if ($_SERVER['PHP_SELF'] != "index.php") { // || $_SERVER['PHP_SELF'] == "/website-services/index.php")
		// 	$nav = "nav-visible";
		// } else {
		// 	$nav = null;
		// 	// echo $_SERVER['PHP_SELF'];
		// }
		?>

		<header>
			<h1 class="hide"><?php echo $h1; ?></h1>
			<?php include_once('navigation.php') ?>
		</header>

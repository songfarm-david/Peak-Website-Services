<!doctype html>
<html lang="en-us" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $canon = (!empty($canonical)) ? "<link rel=\"canonical\" href=\"" . $canonical . "\">\n" : ""; ?>
		<!-- Detects and modifies html class 'no-js' if JavaScript is enabled -->
		<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

		<!-- conditional & critical CSS here -->

		<link rel="stylesheet" href="/peak/dev/_css/main.css" media="screen" title="Main Style Sheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
	</head>
	<body>
		<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

		<header>
			<h1 class="hide"><?php echo $h1; ?></h1>
			<?php include_once('navigation.php') ?>
		</header>

		<script type="text/javascript">
		console.log("butters");

		</script>

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
		<title>Hollis Wealth</title>
		<meta name="description" content="">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="_css/trans.css" media="screen" title="Main Style Sheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Poppins:300" rel="stylesheet">
	</head>
	<body>
		<!--[if lt IE 8]>
				<script src="_js/vendor/html5shiv.js"></script>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- main site header -->
		<h1 class="hide">Hollis Wealth</h1>

		<header id="site-header" class="container">
			<div class="row">
				<div class="col col-7">
					<!-- Logo Here -->
					<div id="logo">
						<a href="index.php"><img class="logo" src="_assets/temp-logo.png" alt="" height="90" /></a>
					</div>
				</div>
				<div class="col col-5">
					<!-- CTA -->
					<div id="call-now" class="float-right">
						<a href="#" class="phone"><span class="fa fa-phone" aria-hidden="true"></span>&nbsp;(012)-345-6789</a>
					</div>
					<?php include_once('_includes/navigation.php') ?>
				</div>
			</div>
		</header>

		<!-- preloader gif -->
		<div id="preloader"></div>

		<!-- help ticket -->
		<article id="ticket-newsletter">
			<span id="ticket" class="fa fa-question-circle-o" aria-hidden="true"></span>
			<h3>Register for our weekly reports</h3>
			<p>
				Register to receive our weekly expert financial reports for cutting-edge financial advise and data-driven projections.<br>
			</p>
			<form class="" action="index.html" method="post">
				<input type="text" name="name" value="" placeholder="Name">
				<input type="email" name="email" value="" placeholder="Email">
				<input type="submit" name="name" value="Send">
			</form>
		</article>

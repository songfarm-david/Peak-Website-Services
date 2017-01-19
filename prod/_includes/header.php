<!doctype html><html lang="en-us" class="no-js"><head><meta charset="utf-8"><title><?php echo $title; ?></title><meta name="description" content="<?php echo $description; ?>"><meta name="viewport" content="width=device-width,initial-scale=1"> <?php echo $canon = (!empty($canonical)) ? "<link rel=\"canonical\" href=\"" . $canonical . "\">\n" : ""; ?> <script>!function(e){e.className=e.className.replace(/\bno-js\b/,"js")}(document.documentElement)</script><script type="text/javascript">var WebFontConfig={google:{families:["Raleway:300,400,700,900"]},timeout:2e3};!function(){var t=document.createElement("script");t.src=("https:"==document.location.protocol?"https":"http")+"://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js",t.async="true",document.head.appendChild(t)}()</script> <?php
		$css;

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

		?> <script src="https://www.google.com/recaptcha/api.js" async defer="defer"></script></head><body><!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]--> <?php //echo $_SERVER['PHP_SELF'] ?> <header><h1 class="hide"><?php echo $h1; ?></h1> <?php include_once('navigation.php') ?> </header></body></html>
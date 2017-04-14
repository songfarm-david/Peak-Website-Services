<!-- jQuery CDN with Local Fallback -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../node_modules/jquery/dist/jquery.min.js" async defer><\/script>')</script>

<!-- Font Awesome -->
<script src="https://use.fontawesome.com/ff486a1dc9.js"></script>

<!-- modernizr-custom -->
<script type="text/javascript" src="/_js/helper/modernizr-custom.js" async defer></script>

<!-- custom scripts -->
<script type="text/javascript" src="/_js/helper/bs-collapse.js"></script>
<script type="text/javascript" src="/_js/script.js" async defer></script>

<!-- If current page == contact page, load contact form javascript -->
<?php	echo $script = $_SERVER['PHP_SELF'] == '/contact.php' ? "<script src=\"_js/contact-form.js\"></script>" : "" ;?>

<!-- NOTE: for Grunt Live Reload Server -->
<script src="//localhost:35729/livereload.js"></script>

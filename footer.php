<footer>
	<div class="wrapper">
		<?php dynamic_sidebar('footer-widget-area'); ?>
	</div>
	<div id="footer-copyright">
		<h6>Hotaru Theme by <a href="http://hellomkreyes.com" target="_blank">M.K. Reyes</a> - Powered By <a href="http://wordpress.org">WordPress</a></h6>
	</div>
	<a href="#pageTop" class="smoothScroll"><div class="footer-button-container">
		<i class="fa fa-chevron-up"></i>
	</div></a>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
<footer class="footer">
  <div class="footer__wrapper">
	  <ul class="footer__areaContainer">
	  	<li class="footer__logoContainer"> <h3 class="footer__logo"><?php bloginfo('name') ?></h3> </li>
	  	<?php dynamic_sidebar('footer-menu') ?>
	  </ul>
  </div>
  <div class="footer__subFooterContainer">
  	<p class="footer__copyright"> Copyright <?php echo date('Y')?> - <?php echo bloginfo("title")?></p>

	  <div class="footer__mediaContainer">
	  	<?php wp_nav_menu( array(
        'container' => 'false',
        'menu_class' => 'footer__socialNavContainer clearfix',
        'theme_location' => 'footer_social_nav'
      )); ?>
	  </div>
  </div>
	  <a href="#header" class="footer__linkToTop">Top</a>
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
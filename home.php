<?php //index.php is the last resort template, if no other templates match ?>

<div class="blogMain">
<?php include(TEMPLATEPATH . '/header-insidePages.php'); ?>
  <div class="blogMain__wrapper">
    		<?php get_template_part( 'loop', 'index' );	?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
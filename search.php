<div class="searchPage">
	<?php include(TEMPLATEPATH . '/header-insidePages.php'); ?>
	<div class="searchPage__wrapper">
			<?php if ( have_posts() ) : ?>
		<div class="searchPage__heading">
				<h1>Search Results For:<span><?php echo get_search_query(); ?></span></h1>
				<?php get_template_part( 'loop', 'search' ); ?>
		</div>
			<?php else : ?>
			<div class="searchPage__heading">
				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				<?php get_search_form(); ?>
			</div>
			<?php endif; ?>

		<?php get_sidebar(); ?>

	</div><!-- /.wrapper -->
</div> <!-- /.searchPage -->

<?php get_footer(); ?>

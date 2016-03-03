<?php //index.php is the last resort template, if no other templates match ?>

<div class="heroImage" style="background-image: url('<?php echo hackeryou_get_thumbnail_url( $post );?>')">
		<?php get_header(); ?>
  <div class="heroImage__wrapper">
			
			<div class="heroImage__heroText">
				<h6><?php bloginfo("description"); ?></h6>
				<h2>Go boldly, venture forth</h2>
				
			</div>			
			<div class="heroImage__heroVideo">
				<button class="heroImage__playButton">
				</button>
			<div class="heroImage__videoDescription">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In deserunt nesciunt magni.</p>
			</div>
  </div> <!-- /.container -->
</div> <!-- /.heroImage -->

 <div class="">
 		
 </div> <!--/.content -->
<?php get_footer(); ?>
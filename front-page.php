<?php //index.php is the last resort template, if no other templates match ?>

<div class="heroImage" style="background-image: url('<?php echo hackeryou_get_thumbnail_url( $post );?>')">
		<?php get_header(); ?>
  <div class="heroImage__wrapper">
			
			<div class="heroImage__heroText">
				<h6><?php bloginfo("description"); ?></h6>
				<?php dynamic_sidebar( 'hero-text' ); ?>
				
			</div>			
			<div class="heroImage__heroVideo">
				<button class="heroImage__playButton">
				</button>
			<div class="heroImage__videoDescription">
					<p class="videoText"><?php the_field('video_description'); ?></p>
			</div>
  </div> <!-- /.container -->
</div> <!-- /.wrapper -->
</div>
  	<!-- **********************************************
  								Quote Area
  		************************************************-->
 <div class="quoteArea">	
		<div class="quoteArea__wrapper">
	 	<div class="quoteArea__textContainer">
	 		<h2 class="quoteArea__heading"><?php the_field('about_header'); ?></h2>
	 		<p class="quoteArea__text"><?php the_field('about_text'); ?></p>
	 	</div>
	 	<div class="quoteArea__imageContainer">
		 	<?php 
		 		$signatureImage = get_field('about_signature');
		 		if( !empty($signatureImage) ): ?>
		 		<img src="<?php echo $signatureImage['url']; ?>" alt="<?php echo $signatureImage['alt']; ?>" />
					<?php endif; ?>
	 	</div>
	 </div> <!--/.wrapper -->
 </div><!--/.quoteArea -->
 <div class="instagramArea">
 	<div class="instagramArea__wrapper">
 		<div class="instagramArea__textContainer">
 			<h2><?php the_field('instagram_hashtag') ?></h2>
 			<h4><?php the_field('instagram_subtitle') ?></h4>
 			<p><?php the_field('instagram_description') ?></p>
 		</div> <!-- ./textContainer -->
 		<div class="instagramArea__instagramFeedContainer">
 		<?php echo wdi_feed(array('id'=>'1')); ?>
 		</div>
 	</div> <!-- ./wrapper -->
 </div> <!-- ./instagramArea -->
  	<!-- **********************************************
  								BLOG AREA
  		************************************************-->
 <div class="blogArea">
		<div class="blogArea__titleContainer">
			<h6 class="blogArea__header">popular foundry tours</h6>
		</div>
			<?php get_template_part( 'loop', 'travel' );	?>
 </div>
  	<!-- **********************************************
 								NEWSLETTER AREA
 		************************************************-->
 <div class="newsletterArea">
 	<div class="newsletterArea__wrapper">
			<h2 class="newsletterArea__heading"><?php the_field('newsletter_heading') ?></h2>
			<h4 class="newsletterArea__subheading"> <?php the_field('newsletter_subheading') ?></h4>
			<?php the_field("newsletter_form"); ?>
 	</div> <!--./wrapper -->
 </div> <!-- ./newsletter area -->
<?php get_footer(); ?>
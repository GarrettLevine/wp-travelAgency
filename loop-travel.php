<?php 
				$travelPostQuery = new WP_Query( array(
						'posts_per_page' => 3,
						'category' => 'travel',
						'order' => 'ASC'
					));
			 ?>
			<?php // Start the loop ?>
					<?php if ( $travelPostQuery->have_posts() ) : ?>
		  	<?php while ($travelPostQuery->have_posts()) : $travelPostQuery->the_post(); ?>
		         
		  		<div class="blogArea__blogPost img-holder" data-image="<?php echo hackeryou_get_thumbnail_url( $post ); ?>" data-width="1" data-height="1">
					 		<div class="blogPost__textContainer">
					 				<h3 class="blogPost__heading"><?php the_title() ?></h3>
					 				<p class="blogPost__description"><?php the_field('subtitle')?></p>
					 		</div>
					 		<a <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute());?>">Tour</a>
			 	  </div>
			 	</div>

			 	</div>
			 	<?php endwhile; ?>	 	​
    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
        [stuff that happens if there aren't any posts]
  <?php endif; ?>
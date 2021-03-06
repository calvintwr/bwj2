<?php if (have_posts()): while (have_posts()) : the_post(); ?>
   <div class="img-holder col-sm-4 col-xs-12 ">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		
			<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		
		
		<!-- post details -->
	<!--	<span class="date"><?php /*the_time('F j, Y'); */?> <?php /*// the_time('g:i a'); */?></span>
		<span class="author"><?php /*_e( 'Published by', 'html5blank' ); */?> <?php /*the_author_posts_link(); */?></span>-->


	</article>
	<!-- /article -->
</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2 style="text-align:center;"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

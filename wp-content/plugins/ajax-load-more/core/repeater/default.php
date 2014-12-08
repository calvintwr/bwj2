<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post title -->
		<h2 class="title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		
		<!-- /post thumbnail -->
	
		<p class="description"> <?php the_tags( '', ', ', '' ); ?>  — <?php the_time('j F, Y'); ?></p>
		<!-- /post title -->
			<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		
		
		<!-- post content -->
		<?php the_content(); // Dynamic Content ?>
		<!-- /post content -->
    
    	<!-- signature -->
    	<?php echo do_shortcode("[contentblock id=signature]") ?>
		
		<!-- post details -->
	<!--	<span class="date"><?php /*the_time('F j, Y'); */?> <?php /*// the_time('g:i a'); */?></span>
		<span class="author"><?php /*_e( 'Published by', 'html5blank' ); */?> <?php /*the_author_posts_link(); */?></span>-->
		<?php
		
	 do_action("mashshare"); 
		
?>

		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->

		<?php // html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

	<?php if (current_user_can( 'manage_options' )) { ?> | 	<?php } edit_post_link(); ?>
	</article>
	<!-- /article -->
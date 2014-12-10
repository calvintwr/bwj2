<?php
/*
Template Name: Thoughtpost Page Template
*/
?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="blog" class="container main text-center">

			<?php

			global $post;
			$myposts = get_posts(
				array(
					'numberposts'=>1,
					'category_name' => 'thoughtposts'
				)
			);
			if ($myposts) :
			    foreach ($myposts as $post) :
			        setup_postdata($post);
			?>
					<!-- first article -->
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
					    <?php do_action("mashshare"); ?>

					    <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					    <!-- /post details -->

					    <?php // html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

					<?php if (current_user_can( 'manage_options' )) { ?> |  <?php } edit_post_link(); ?>

					</article>
					<!-- /article -->
			<?php
				endforeach;
				echo do_shortcode('[ajax_load_more post_type="post" category="thoughtposts" offset="1" posts_per_page="3" scroll="false" pause="true" button_label="Load more"]'); 
				
			?>

			<!-- activate the load at page load -->
			<script>
			jQuery(function($) {
				$('#load-more').click();
			});
			</script>

			<?php 
			else: 
			?>

				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

			<?php 
			endif; 
			?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

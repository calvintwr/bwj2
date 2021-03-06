<?php get_header(); ?>

<div class="container-fluid content-outer-wrap">
	<div class="row">

		<main role="main" class="main-content col-sm-8">
		<!-- section -->
		<section id="blog" class="main text-center">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<h2 class="title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->

				<!-- post details -->
			<!--	<span class="date"><?php /*the_time('F j, Y'); */?> <?php /*the_time('g:i a'); */?></span>
				<span class="author"><?php /*_e( 'Published by', 'html5blank' ); */?> <?php /*the_author_posts_link(); */?></span>
				<span class="comments"><?php /*if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); */?></span>-->
				<!-- /post details -->
				
				<!-- /post thumbnail -->
		
			<p class="description"> <?php the_tags( '', ', ', '' ); ?>  — <?php the_time('j F, Y'); ?></p>
			<!-- /post title -->

				<?php the_content(); // Dynamic Content ?>
				<?php echo do_shortcode("[contentblock id=signature]") ?>
				<br>	<?php
			
		 do_action("mashshare"); 
			
	?><br>

			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->

			<?php // html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php if (current_user_can( 'manage_options' )) { ?> | 	<?php } edit_post_link(); ?>
	 	

				<?php /*the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end */?><!--

				<p><?php /*_e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas */?></p>

				<p><?php /*_e( 'This post was written by ', 'html5blank' ); the_author(); */?></p>

				--><?php /*edit_post_link(); // Always handy to have Edit Post Links available */?>

				<?php comments_template(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>
		
		</section>
		<!-- /section -->
		</main>

		<?php get_sidebar(); ?>

	</div><!-- row -->
</div><!-- container -->

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="container-fluid content-outer-wrap">
	<div class="row">

		<main role="main" class="main-content col-sm-8">
			<!-- section -->
			<section id="page" class="main text-center">

				<h1><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					<?php //comments_template( '', true ); // Remove if you don't want comments ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

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

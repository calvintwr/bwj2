<?php get_header(); ?>

	<main role="main" class="container">
		<!-- section -->
		<section>
			<div class="row thumbnail-holder text-left">
		<!--	<h1><?php /*_e( 'Categories for ', 'html5blank' ); single_cat_title(); */?></h1>
-->
			<?php get_template_part('loop-category'); ?>
				<div class="clearfix"></div>
           </div>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php// get_sidebar(); ?>

<?php get_footer(); ?>

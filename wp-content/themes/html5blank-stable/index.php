<?php get_header(); ?>

<div class="container-fluid content-outer-wrap">
	<div class="row">
		<main role="main" class="col-sm-8">
			<!-- section -->
			<section id="blog" class="main text-center">

				<?php get_template_part('loop'); ?>

				<?php //get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>

		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
	
<?php get_footer(); ?>

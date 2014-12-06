<?php get_header(); ?>

<?php if(is_front_page() || is_home()): ?>
<section id="banner" class="container-fluid">
	<div class="banner-holder container text-center">
	
		<?php echo do_shortcode("[epsshortcode id=33]"); ?>
		
		
		<!--<img class="banner hidden-xs" src="<?php /*echo get_template_directory_uri(); */?>/img/banner.png" alt="Banner" width="1200" height="500">
	
		<div class="row banner-info">
			<div class="frame">
				<h2>TITLE WITH FOUR WORDS</h2>

				<p class="description">Here's a one sentence sentence</p>
				<a class="button" href="#">Read More</a>
			</div>
		</div>
		<div class="row banner-nav-holder">
			<ul class="banner-nav">
				<li>&nbsp;</li>
				<li class="active">&nbsp;</li>
				<li>&nbsp;</li>
				<li>&nbsp;</li>
			</ul>
		</div>-->
	</div>
</section>
<?php endif; ?>

	<main role="main">
		<!-- section -->
		<section id="blog" class="container main text-center">

			<h1><?php //_e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

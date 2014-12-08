<?php get_header(); ?>

<?php if(is_front_page() || is_home()): ?>
<section id="banner" class="container-fluid">
	<div class="banner-holder container text-center" style="opacity: 0">
	
		<?php echo do_shortcode("[epsshortcode id=36]"); ?>
		
		
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
	<script>
	(function($) {
		var $readMoreATags = $('.da-link');
		$readMoreATags.wrapInner('<div class="da-link-div"></div>');

		var $heightTargets = $('.da-slider');
		$('.da-img').each(function() { $heightTargets.push(this) });

		//get the parameters
		var styleStr = $('.banner-holder>div').attr('style');
		var tempDiv = document.createElement('div');
		tempDiv.style.cssText = styleStr;
		var $tempDiv = $(tempDiv);
		var heightParam = parseInt($tempDiv.css('max-height'), 10);
		var widthParam = parseInt($tempDiv.css('max-width'), 10);

		delete $tempDiv, $tempDiv;

		var AR = widthParam/heightParam;

		var widthBreakPoint = 640; // the width at which to start cropping
		var minHeight = widthBreakPoint/AR;
		$heightTargets.css('min-height', minHeight + 'px');

		function sizing() {
			var w = $(window).width();
			var h = Math.floor(w / AR);

			if(w > widthBreakPoint) {
				$heightTargets.css('height', h + 'px');
				$('.da-img').css('left', '0px');
			} else {
				$heightTargets.css('height', minHeight + 'px');
				$('.da-img').css('left', (w - widthBreakPoint)/2 + 'px');
			}
			
		}
		sizing();

		//bind some events
		$(window).load(function() {
			$('.banner-holder').animate({'opacity': 1});
			return sizing();
		}).resize(function() {
			return sizing();
		});
	})(jQuery);
	</script>	
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

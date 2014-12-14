<?php get_header(); ?>

<?php if(is_front_page() || is_home()): ?>
<section id="banner" class="container-fluid">
	<div class="banner-holder container text-center" style="opacity: 0">
	
		<?php echo do_shortcode("[epsshortcode id=36]"); ?>
		
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
<div class="container-fluid">
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

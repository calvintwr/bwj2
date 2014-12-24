<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	
	<section id="header" class="text-center container-fluid max-width-wrap">
    	<header class="row">
            <div class="logo-location-wrap">
        		<a href="<?php bloginfo('url') ?>" id="logo">
                  <img class="img-responsive" alt="BellyWellyJelly" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="341" height="76"></a>
          
        		<div class="tag-line">
                    is in <img src="<?php echo get_template_directory_uri(); ?>/img/globe-icon.png" height="20" width="17"> <span class="highlight">SINGAPORE</span>
                </div>
            </div>
    		<nav id="mainmenu">
    				<?php html5blank_nav(); ?>
    		</nav>
    		<?php
    		if(is_category()):
    		?>
    		<div id="secondary-nav" class="row">
                <div class="col-sm-4 text-uppercase text-right"><h4>Blog Categories</h4></div>
            <nav id="submenu" class="col-sm-8 text-left text-uppercase">
                <?php wp_nav_menu('extra-menu'); ?>
            </nav></div>
    		<?php endif; ?>
    	</header>
    </section>

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

    <div class="max-width-wrap">

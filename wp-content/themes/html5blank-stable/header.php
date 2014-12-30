<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
        <?php echo meta_data_generator(); ?>

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
            <div class="stickyTopPlaceHolder"></div>
            <div class="stickyTop">
                <div class="logo-location-wrap">
            		<a href="<?php bloginfo('url') ?>" id="logo">
                      <img class="img-responsive" alt="BellyWellyJelly" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="341" height="76">
                    </a>
                    <span class="glyphicon glyphicon-align-justify" id="menuToggle" style="display:none"></span>
              
            		<div class="tag-line">
                        is in <img src="<?php echo get_template_directory_uri(); ?>/img/globe-icon.png" height="20" width="17">
                        <span class="highlight"><?php echo get_option('i_am_in'); ?></span>
                    </div>
                </div>


        		<nav id="mainmenu">
        				<?php html5blank_nav(); ?>
        		</nav>
            </div>
            <!-- sticky nav script -->
            <script>
            jQuery(function($) {
                var $o = $('.stickyTop'),
                    $op = $('.stickyTopPlaceHolder'),
                    $menuToggle = $('#menuToggle');

                $o.hover(function() {
                  if ($menuToggle.hasClass('toggled') && !$o.hasClass('translucent')) { return false; }
                  $o.attr('data-attr-opac', $o.css('opacity'));
                  $o.css('opacity', 1);
                }, function() {
                  if ($menuToggle.hasClass('toggled') && !$o.hasClass('translucent')) { return false; }
                  $o.css('opacity', $o.attr('data-attr-opac'));
                });

                var tH = 100,
                    h = 46,
                    $logoWrap = $('.logo-location-wrap'),
                    $tagLine = $('.tag-line');

                $(window).scroll(function (e) { toggleNav.trigger(); });

                var timeout,
                    $mm = $('#mainmenu');

                $(window).resize(function(e) { 

                    clearTimeout(timeout);
                    timeout = setTimeout(function() {
                        if ($menuToggle.hasClass('toggled')) { return toggleNav.collapse(); }
                        return adjustHeight();
                    }, 100);

                });

                var toggleNav = {
                    timeout: "",
                    trigger: function() {
                        var scroll = $(window).scrollTop(),
                            self = this;

                        if(scroll > tH) {

                            if ($o.hasClass('translucent')) { return false; }

                            clearTimeout(this.timeout);
                            setTimeout(function() {
                                return self.collapse();
                            }, 200)
                            
                        } else {

                            if (!$o.hasClass('translucent') && !$menuToggle.hasClass('toggled')) { return false; }

                            clearTimeout(this.timeout);
                            setTimeout(function() {
                                return self.restore();
                            }, 200)

                        }
                    },
                    collapse: function() {
                        if (!$o.hasClass('translucent')) {
                            $o.addClass('translucent').css('height', h + 'px').css('opacity','0.8');
                            $menuToggle.show().removeClass('toggled');
                            $logoWrap
                                .attr('data-attr-pad', $('.logo-location-wrap').css('padding'))
                                .css('padding', '5px 0px');

                            if (!$tagLine.attr('data-attr-height')) { 
                                $tagLine.attr('data-attr-height', $('.tag-line').height());
                            }
                            $tagLine
                                .animate({
                                    height: "0px"
                                }, 200);
                            return true;
                        }
                        return false;
                    },
                    restore: function(menuTriggered) {

                        if ($o.hasClass('translucent') || $menuToggle.hasClass('toggled')) {
                            $o.removeClass('translucent').css('opacity','1');
                            $('.logo-location-wrap').css('padding', $('.logo-location-wrap').attr('data-attr-pad'));

                            if (!menuTriggered) { 
                                $menuToggle.hide(); 

                                $tagLine
                                    .hide()
                                    .css('height', $('.tag-line').attr('data-attr-height'))
                                    .fadeIn('200', function() {
                                        adjustHeight();
                                    });

                            } else {
                                adjustHeight();
                            }
                            return true;
                        }
                        return false;
                    }
                }

                function adjustHeight() {
                    //the trick is to create an "overflow situation".
                    //then this script detects the overflow and restores the menu.
                    //this way the height can be responsively maintained.

                    if ($o.hasClass('translucent')) { return false; }
                    var element = $('.stickyTop')[0];
                    if (element.offsetHeight < element.scrollHeight){
                       $o.css('height', element.scrollHeight);
                       $op.css('height', element.scrollHeight);
                    } else {
                        $o.removeAttr('style');
                        $op.removeAttr('style');
                    }
                }
                adjustHeight();

                //bind the menu button
                $('#menuToggle').click(function() {
                    if ($o.hasClass('translucent')) { 
                        $(this).addClass('toggled');
                        return toggleNav.restore(true); 
                    }
                    $(this).removeClass('toggled');
                    return toggleNav.collapse();
                });
            });
            </script>

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

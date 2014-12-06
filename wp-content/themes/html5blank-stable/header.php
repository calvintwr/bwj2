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

	
	<section id="header" class="text-center container">
	<header class="row">
		<a href="#" id="logo"><img class="img-responsive" alt="BellyWellyJelly" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="341" height="76"></a><br><br>
		<span class="tag-line">is in <img src="<?php echo get_template_directory_uri(); ?>/img/globe-icon.png" height="20" width="17"> <span class="highlight">SINGAPORE</span></span>
		<br><br><br>
		<nav id="mainmenu">
				<?php html5blank_nav(); ?>
		</nav>
	</header>
</section>

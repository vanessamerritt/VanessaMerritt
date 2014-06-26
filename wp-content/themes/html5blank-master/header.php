<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	<!-- title -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<!-- analytics -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<!-- favicon -->
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="apple-touch-icon-precomposed">
		<!-- compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- description -->
		<meta name="description" content="<?php bloginfo('description'); ?>">
			<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

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

		<!-- wrapper -->
		

			<!-- header -->
			<header class="header clear" role="banner">

			<div class="wrapper">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							
							<img src="<?php echo get_template_directory_uri(); ?>/img/vanessaLogo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					<!-- widgets -->
					<div class="header-widgets">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
					</div>
					<!-- /widgets -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					</div>

			</header>
			<!-- /header -->

			<div class="wrapper">

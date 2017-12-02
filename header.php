<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">

		<script src='<? echo get_template_directory_uri();?>/js/external_resources/vue.js'></script>
		<script src='<? echo get_template_directory_uri();?>/js/external_resources/jquery-3.2.1.min.js'></script>

		<!-- onepage-scroll -->
		<script src='<? echo get_template_directory_uri();?>/js/external_resources/jquery.onepage-scroll.js'></script>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/external_resources/onepage-scroll.css">

		<!-- bg switcher -->
		<script src="<?php echo get_template_directory_uri();?>/js/external_resources/jquery.bgswitcher.js"></script>

		<!-- anime.js -->
		<script src="<?php echo get_template_directory_uri();?>/js/external_resources/anime.min.js"></script>

		<!-- flex slider-->
		<script src='<? echo get_template_directory_uri();?>/js/external_resources/jquery.flexslider.js'></script>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/external_resources/flexslider/flexslider.css">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
		</header>

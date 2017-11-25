<?php get_header(); ?>

<main id="main" class="site-main" role="main">
	<div id="topPage">
		<div id="initLogo">
			<img src='<?php echo get_template_directory_uri();?>/images/main/logo.jpg'></img>
		</div>
		<div id="initTitle" hidden>
			<h3 hidden>早稲田大学和太鼓サークル</h3>
			<h1 hidden>魁響</h1>
		</div>
	</div>

	<div id="pinContainer">
		<div id="slideContainer">
			<div class="panel">
				<?php get_template_part('pages/aboutUs');?>
			</div>
			<div class="panel">
				second page
			</div>
			<div class="panel">
				third page
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
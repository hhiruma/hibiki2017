<?php get_header(); ?>


<main id="main" class="site-main" role="main">
	<?php get_template_part('pages/top'); ?>

	<div id="pinContainer">
		<div id="slideContainer">
			<div class="panel">
				<?php get_template_part('pages/aboutUs');?>
			</div>
			<div class="panel">
				<?php get_template_part('pages/stages');?>
			</div>
			<div class="panel">
				<?php get_template_part('pages/contact');?>
			</div>
		</div>
	</div>

	<?php get_template_part('pages/sidebar');?>
</main>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
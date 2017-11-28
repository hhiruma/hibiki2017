<?php get_header(); ?>

<main class="site-main" role="main">
	<div id="container">
		<section id="topContainer">
			<?php get_template_part('pages/top'); ?>
		</section>
		<section id="aboutUsContainer">
			<?php get_template_part('pages/aboutUs');?>
		</section>
		<section id="stagesContainer">
			<?php get_template_part('pages/stages');?>
		</section>
		<section id="contactContainer">
			<?php get_template_part('pages/contact');?>
		</section>

		<?php get_template_part('pages/sidebar');?>
	</div>
</main>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
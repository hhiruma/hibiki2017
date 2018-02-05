<?php get_header(); ?>

<main class="site-main" role="main">
	<div id="container">
		<section id="topContainer">
			<?php get_template_part('pages/top'); ?>
		</section>
		<section>
			<?php get_template_part('pages/aboutUs');?>
		</section>
		<section>
			<?php get_template_part('pages/stages');?>
		</section>
		<!-- has to fix post number -->
		<?php if (get_post_status(224) == 'publish'): ?>
			<section>
				<?php get_template_part('pages/newComers');?>
			</section>
		<?php endif; ?>
		<section>
			<?php get_template_part('pages/contact');?>
		</section>

	</div>
	<?php get_template_part('pages/sidebar');?>
</main>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
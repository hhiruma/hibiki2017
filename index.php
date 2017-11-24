<?php get_header(); ?>

<?php get_template_part('original/sidebar'); ?>

<main id="main" class="site-main" role="main">
	<?php if (is_front_page()) : ?>

	<?php endif ?>
</main>

<?php get_footer(); ?>

<script type="text/javascript">
	let mainW = $('#main');
	$(window).resize(function(){
		let winW = $(window).width();
		if(winW < 700){
			$('#sideBar').attr('hidden', 'hidden');
			$('#miniSideBar').removeAttr('hidden');
		} else {
			$('#sideBar').removeAttr('hidden');
			$('#miniSideBar').attr('hidden', 'hidden');
		}
	});
</script>
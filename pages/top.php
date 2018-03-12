<div id="topPage">
    <div id="initLogoContainer">
        <img src='<?php echo get_template_directory_uri();?>/images/main/logo.jpg'></img>
	</div>

	<img id="topLogo" src="<?php echo get_template_directory_uri();?>/images/main/topLogo.png" hidden><br>


	<div hidden id="topPageDownArrow" onclick="scrollToPage(1);" style="z-index: 900;">
		<div hidden style="font-size: 11px; background: rgba(0,0,0,0.2); border-radius: 5px">
			スクロールしてください
		</div>
		<i hidden class="fas fa-long-arrow-alt-down " style="cursor: pointer; opacity: 0"></i>
	</div>

	<?php if(get_post_status(224) == 'publish'): ?>
		<div hidden id="topPageNewComersVideoContainer">
			<?php
				//have to edit post id
				$post = get_post(224);
				$post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
			?>
			<div id="topPageNewComersVideoTitle">
				☆魁響　新歓PV
			</div>
			<div id="topPageNewComersVideo">
				<iframe width="100%" height="100%" src="<?php echo $post_content?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	<?php endif; ?>
</div>

<?php
	$imgUrlArr = array();
	$baseUrl = plugin_dir_path(__FILE__).'../images/main/bg/';
	for($fileName = 1; ; $fileName++):
		// has to fix to be able to do aginst any type of image
		$filePathChecker = $baseUrl.$fileName.'.jpg';
		$filePath = get_template_directory_uri().'/images/main/bg/'.$fileName.'.jpg';
		if(file_exists($filePathChecker)):
			$imgUrlArr[] = $filePath;
		else:
			break;
		endif;
    endfor;

	$jsImgArr = json_encode($imgUrlArr);
?>

<script>
    const imgUrlArr = <?php echo $jsImgArr; ?>;
</script>

<script src="<?php echo get_template_directory_uri();?>/js/topPage.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/topPage.css">
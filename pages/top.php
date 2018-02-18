<div id="topPage">
    <div id="initLogoContainer">
        <img src='<?php echo get_template_directory_uri();?>/images/main/logo.jpg'></img>
    </div>
    <div id="initTitle" hidden>
		<img id="topLogo" src="<?php echo get_template_directory_uri();?>/images/main/topLogo.png" hidden><br>
	</div>

	<div id="nextStageMiniContainer" hidden>
		<?php
			//have to edit post id
			$post = get_post(181);
			$post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
			echo $post_content;
		?>
		<span id="nextStageInfoLinker" onclick="scrollToPage(2)">詳細<span>
	</div>

	<div id="topPageDownArrow" hidden>
		<i class="fa fa-chevron-down" aria-hidden="true" onclick="$('#container').moveDown();" style="cursor: pointer"></i>
	</div>
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
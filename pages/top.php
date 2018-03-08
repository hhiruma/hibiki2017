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
<div id="topPage">
    <div id="initLogo">
        <img src='<?php echo get_template_directory_uri();?>/images/main/logo.jpg'></img>
    </div>
    <div class="scrollerBottom">
        <a href="#pinContainer" class="scrollerForTop">
            <i class="fa fa-caret-down" aria-hidden="true"></i>
        </a>
    </div>
    <div id="initTitle" hidden>
        <h3 hidden>早稲田大学和太鼓サークル</h3>
        <h1 hidden>魁響</h1>
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

<script src="<?php echo get_template_directory_uri();?>/js/top.js"></script>
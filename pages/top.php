<div id="topPage">
    <div id="initLogoContainer">
        <img src='<?php echo get_template_directory_uri();?>/images/main/logo.jpg'></img>
    </div>
    <div id="initTitle" hidden>
        <h3 hidden>早稲田大学和太鼓サークル</h3>
        <h1 hidden>魁響</h1>
	</div>
	<div class="twitterWidget" hidden>
		<a class="twitter-timeline"  href="https://twitter.com/sakigake_hibiki" data-widget-id="354643685218066432" data-width="200" data-height="300" data-chrome="noheader nofooter" data-aria-polite="assertive">Twitter</a>
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

<script> !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script src="<?php echo get_template_directory_uri();?>/js/top.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/topPage.css">
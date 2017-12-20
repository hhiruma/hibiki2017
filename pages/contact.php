<div id="contactContainer" style="background-image:url('<?php echo get_template_directory_uri();?>/images/contact/bg.png')">
    <div id="formContainer">
        <div id="contactTitle">
            <h1>CONTACT</h1>
        </div>
        <div id="contactMain">
            description
            <hr>
            <form>
                <table>
                    <tr>
                        <td><span> お名前 </span></td>
                        <td><input type="text"></input></td>
                    </tr>
                    <tr>
                        <td><span> ご連絡先（メールアドレス） </span></td>
                        <td><input type="text"></input></td>
                    </tr>
                    <tr>
                        <td><span> ご用件 </span></td>
                        <td style="padding: 10px 0 0 0;"><textarea rows="4"></textarea></td>
                    </tr>
                    <tr>
                        <td><span> 日程 </span></td>
                        <td><input type="text"></input></td>
                    </tr>
                    <tr>
                        <td><span> 会場情報（会場名、会場住所等） </span></td>
                        <td><input type="text"></input></td>
                    </tr>
                    <tr>
                        <td><span> 備考 </span></td>
                        <td><textarea rows="4"></textarea></td>
                    </tr>
                </table>
                <input type="submit" value="フォーム送信"></input>
            </form>
        </div>
    </div>

    <div id="contactImg">
        <div style="width:100%; height: 100%; background-size: cover; background-repeat: none; background-position: center center;">
        </div>
    </div>

    <button class="playButton" hidden></button>
    <button class="resetButton" hidden></button>
</div>

<?php
	$contactImgUrlArr = array();
	$contactBaseUrl = plugin_dir_path(__FILE__).'../images/contact/slider/';
	for($fileName = 1; ; $fileName++):
		// has to fix to be able to do aginst any type of image
		$filePathChecker = $contactBaseUrl.$fileName.'.JPG';
		$filePath = get_template_directory_uri().'/images/contact/slider/'.$fileName.'.JPG';
		if(file_exists($filePathChecker)):
			$contactImgUrlArr[] = $filePath;
		else:
			break;
		endif;
    endfor;

	$contactJsImgArr = json_encode($contactImgUrlArr);
?>

<script>
    const contactImgUrlArr = <?php echo $contactJsImgArr; ?>;
</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/contactPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/contactPage.js"></script>
<div id="aboutUsContainer">
    <div id="aboutUsImg" class="flexslider">
            <ul class="slides">
                <li id="aboutUsSlides1">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <img id="aboutUsImg11" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide1/1.jpg">
                    <img id="aboutUsImg12" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide1/2.jpg">
                    <img id="aboutUsImg13" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide1/3.jpg">
                </li>
                <li id="aboutUsSlides2">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <img id="aboutUsImg21" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/1.jpg">
                    <img id="aboutUsImg22" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/2.jpg">
                    <img id="aboutUsImg23" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/3.jpg">
                    <img id="aboutUsImg24" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/4.jpg">
                </li>
                <li id="aboutUsSlides3">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <img id="aboutUsImg5" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide3/5.jpg">
                    <img id="aboutUsImg6" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide3/6.jpg">
                </li>
                <li id="aboutUsSlides4">
                    fourth slide
                </li>
            </ul>
    </div>
    <div id="aboutUsDesc">
        <div style="font-size: 1.5em; padding-bottom: 10px; font-weight: bold" >
            ABOUT US
        </div>
        <div id="aboutUsDescControlNav">
            <?php $aboutUsDescTitles = ['魁響とは？', '舞台について', '練習について', '各種イベントについて'];?>
            <?php for ($i = 0; $i<4; $i++): ?>
                <input id="aboutUsDescTitle<?php echo $i?>" type="radio" name="aboutUsDescSelectedTitle" hidden <?php if($i==0) echo checked?>>
                <label class="aboutUsDescControlNavEl" for="aboutUsDescTitle<?php echo $i?>" style="cursor: pointer" onclick="$('#aboutUsDesc .flexslider').data('flexslider').flexAnimate(<?php echo $i?>);" >
                    <?php echo $aboutUsDescTitles[$i];?>
                </label>
            <?php endfor;?>
        </div>
        <div class="flexslider">
            <ul class="slides">
                <li>
                    魁響とは？
                    <?php
                        // has to fix post number
                        $post = get_post(29);
                        $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
                        //echo $post_content;
                    ?>
                </li>
                <li>
                    舞台について
                </li>
                <li>
                    練習について
                </li>
                <li>
                    各種イベントについて
                </li>
            </ul>
        </div>
    </div>

</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/aboutUsPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/aboutUsPage.js"></script>
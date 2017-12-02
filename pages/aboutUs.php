<div id="aboutUsContainer">
    <div id="aboutUsImg" class="flexslider">
            <ul class="slides">
                <li id="aboutUsSlides1">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <img class="img1" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide1/1.jpg">
                    <img class="img2" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide1/2.jpg">
                </li>
                <li id="aboutUsSlides2">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <img class="img3" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/3.jpg">
                    <img class="img4" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/4.jpg">
                </li>
                <li id="aboutUsSlides3">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <img class="img5" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide3/5.jpg">
                    <img class="img6" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide3/6.jpg">
                </li>
            </ul>
    </div>
    <div id="aboutUsDesc">
        <h1>ABOUT US</h1>
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <?php
                        // has to fix post number
                        $post = get_post(29);
                        $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
                        echo $post_content;
                    ?>
                </li>
                <li>
                    second page
                </li>
                <li>
                    third page
                </li>
            </ul>
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/aboutUsPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/aboutUsPage.js"></script>
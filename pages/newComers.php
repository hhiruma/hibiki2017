<div id="newComersContainer">
    <div id="newComersBills" class="flexslider">
        <ul class="slides">
            <li>
                <img src="<?php echo get_template_directory_uri();?>/images/newComers/bill_front.png">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri();?>/images/newComers/bill_back.png">
            </li>
        </ul>
    </div>
    <div id="newComersDesc">
        <div style="font-size: 1.5em; padding-bottom: 10px; font-weight: bold">
            JOIN US
        </div>
        <?php
            // has to fix post number
            $post = get_post(224);
            $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
            echo $post_content;
        ?>
        <img id="sakura1" src="<?php echo get_template_directory_uri();?>/images/newComers/sakura.png">
        <img id="sakura2" src="<?php echo get_template_directory_uri();?>/images/newComers/sakura.png">
    </div>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/newComersPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/newComersPage.js"></script>
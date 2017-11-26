<div>
    <div>
    </div>
    <div>
    </div>
    <?php
        // has to fix post number
        $post = get_post(29);
        $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
        echo $post_content;
    ?>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/topPage.css">
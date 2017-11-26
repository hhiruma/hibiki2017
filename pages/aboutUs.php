<div>
</div>
<div>
<?php
    // has to fix post number
    $post = get_post(29);
    $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
    echo $post_content;
?>
</div>
<div class="scrollerTop">
    <a href="#main" class="scrollerForTop scrollUp">
        <i class="fa fa-caret-up" aria-hidden="true" style="color: red"></i>
    </a>
</div>
<div class="scrollerBottom">
    <a href="#stagesContainer">
        <i class="fa fa-caret-down" aria-hidden="true" style="color: red"></i>
    </a>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/topPage.css">
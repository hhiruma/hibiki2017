<div id="sidebar2Container">
    <div id="sidebar2Button">
        <i class="fas fa-chevron-circle-left"></i>
    </div>
    <div id="sidebar2Main">
        <div id="sidebar2Menu">
            <span>
                ページ一覧
            </span>
            <?php
                if(get_post_status(224) == 'publish'){
                    $pageList = ['TOP', 'ABOUT US', 'STAGES', 'JOIN US', 'CONTACT'];
                } else {
                    $pageList = ['TOP', 'ABOUT US', 'STAGES', 'CONTACT'];
                }
            ?>
            <?php foreach($pageList as $key => $page):?>
                <div class="sidebar2Elem hvr-underline-from-left" onclick="scrollToPage(<?php echo $key;?>);menuPlay.play();menuPlay.reverse();">
                    <?php echo $page?>
                </div>
            <?php endforeach ?>
        </div>
        <div id="sidebar2SNS">
            <a class="twitter-timeline"  href="https://twitter.com/sakigake_hibiki" data-widget-id="354643685218066432" data-width="200" data-height="1000" data-chrome="noheader nofooter" data-aria-polite="assertive">Twitter</a>
        </div>
    </div>
</div>

<script> !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/sidebar2Page.css">
<script src="<?php echo get_template_directory_uri();?>/js/sidebar2.js"></script>
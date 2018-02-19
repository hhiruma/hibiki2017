<div id="sidebarContainer">
    <div id="sidebar" hidden>
        <?php
            if(get_post_status(224) == 'publish'){
                $pageList = ['トップ', 'サークル情報', '舞台一覧', '新歓情報', 'お問い合わせ'];
            } else {
                $pageList = ['トップ', 'サークル情報', '舞台一覧', 'お問い合わせ'];
            }
        ?>
        <?php foreach($pageList as $key => $page):?>
            <!-- <div class="sidebarElem" onclick="scrollToPage(<?php //echo json_encode($key);?>)"> -->
            <div class="sidebarElem" onclick="scrollToPage(<?php echo $key;?>)">
                <?php echo $page?>
            </div>
        <?php endforeach ?>
    </div>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/sidebarPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/sidebar.js"></script>
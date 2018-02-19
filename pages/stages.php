<div id="stagesContainer">
    <h1 style="color: white;">舞台一覧</h1>
    <div id="stagesShowContainer">
        <div id="stagesShowTabContainer">
            <input id="tabTop" type="radio" name="stagePageTabYear" checked hidden>
            <label class="hvr-forward" for="tabTop" style="cursor: pointer" onclick="$('#stagesShowMainContainer .flexslider').data('flexslider').flexAnimate(0);">トップ</label>
            <template v-for="year in activeYears">
                <input :id="'tab'+year" type="radio" name="stagePageTabYear" hidden>
                <label @click="selectYear(year)" class="hvr-forward" :for="'tab'+year" style="cursor: pointer">{{ year }}年度</label>
            </template>
        </div>
        <div id="stagesShowMainContainer">
            <div class="flexslider">
                <ul class="slides">
                    <li id="stagesSlides1">
                        <?php
                            //have to edit post id
                            $post = get_post(16);
                            $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
                            echo $post_content;
                        ?>
                        <br>
                        <?php
                            //have to edit post id
                            $post = get_post(220);
                            $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
                            echo $post_content;
                        ?>
                    </li>
                    <li id="stagesSlides2">
                        <div class="stagesTopBar">
                            <div class="stagesSlides2Arrow" @click="slideBackTo(0)">
                                <i class="fas fa-arrow-circle-left"></i>
                            </div>
                            <div id="stagesSlides2YearTitle">
                                {{ selectedYear }}年度舞台
                            </div>
                        </div>
                        <div class="stagesThumbnailContainer">
                            <template v-for="postData in postsData" v-if="filterPostByDate(postData)">
                                <label for="stageSelectedButton">
                                    <div class="stageThumbnail hvr-grow" @click="selectPost(postData['title'])"
                                    :style="'background-image: url(' + postData['thumbUrl'] + ');' + bgImgStyle">
                                        <div class="stageThumbnailImg"
                                        :style="'background-image: url(' + postData['thumbUrl'] + ');' + bgImgStyle">
                                        </div>
                                        <div class="stageThumbnailTitle" style="position: absolute; bottom: 3px; text-align: center; width: 100%">
                                            {{ postData['title'] }}
                                        </div>
                                    </div>
                                </label>
                            </template>
                        </div>
                        <button id="stageSelectedButton" hidden>button</button>
                    </li>
                    <li id="stagesSlides3">
                        <div id="stagesShowMainContent">
                            <div id="stagesShowMainTopBar">
                                <div class="stagesSlides2Arrow" @click="slideBackTo(1)">
                                    <i class="fas fa-arrow-circle-left"></i>
                                </div>
                                <div id="stagesSlides3StageTitle">
                                    {{ selectedPostTitle }}
                                </div>
                            </div>
                            <template class="stageShowContentHtml" v-for="postData in postsData" v-if="postData['title'] === selectedPostTitle">
                                <div v-html="postData['content']"></div>
                            </template>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php
    //get stages data
    $stagePostsArgs = array('category_name'=>'Stages');
    $stagePosts = get_posts($stagePostsArgs);
    $stagePostArr = [];
    foreach($stagePosts as $stagePost){
        $stageAttr = array(
            "title" => $stagePost->post_title,
            "date" => $stagePost->post_date,
            "content" => $stagePost->post_content,
            "modalVis" => false
        );
        array_unshift($stagePostArr, $stageAttr);
    }
?>

<script type="text/javascript">
    const stagePosts = <?php echo json_encode($stagePostArr); ?>;
</script>
<script src="<?php echo get_template_directory_uri();?>/js/stagesPage.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/stagesPage.css">
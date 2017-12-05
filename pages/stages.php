<div id="stagesContainer">
    <h1>Stages</h1>
    <div id="stagesShowContainer">
        <div id="stagesShowTabContainer">
            <template v-for="year in activeYears">
                <input :id="'tab'+year" type="radio" name="stagePageTabYear" hidden>
                <label @click="selectYear(year)" class="hvr-forward" :for="'tab'+year" style="cursor: pointer">{{ year }}年度</label>
            </template>
        </div>
        <div id="stagesShowMainContainer">
            <div class="flexslider">
                <ul class="slides">
                    <li id="stagesSlides1">
                        <div v-if="selectedYear === 0">
                            selected year
                        </div>
                        <div v-else class="stagesThumbnailContainer">
                            <template v-for="postData in postsData" v-if="filterPostByDate(postData)">
                                <label for="stageSelectedButton">
                                    <div class="stageThumbnail hvr-grow" @click="selectPost(postData['title'])">
                                        {{ postData['title'] }}
                                    </div>
                                </label>
                            </template>
                        </div>
                        <button id="stageSelectedButton" hidden>button</button>
                    </li>
                    <li id="stagesSlides2">
                        <div id="stagesShowMainContent">
                            <div id="stagesShowMainTopBar">
                                <i class="fa fa-arrow-left" aria-hidden="true" @click="slideBack"></i>
                                {{ selectedPostTitle }}
                            </div>
                            <template v-for="postData in postsData" v-if="postData['title'] === selectedPostTitle">
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
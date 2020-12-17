
<div class="theiaStickySidebar">
    <div class="widget">
        <h6 class="widget-title">Latest</h6>
        <div class="entry-box">
            <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->


            <?php

            if(empty($this->latest_articles)){
                ?>
                <div class="align-center">
                    <h2>no articles found</h2>
                </div>
                <?php
            }else{

                foreach($this->latest_articles as $article){
                    ?>
                    <div class="entry entry-small">
                        <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                        <div class="thumbnail-attachment">
                            <a href="/article/show/<?php echo $article->article_slug; ?>"><img src="/article_thumbnails/<?php echo md5( $article->article_url); ?>.png" alt=""></a>
                            <a href="#" class="entry-label"><?php echo  $article->article_category_name; ?></a>
                        </div>
                        <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                        <div class="entry-body">
                            <h5 class="entry-title"><a href="/article/show/<?php echo $article->article_slug; ?>"><?php echo $article->article_title ?></a></h5>
                            <div class="entry-meta">
                                <time class="entry-date" datetime="2018-12-21"><?php echo date("F j, Y, g:i a",$article->article_date); ?></time>
                                <span>by</span>
                                <a href="<?php echo $article->article_url ?>" class="entry-cat"><?php echo $article->article_from ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>


        </div>

    </div>

    <div class="widget">
        <div class="banner-title">Advertisement</div>
        <a href="#" class="banner style-2"><img src="images/images-200x200_banner.jpg" alt=""></a>
    </div>
</div>
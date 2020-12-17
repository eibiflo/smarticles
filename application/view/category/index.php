<div class="parallax"></div>
<div id="content" class="page-content-wrap2  parallax no-tps" style="transform: none;  padding-top:30px; "  >

    <div class="container" style="transform: none;background-color: #545454">


        <div class="content-element5" style="transform: none; ">

            <div class="row" style="transform: none;">
                <aside id="sidebar" class="sticky-bar col-lg-2 col-md-12">


                    <?php
                    include(__DIR__."/../_templates/latest_articles.php");
                    ?>


                </aside>
                <main id="main" class="col-lg-10 col-md-12" style="transform: none;">
                    <div class="row no-gutters" style="transform: none;">
                        <div class="main col-lg-8 col-md-12 lside">

                            <?php

                            if(empty($this->articles)){
                                ?>
                                <div class="align-center">
                                    <h2>no articles found</h2>
                                </div>
                                <?php
                            }else{

                                ?>
                                <div class="content-element4">
                                    <div class="entry-box row">

                                        <!-- <div class="content-element2">

                                             <div class="banner-title">Advertisement</div>
                                             <a href="#" class="banner"><img src="images/images-728x90_banner.jpg" alt=""></a>

                                         </div>-->
                                        <?php

                                        foreach ($this->articles as $article){
                                            ?>

                                            <div class="col-md-6">
                                                <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
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
                                            </div>

                                            <?php
                                        }
                                        ?>



                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                            <?php

                            if(!empty($this->articles)){
                                ?>
                                <div class="align-center">
                                    <a href="#" class="btn">Load More Posts</a>
                                </div>

                                <?php
                            }

                            ?>
                        </div>
                        <aside class="sidebar sticky-bar col-lg-4 col-md-12 sbr"
                               style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                            <div class="theiaStickySidebar"
                                 style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 1342.89px;">
                                <div class="widget">
                                    <div class="banner-title">Advertisement</div>
                                    <a href="#" class="banner"><img src="images/images-250x250_banner.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Most read</h6>
                                    <ul class="most-read">
                                        <li><h6><a href="#">Coinbase to Probe for Breach in Bitcoin Cash Listing</a>
                                            </h6></li>
                                        <li><h6><a href="#">How Low Can Bitcoin Go? Charts Hint $11k in Play</a>
                                            </h6></li>
                                        <li><h6><a href="#">Singapore Central Bank Urges 'Extreme Caution' on
                                                    Bitcoin Investment</a></h6></li>
                                        <li><h6><a href="#">Morgan Stanley: Hedge Funds Poured $2 Billion into
                                                    Cryptos in 2017</a></h6></li>
                                        <li><h6><a href="#">The 2017 Tapscott Blockchain Prediction Scorecard</a>
                                            </h6></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </main>
            </div>
        </div>

        <div class="align-center">
            <div class="banner-wrap">
                <div class="banner-title">Advertisement</div>
                <a href="#" class="banner"><img src="images/images-970x90_banner.jpg" alt=""></a>
            </div>
        </div>
    </div>

</div>

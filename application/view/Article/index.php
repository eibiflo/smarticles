

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

        <div class="container">

            <div class="row">

                <main id="main" class="col-lg-9 col-md-12">

                    <div class="content-element">

                        <div class="entry-single">
                            <div class="row"><!--
                                <div class="sidebar col-sm-4">


                                    <div class="widget">

                                        <div class="banner-wrap">

                                            <div class="banner-title">Advertisement</div>
                                            <a href="#" class="banner"><img src="/images/images-160x600_banner.jpg" alt=""></a>

                                        </div>

                                    </div>

                                </div>
                                -->
                                <div class="main col-sm-8">

                                    <h2 class="title"><b><?php echo $this->article->article_title; ?></b><br><p style="font-size: 30px"><?php echo $this->article->article_category_name; ?></p></h2>
                                    <div class="content-element2">
                                        <img src="/article_thumbnails/<?php echo md5( $this->article->article_url); ?>.png" alt="">
                                    </div>
                                    <div class="content-element2">
                                        <?php echo $this->article->article_text; ?>
                                    </div>

                                    <div class="tagcloud">
                                        <a target="_blank" href="<?php echo $this->article->article_url; ?>"> <?php echo $this->article->article_from; ?></a>
                                        <!--
                                        <a href="#">blockchain</a>
                                        <a href="#">cryptocurrency</a> -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="page-nav">
                            <div>
                                <a href="#" class="info-btn prev-btn">Previous Post</a>
                            </div>
                            <div class="align-right">
                                <a href="#" class="info-btn next-btn">Next Post</a>
                            </div>
                        </div>

                    </div>


                </main>
                <aside id="sidebar" class="col-lg-3 col-md-12 sbl">

                    <div class="widget">
                        <form>
                            <a href="#" class="btn btn-style-4 icon-btn f-right"><i class="licon-magnifier"></i></a>
                            <div class="wrapper">
                                <input type="text" placeholder="Search">
                            </div>
                        </form>
                    </div>

                    <!-- Widget -->

                    <!-- Widget -->

                    <!-- Widget -->
                    <div class="widget">

                        <div class="banner-title">Advertisement</div>

                        <a href="#" class="banner"><img src="/images/images-250x250_banner.jpg" alt=""></a>

                    </div>



                    <!-- Widget -->
                    <div class="widget">

                        <h6 class="widget-title">Latest</h6>

                        <div class="entry-box">

                            <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                            <div class="entry entry-small">

                                <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                                <div class="thumbnail-attachment">
                                    <a href="#"><img src="/images/images-285x182_img1.jpg" alt=""></a>
                                    <a href="#" class="entry-label">Technical</a>
                                </div>

                                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                                <div class="entry-body">

                                    <h6 class="entry-title"><a href="singleArticle">Blockchain Advocates in Japan and South Korea Are Joining Forces</a></h6>
                                    <div class="entry-meta">

                                        <time class="entry-date" datetime="2018-12-21">Dec 21, 2018, 07:00 AM</time>

                                    </div>

                                </div>

                            </div>

                            <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                            <div class="entry entry-small">

                                <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                                <div class="thumbnail-attachment">
                                    <a href="#"><img src="/images/images-285x182_img2.jpg" alt=""></a>
                                    <a href="#" class="entry-label">news</a>
                                </div>

                                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                                <div class="entry-body">

                                    <h6 class="entry-title"><a href="#">GMO Internet's Crypto Mining Facility Is Up and Running</a></h6>
                                    <div class="entry-meta">

                                        <time class="entry-date" datetime="2018-12-21">Dec 21, 2018, 07:00 AM</time>

                                    </div>

                                </div>

                            </div>

                            <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                            <div class="entry entry-small">

                                <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                                <div class="thumbnail-attachment">
                                    <a href="#"><img src="/images/images-285x182_img3.jpg" alt=""></a>
                                    <a href="#" class="entry-label">Mining</a>
                                </div>

                                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                                <div class="entry-body">

                                    <h6 class="entry-title"><a href="#">Coinbase's Bitcoin Cash Market Is Back Online</a></h6>
                                    <div class="entry-meta">

                                        <time class="entry-date" datetime="2018-12-21">Dec 21, 2018, 07:00 AM</time>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Widget -->

                    <!-- Widget -->
                    <div class="widget">

                        <h6 class="widget-title">Categories</h6>
                        <ul class="chart-list upc style-2">

                            <li><a href="#">Analysis</a></li>
                            <li><a href="#">Blockchain</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Interview</a></li>
                            <li><a href="#">Mining</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Technical</a></li>
                            <li><a href="#">Video</a></li>

                        </ul>

                    </div>

                </aside>

            </div>

        </div>

    </div>

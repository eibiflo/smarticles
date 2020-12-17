<!doctype html>
<html>
<head>
    <title>HUGE</title>


    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700%7CSource+Sans+Pro:200,300,400,500,600,700,900"
          rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/main.css"/>
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/bootstrap-grid.min.css"/>
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/fontello.css"/>
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/owl.carousel.css"/>
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css"/>
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/responsive.css"/>

    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>


<body style="transform: none;">

<div class="loader" style="display: none;"></div>

<!--cookie-->
<!-- <div class="cookie">
        <div class="container">
          <div class="clearfix">
            <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
            <div class="f-right"><a href="#" class="button button-type-3 button-orange">Accept Cookies</a><a href="#" class="button button-type-3 button-grey-light">Read More</a></div>
          </div>
        </div>
      </div>-->

<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

<div id="wrapper" class="wrapper-container" style="transform: none;">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <a id="advanced-menu-hide" href="#"></a>
    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <header id="header" class="header sticky-header sticky">


        <!-- pre-header -->

        <div class="pre-header">

            <div class="container">

                <div class="row justify-content-between">

                    <div class="col">

                        <div class="date">
                            <?php echo  date('l, F d, Y ', time()); ?>
                        </div>

                    </div>

                    <div class="col align-right">

                        <div class="lang-area">


                            <?php if (Session::userIsLoggedIn()) { ?>
                                <a href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
                                    &nbsp;|&nbsp;
                                <a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>

                            <?php } else { ?>
                                <!-- for not logged in users -->
                                    <a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
                                &nbsp;|&nbsp;
                                    <a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
                            <?php } ?>


                        </div>

                        <div class="lang-button">
                            <!--
                           <a href="#" onclick="return;">English</a>


                           <ul class="dropdown-list">
                               <li><a href="#">English</a></li>
                               <li><a href="#">German</a></li>
                               <li><a href="#">Spanish</a></li>
                           </ul>
                           -->

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- top-header -->
        <a href="<?php echo Config::get('URL'); ?>index ">
        <div class="top-header">

            <div class="container">

                <div class="row justify-content-between align-items-center">

                    <div class="col">
                        <br>
                        <br>
                        <br>
                        <!-- Socials

                        <ul class="social-icons">

                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-rss"></i></a></li>
                            <li><a href="#"><i class="icon-hash"></i></a></li>

                        </ul>
                           -->
                    </div>

                    <div class="col">

                        <!-- logo

                        <div class="logo-wrap">

                            <a href="index.html" class="logo"><img src="images/images-logo.png" alt=""></a>

                        </div>
                        -->
                    </div>

                    <div class="col align-right">

                        <!--   <a href="#" class="btn btn-style-4 btn-big"><i class="licon-mailbox-full"></i>Subscribe</a> -->

                    </div>

                </div>

            </div>

        </div>
        </a>

        <!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->

        <!--main menu-->

        <div class="menu-holder">

            <div class="container">

                <div class="menu-wrap">

                    <div class="nav-item">

                        <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->

                        <button id="responsive-nav-button" class="responsive-nav-button"></button>
                        <nav id="main-navigation" class="main-navigation">
                            <ul id="menu" class="clearfix">
                                <li class="<?php if (View::checkForActiveController($filename, "index")) { echo " current "; } ?> "><a href="/">Home</a>

                                </li>

                                <li class="dropdown"><a href="#">Categories</a>
                                    <!--sub menu-->
                                    <div class="sub-menu-wrap">
                                        <ul>
                                            <li><a href="<?php echo Config::get('URL'); ?>category">Entertainment</a></li>
                                            <li><a href="events_month.html">Politics</a></li>
                                            <li><a href="events_masonry.html">Technology</a></li>
                                            <li><a href="events_single.html">Sport</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#">News</a>
                                    <!--sub menu-->
                                    <div class="sub-menu-wrap">
                                        <ul>
                                            <li class="sub"><a href="#">Category</a>
                                                <!--sub menu-->
                                                <div class="sub-menu-wrap sub-menu-inner">
                                                    <ul>
                                                        <li><a href="news_category.html">TODO</a></li>
                                                        <li><a href="news_category_v2.html">TODO</a></li>
                                                        <li><a href="news_list.html">TODO</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="news_classic.html">TODO</a></li>
                                            <li><a href="news_masonry.html">TODO</a></li>
                                            <li><a href="news_single.html">TODO</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                        <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->

                    </div>


                </div>

            </div>

        </div>

    </header>

    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->


    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->



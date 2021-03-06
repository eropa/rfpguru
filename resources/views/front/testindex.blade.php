<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>РФ ПГУ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
        jQuery(document).ready(function($){
            'use strict';
            jQuery('body').backstretch([
                "images/bg/bg1.jpg",
                "images/bg/bg2.jpg",
                "images/bg/bg3.jpg"
            ], {duration: 5000, fade: 500, centeredY: true });

            $("#mapwrapper").gMap({ controls: false,
                scrollwheel: false,
                markers: [{
                    latitude:40.7566,
                    longitude: -73.9863,
                    icon: { image: "images/marker.png",
                        iconsize: [44,44],
                        iconanchor: [12,46],
                        infowindowanchor: [12, 0] } }],
                icon: {
                    image: "images/marker.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46],
                    infowindowanchor: [12, 0] },
                latitude:40.7566,
                longitude: -73.9863,
                zoom: 14 });
        });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
<header class="navbar navbar-inverse navbar-fixed-top " role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html"><h1>
                     РФ ПГУ</h1></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Главная</a></li>
                <li><a href="about-us.html">О филиале</a></li>
                <li><a href="services.html">Абитуриенту</a></li>
                <li><a href="portfolio.html">Образование</a></li>
                <li><a href="blog.html">Наука</a></li>
                <li><a href="blog.html">Пресс-центр</a></li>
                <li><a href="blog.html">Контакты</a></li>
            </ul>
        </div>
    </div>
</header><!--/header-->

<section id="main-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="boxed animation animated-item-1 fade-down">Приемная компания</h2><br>
                                <p class="boxed animation animated-item-2 fade-up">
                                    Сделайте правельный выбор
                                </p>
                                <br>
                                <a class="btn btn-md animation bounce-in" href="#services">Абитуриенту</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->

<div id="content-wrapper">


    <section id="blog" class="white">
        <div class="container">
            <div class="center gap fade-down section-heading">
                <div class="gap"></div>
                <h2 class="main-title">Пресс-центр</h2>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="images/portfolio/folio02.jpg" class="img-responsive" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="post-title">Post Title</h2>
                            <div class="author">
                                <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                            </div>
                            <div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="read-more-wrapper">
                                <a href="#" class="btn btn-outlined btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="images/portfolio/folio06.jpg" class="img-responsive" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="post-title">Post Title</h2>
                            <div class="author">
                                <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                            </div>
                            <div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="read-more-wrapper">
                                <a href="#" class="btn btn-outlined btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="images/portfolio/folio11.jpg" class="img-responsive" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="post-title">Post Title</h2>
                            <div class="author">
                                <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                            </div>
                            <div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="read-more-wrapper">
                                <a href="#" class="btn btn-outlined btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="images/portfolio/folio02.jpg" class="img-responsive" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="post-title">Post Title</h2>
                            <div class="author">
                                <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                            </div>
                            <div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="read-more-wrapper">
                                <a href="#" class="btn btn-outlined btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="images/portfolio/folio06.jpg" class="img-responsive" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="post-title">Post Title</h2>
                            <div class="author">
                                <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                            </div>
                            <div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="read-more-wrapper">
                                <a href="#" class="btn btn-outlined btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="images/portfolio/folio11.jpg" class="img-responsive" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="post-title">Post Title</h2>
                            <div class="author">
                                <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                            </div>
                            <div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="read-more-wrapper">
                                <a href="#" class="btn btn-outlined btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="footer-wrapper">
    <section id="bottom" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 about-us-widget">
                    <h4>Global Coverage</h4>
                    <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">Company Overview</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Our Awesome Partners</a></li>
                            <li><a href="#">Our Services</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Articles</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="images/portfolio/folio01.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Blog Post A</a></span>
                                <small class="muted">Posted 14 April 2014</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="images/portfolio/folio02.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Blog Post B</a></span>
                                <small class="muted">Posted 14 April 2014</small>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Come See Us</h4>
                    <address>
                        <strong>Ace Towers</strong><br>
                        New York Ave,<br>
                        New York, 215648<br>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 546 840654 05
                    </address>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    &copy; 2019 Your Site Name. All Rights Reserved. <a href="https://templatemag.com/bootstrap-templates/">Bootstrap templates</a> by TemplateMag.
                </div>
                <div class="col-sm-4">
                    <ul class="pull-right">
                        <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
</div>


<script src="js/plugins.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
<script src="js/init.js"></script>
</body>
</html>

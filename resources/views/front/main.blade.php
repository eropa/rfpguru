<!DOCTYPE html>
@inject('metrics', 'App\Services\OptionService')
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>РФ ПГУ</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pe-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144"
          href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">


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
            <a class="navbar-brand" href="{{ url('/') }}"><h1>
                   {{ $metrics->GetVar("namesait") }}

                </h1></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="{{ url('/news') }}">Пресс-центр</a></li>
                <li><a href="{{ url('/sveden') }}">О филиале</a></li>
                <li><a href="{{ url('/abitur') }}">Абитуриенту</a></li>
                <li><a href="{{ url('/obrazovanie') }}">Образование</a></li>
                <li><a href="{{ url('/nauka') }}">Наука</a></li>
                <li><a href="{{ url('/fotoalbom') }}">Фото</a></li>
                <li><a href="{{ url('/kontakty') }}">Контакты</a></li>
            </ul>
        </div>
    </div>
</header><!--/header-->
@yield('slaid')


<div id="content-wrapper">
    <section id="blog" class="white">
        @yield('blog')
    </section>
</div>



<div id="footer-wrapper">
    <section id="bottom" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 about-us-widget"></div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6"></div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6"></div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Контакт</h4>
                    <address>
                        <strong>ПМР</strong><br>
                        г.Рыбница<br>
                        Победа 12<br>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 00 (373) 555 555-55
                    </address>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    &copy; 2019 rfpgu. All Rights Reserved.
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


<script src="{{ asset('js/plugins.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
<script src="{{ asset('js/init.js')}}"></script>
@yield('jsfront')
</body>
</html>

<!-- Stored in resources/views/child.blade.php -->
@extends('front.main')

@section('slaid')
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
                                        Сделайте правильный выбор
                                    </p>
                                    <br>
                                    <a class="btn btn-md animation bounce-in"
                                       href="{{ url('/abitur') }}">Абитуриенту</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
@endsection

@section('blog')

    <div class="container">
        <div class="center gap fade-down section-heading">
            <div class="gap"></div>
            <h2 class="main-title">Пресс-центр</h2>
        </div>
        <div class="gap"></div>
        <div class="row">
            @foreach($dataNews as $dataNew)
                <div class="col-md-3" >
                    <div class="post">
                        <div class="post-img-content">
                            <img src="{{
                             @asset($dataNew->fotonew)
                              }}" class="img-responsive" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary"
                                   href="{{ url('/new/'.$dataNew->urls) }}">
                                    <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="post-title">{{ $dataNew->name }}</h2>
                            <div class="author">
                                <i class="fa fa-clock-o"></i>

                                    <?php
                                    $date=$dataNew->datapublic;
                                    $date_for_database = date ("Y-m-d", strtotime($date));
                                    $date_for_time = date ("H:i", strtotime($date));
                                    $date_for_database=$date_for_database.' '.$date_for_time ;
                                    ?>
                                <time datetime="{{ $date_for_database }}">
                                    {{ $date_for_database }}
                                </time>
                            </div>
                            <div>
                                {!! $dataNew->textsmall !!}
                            </div>
                            <div class="read-more-wrapper">
                                <a href="{{ url('/new/'.$dataNew->urls) }}"
                                   class="btn btn-outlined btn-primary">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection

@section('jsfront')
    <script type="text/javascript">
        jQuery(document).ready(function($){
            'use strict';
            jQuery('body').backstretch([
                "images/slaid0.jpg",
                "images/slaid1.jpg",
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

@endsection

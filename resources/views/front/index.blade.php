<!-- Stored in resources/views/child.blade.php -->
@extends('front.main')

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
                                <a class="preview btn btn-outlined btn-primary" href="#">
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
                                <a href="#" class="btn btn-outlined btn-primary">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

@endsection
<!-- Stored in resources/views/child.blade.php -->
@extends('front.main')


@section('blog')

    <div class="container">
        <div class="gap"></div>
        <div class="row">
            <aside class="col-sm-4 col-sm-push-8">


                <div class="widget tags">
                    <h3 class="widget-title">Категории</h3>
                    <ul class="tag-cloud">
                        <?php
                        $dataTagNews=\App\ModelsTagnew::all();
                        foreach($dataTagNews as $dataTagNew){
                        ?>
                        <li>
                            <a class="btn btn-xs btn-primary btn-outlined" href="#">
                                {{ $dataTagNew->name }}
                            </a>
                        </li>

                        <?php
                        }
                        ?>
                    </ul>
                </div><!--/.tags-->

            </aside>
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    <!--/.blog-item-->
                    @foreach($dataNews as $dataNew)
                    <div class="blog-item">
                        <div class="blog-featured-image">
                            <img class="img-responsive img-blog"
                                 src="{{
                             @asset($dataNew->fotonew)
                              }}" alt="" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary"
                                   href="{{ url('/new/'.$dataNew->urls) }}"
                                   rel=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <a href="blog-item.html"><h3 class="main-title">
                                    {{ $dataNew->name }}
                                    </h3></a>
                            <div class="entry-meta">
                                <span><i class="fa fa-folder"></i> <a href="#"> <?php
                                        $namedata=\App\ModelsTagnew::find($dataNew->tagnews_id );
                                        echo $namedata->name;
                                        ?></a></span>
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
                            {!! $dataNew->textsmall !!}
                            <div class="read-more-wrapper">
                                <a href="{{ url('/new/'.$dataNew->urls) }}"
                                   class="btn btn-outlined btn-primary">Читать</a>
                            </div>
                        </div>
                    </div><!--/.blog-item-->
                    @endforeach

                    <ul class="pagination pagination-lg">
                        @if($list>1)
                            <li><a href="{{ url('/news/'.($list-1)) }}"><i class="fa fa-angle-left">Предыдущая</i></a></li>
                        @endif
                        @if($next>0)
                            <li><a href="{{ url('/news/'.($list+1))}}">Следующая<i class="fa fa-angle-right"></i></a></li>
                        @endif
                    </ul><!--/.pagination-->
                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </div>

@endsection
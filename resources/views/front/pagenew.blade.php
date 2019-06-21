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
                    <div class="blog-item">
                        <div class="blog-featured-image">
                            <img class="img-responsive img-blog"
                                 src="{{ asset($dataNews->fotonew) }}"
                                 alt="" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary"
                                   href="#"
                                   rel="prettyPhoto">
                                    <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="main-title">{{ $dataNews->name }}</h3>
                            <div class="entry-meta">

                                <span><i class="fa fa-folder"></i> <a href="#"> Style</a></span>
                                <span><i class="fa fa-clock-o"></i> April 5th, 2014</span>
                            </div>
                            <p class="lead">

                                {!! $dataNews->textsmall !!}
                            </p>

                            {!! $dataNews->textfull !!}
                            <hr>

                            <div class="tags">
                                <i class="fa fa-tags"></i> Категория
                                <a class="btn btn-xs btn-primary btn-outlined" href="#">
                                    <?php
                                    $namedata=\App\ModelsTagnew::find($dataNews->tagnews_id );
                                    echo $namedata->name;
                                    ?>
                                    </a>
                            </div>

                            <hr>




                        </div>
                    </div>

                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </div>

@endsection
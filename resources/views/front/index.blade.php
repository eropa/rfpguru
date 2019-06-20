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


        </div>
    </div>

@endsection
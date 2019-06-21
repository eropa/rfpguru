<!-- Stored in resources/views/child.blade.php -->
@extends('front.main')


@section('blog')
    <div class="container">
        <div class="gap"></div>
        <div class="row">
                {!! $dataPage->texthtml !!}
        </div>
    </div>
@endsection
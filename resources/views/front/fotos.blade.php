<!-- Stored in resources/views/child.blade.php -->
@extends('front.main')


@section('blog')
    <div class="container">
        <div class="gap"></div>
        <div class="row">
            <h1><center>Фотографии</center></h1>
            @foreach($fotos as $foto)
                <div class="col-md-4" >

                        <img id="holder"
                             src="{{
                             @asset($foto->fotourl)
                              }}"
                             style="margin-top:15px;max-height:210px;">
                        <br>
                        {{ $foto->name }}
                </div>
            @endforeach

        </div>
    </div>
@endsection
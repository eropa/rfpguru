<!-- Stored in resources/views/child.blade.php -->
@extends('front.main')


@section('blog')
    <div class="container">
        <div class="gap"></div>
        <div class="row">
            <h1><center>Фотоальбом</center></h1>
            @foreach($datas as $data)
                <div class="col-md-3" >
                    <a href="{{ url("fotoalbom/".$data->id) }}">
                        <img id="holder"
                             src="{{
                             @asset($data->foto)
                              }}"
                             style="margin-top:15px;max-height:210px;">
                        <br>
                        {{ $data->name }}
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Редактировать страницу страницы
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <form  method="POST" action="{{ url('admin/option/') }}" >
                    @foreach($datas as $data)
                        <div class="form-group">
                            <label for="exampleFormControlInput1">{{$data->name }} ({{ $data->slug }})</label>
                            <input class="form-control form-control-lg"
                                   type="text"
                                   name="{{ $data->slug }}"
                                   value="{{ $data->value }}"
                                   placeholder="Название">
                        </div>
                    @endforeach
                    @csrf
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>
        </div>
    </div>

@endsection
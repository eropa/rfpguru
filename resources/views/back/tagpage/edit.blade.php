<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Редактирование
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <form  method="POST" action="{{ url('admin/tagpage/'.$data->id) }}" >
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="name"
                               value="{{$data->name}}"
                               placeholder="название категории">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ЧПУ</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="slug"
                               value="{{$data->slug}}"
                               placeholder="название чпу">

                    </div>
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>
        </div>
    </div>

@endsection
<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Создание новости
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <form  method="POST" action="{{ url('admin/fotoalbom') }}" >

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="name"
                               placeholder="Название">
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                           <span class="input-group-btn">
                             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                               <i class="fa fa-picture-o"></i> Картинка новости
                             </a>
                           </span>
                            <input id="thumbnail" class="form-control"
                                   type="text" name="foto">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>
        </div>
    </div>

@endsection
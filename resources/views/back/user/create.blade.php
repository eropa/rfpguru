<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Редактировать пользователя
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <form  method="POST" action="{{ url('admin/user/') }}" >
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ф.И.О.</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="name"
                               placeholder="Название">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">email</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="email"
                               placeholder="Название">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Новый пароль</label>
                        <input class="form-control form-control-lg"
                               type="password"
                               name="password"
                               placeholder="Новый пароль">
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Создать пользователя</button>
                </form>

            </div>
        </div>
    </div>

@endsection
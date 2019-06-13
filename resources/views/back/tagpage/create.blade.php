<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Добалвение группы страниц
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
              <form  method="POST" action="{{ url('admin/tagpage') }}" >
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Название</label>
                      <input class="form-control form-control-lg"
                             type="text"
                             name="name"
                             placeholder="название категории">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">ЧПУ</label>
                      <input class="form-control form-control-lg"
                             type="text"
                             name="slug"
                             placeholder="название чпу">
                  </div>
                  @csrf
                  <button type="submit" class="btn btn-primary">Создать</button>
              </form>
            </div>
        </div>
    </div>

@endsection
<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Добалвение группы новостей
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
              <form  method="POST" action="{{ url('admin/tagnew') }}" >
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Название</label>
                      <input class="form-control form-control-lg"
                             type="text"
                             name="name"
                             placeholder="название категории">
                  </div>
                  @csrf
                  <button type="submit" class="btn btn-primary">Создать</button>
              </form>
            </div>
        </div>
    </div>

@endsection
<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Список фотоальбомов
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <a class="btn btn-success"
                   href="{{ url('admin/fotoalbom/create') }}" role="button">+ Добавить</a>
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Дата пуб.</th>
                        <th scope="col">Название</th>
                        <th scope="col">Фото главное</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <th>
                                {{ $data->id }}
                            </th>
                            <th>
                                {{ $data->created_at }}
                            </th>
                            <th>
                                {{ $data->name }}
                            </th>
                            <th>
                                <img id="holder"
                                     src="{{
                             @asset($data->foto)
                              }}"
                                     style="margin-top:15px;max-height:100px;">
                            </th>
                            <th>
                                <a href="{{ url('admin/fotoalbom/'.$data->id.'/edit') }}"
                                   class="btn btn-warning"
                                   role="button">
                                    Редактировать
                                    </a>
                                <a href="{{ url('admin/fotos/'.$data->id.'') }}"
                                   class="btn btn-info"
                                   role="button">
                                    Список фотографий
                                </a>
                                <a href="#"
                                   class="btn btn-danger"
                                   role="button"
                                   onclick="event.preventDefault(); document.getElementById('delete{{$data->id}}').submit();"
                                >
                                    Удалить
                                </a>

                                <form id="delete{{$data->id}}" action="{{ url('admin/fotoalbom/'.$data->id) }}"
                                      method="POST"
                                      style="display: none;">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete" />
                                </form>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection